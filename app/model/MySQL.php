<?php
/*
 * Classe MySQL
 *
 */


class MySQL extends mysqli
{
    /*
     * Criação de variáveis
     */
     
    //(boolean) Status da conexão
    private $con_status;
    
    
    
    /*
     * Método construtor:
     *
     * Abre conexão com o servidor. Se algum erro ocorrer,
     * o erro é mostrado e a classe morre.
     *
     * @retorno 
     *     $con_status = true: Se conexão estiver OK
     */
    public function __construct($db_host = '', $db_user = '', $db_pass = '', $db_name = '')
    {
        //Realiza conexão
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
               die("Erro na conexão: " . mysqli_connect_error());
        }
        }
        
        
        //Seta status da conexão como TRUE
        $this->con_status = true;
        
        return $this->con_status;
    }
    
    
    
    /*
     * Método destrutor:
     *
     * Fecha conexão apenas se o valor da variável que guarda
     * o status da conexão ($con_status) for TRUE.
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
     * Retorna resultado único de uma query, sempre a primeira
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
        //Pega todos as linhas da consulta. Um elemento vazio é adiciona no final.]
        for($i = 0; $resultado_query[$i] = mysqli_fetch_assoc($resultado); $i++);


        //Remove o último elemento do array, o vazio.
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
