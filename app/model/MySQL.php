<?php
/*
 * Classe MySQL
 *
 */


class MySQL extends mysqli
{
    /*
     * Cria��o de vari�veis
     */
     
    //(boolean) Status da conex�o
    private $con_status;
    
    
    
    /*
     * M�todo construtor:
     *
     * Abre conex�o com o servidor. Se algum erro ocorrer,
     * o erro � mostrado e a classe morre.
     *
     * @retorno 
     *     $con_status = true: Se conex�o estiver OK
     */
    public function __construct($db_host = '', $db_user = '', $db_pass = '', $db_name = '')
    {
        //Realiza conex�o
        if (empty($db_host))
        {
            @parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
        else
        {
            @parent::__construct($db_host, $db_user, $db_pass, $db_name);
        }
        
        
        //Verifica se existem erros
        if (mysqli_connect_error())
        {
        	
        	@parent::__construct(DB_HOST_HOST, DB_USER_HOST, DB_PASS_HOST, DB_NAME_HOST);
            if (mysqli_connect_error()){
               die("Erro na conex�o: " . mysqli_connect_error());
        }
        }
        
        
        //Seta status da conex�o como TRUE
        $this->con_status = true;
        
        return $this->con_status;
    }
    
    
    
    /*
     * M�todo destrutor:
     *
     * Fecha conex�o apenas se o valor da vari�vel que guarda
     * o status da conex�o ($con_status) for TRUE.
     */
    public function __destruct()
    {
        if($this->con_status)
        {
            parent::close();
            unset($this->con_status);
        }
    }
    
    
    
    /*
     * Retorna resultado �nico de uma query, sempre a primeira
     * coluna da primeira linha independente de quantas linhas
     * ou colunas o resultado tiver.
     * 
     * @args:
     *     $query: SQL Query
     *
     * @retorno:
     *     $linha[0]: Primeira coluna da primeira linha
     */
    public function getResult($query)
    {
        //Executa SQL Query
        $resultado = parent::query($query);
        
        
        //Verifica se existe erros
        if(mysqli_error($this))
        {
            die("Erro ao executar query: " . mysqli_error($this));
        }
        
        
        //Pega apenas primeira linha do resultado da SQL Query
        $linha = mysqli_fetch_row($resultado);
        
        
        //Retorna apenas primeiro coluna da linha
        return $linha[0];
    }

    
    
    /*
     * Retorna todas as linhas e colunas de uma consulta SQL.
     *
     * @args:
     *     $query: SQL Query
     *
     * @retorno:
     *     $resultado_query: Array com todas as linhas e colunas da consulta
     */
    public function getRows($query)
    {
        //Executa query
        $resultado = parent::query($query);
        
        
        //Verifica se existem erros
        if(mysqli_error($this))
        {
            die("Erro ao executar query: " . mysqli_error($this));
        }
        
        
        //De: http://php.net/manual/en/function.mysql-fetch-array.php#87201
        //Pega todos as linhas da consulta. Um elemento vazio � adiciona no final.]
        for($i = 0; $resultado_query[$i] = mysqli_fetch_assoc($resultado); $i++);


        //Remove o �ltimo elemento do array, o vazio.
        array_pop($resultado_query);


        //Retorna todas as linhas
        return $resultado_query;
    }
    
    
    
    /*
     * Retorna linha unica com diversas colunas (se houver)
     * de uma query.
     *
     * @args:
     *     $query: SQL Query
     *
     * @retorno:
     *     $linha: Array com todas as colunas da consulta
     */
    public function getRow($query)
    {
        //Executa query
        $resultado = parent::query($query);
        
        
        //Verifica se existem erros
        if(mysqli_error($this))
        {
            die("Erro ao executar query: " . mysqli_error($this));
        }
        
        
        //Pega apenas primeira linha de resultado
        $linha = mysqli_fetch_assoc($resultado);
        
        
        //Retorna linha com suas colunas
        return $linha;
    }
}
?>
