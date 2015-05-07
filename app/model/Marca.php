<?php
/*create table tb_marca(
id            int primary key auto_increment,
imagem        varchar(100),
nome          varchar(100),
posicao       int, 
descricao     varchar(250),
dtcadastro    date,
dtmodificacao date
);*/

class Marca{
	private $id;
	private $nome;
	private $imagem;
	private $descricao;
	private $posicao;
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