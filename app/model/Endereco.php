
<?php

/*
create table tb_endereco(
-id  int primary key auto_increment,
-cep     varchar(20)not null,
-logradrouro varchar(250)not null,
-numero      int not null,
-complemento varchar(80)not null,
-bairro      varchar(80)not null,
-cidade      varchar(80)not null,
-estado          varchar(80)not null,
-referencia  varchar(250),

-id_usuario_fk     int,
foreign key (id_usuario_fk) references tb_usuario(id),

-dtcadastro date not null,
-dtmodificacao date not null
);
*/

class Endereco{
	
	private $id;
	private $cep;
	private $logradouro;
	private $numero;
	private $complemento;
	
	private $cidade;
	private $estado;
	private $referencia;
	private $bairro;
	private $Usuario;
	
	private $dtcadastro ;
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