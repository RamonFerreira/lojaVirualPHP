<?php

/*

create table tb_fornecedor(
 id               int primary key auto_increment,
 nome             varchar(50) not null,
 eamil            varchar(80)not null,
 descricao        varchar(255), 
 cpf				 varchar(50),
 cnpj			 varchar(50),
 telresidencial   varchar(15),
 telcelular       varchar(15), 
 telcomercial     varchar(15), 
 endereco            varchar(255), 
 pomtoreferencia     varchar(250), 
 dtcadastro    		date,
 dtmodificacao 		date
)	

*/

class Fornecedor{
	private $id;
	private $nome;
	private $email;
	private $descricao;
	private $cpf;
	private $cnpj;
	private $telresidencial; 
	private $telcelular;  
	private $telcomercial;   
	private $dtcadastro; 
	private $dtmodificacao;
	
	private $endereco;
	private $pomtoreferencia;


		public function __get($property) {
	    if (property_exists($this, $property)) {
	      return $this->$property;
	    }
  	}

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
    return $this;
  }
}
?>