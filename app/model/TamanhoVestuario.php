<?PHP

/*
create table ta_tamanho_vestuario
id               int primary key auto_increment,
nome             varchar(5),
numero           int,
dtcadastro    date,
dtmodificacao date
)
insert into ta_tamnho values(null,'P',3,sysdate(),sysdate());
insert into ta_tamnho values(null,'M',3,sysdate(),sysdate());
insert into ta_tamnho values(null,'G',3,sysdate(),sysdate());
insert into ta_tamnho values(null,'GG',3,sysdate(),sysdate());
insert into ta_tamnho values(null,'XG',3,sysdate(),sysdate());
insert into ta_tamnho values(null,'XL',3,sysdate(),sysdate());
insert into ta_tamnho values(null,'XXL',3,sysdate(),sysdate());
*/

class TamanhoVestuario{
	
	private $id;
	private $nome;
	private $numero;
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