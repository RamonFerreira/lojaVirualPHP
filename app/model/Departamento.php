<?php
/*


create table tb_departamento(
id           int primary key auto_increment,
nome         varchar(100),
posicao      int,
descricao     varchar(250),
dtcadastro date,
dtmodificacao date
);


*/

class Departamento{
	
	private $id;
	private $nome;
	private $posicao;
	private $descricao;
	private $dtcadastro;
	private $dtmodificacao;

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