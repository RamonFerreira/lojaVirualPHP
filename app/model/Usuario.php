
<?php
/*

create table tb_usuario(
-id  int primary key auto_increment,
-nome         varchar(150)not null,
-sobrenome    varchar(150)not null,
-telresidencial varchar(15) not null,
-telcelular     varchar(15) ,
-telcomercial   varchar(15) ,
-dtnascimento    date,
-cpf             varchar(12) not null,
-sexo            enum('M','F'),
-situacao        enum('A','B','S','C','E','AC'),
-tipo            enum('A','U'),
-id_login_fk     int,
foreign key (id_login_fk) references tb_login(id),
-dtcadastro date,
-dtmodificacao date
);

*/
class Usuario{

	private $id;
	private $nome;
  private $sobrenome;
  private $telresidencial;
	private $telcelular;
  private $telcomercial;
  private $dtnascimento;
  private $cpf;
	private $sexo;
	private $situacao;
	private $tipo;
	private $dtcadastro;
	private $dtmodificacao;
	
	private $Login;
	private $Endereco;
	
	
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