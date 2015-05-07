<?php
/*

create table tb_tamanho_produto(
id               int primary key auto_increment,
id_tamanho_fk    int,
foreign key (id_tamanho_fk) references ta_tamanho(id),
id_produto_fk    int,
foreign key (id_produto_fk) references tb_produto(id)
	dtcadastro    date,
	dtmodificacao date
)

*/

class TamnhoVestuarioProduto{
	
	private $id;
	private $id_tamanho_fk;
	private $id_produto_fk;
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