<?php



/*
c
create table tb_produto(
id               int primary key auto_increment,
nome             varchar(250)not null,
descricao        varchar(250)not null,
codigo  		 varchar(100),
id_departamento_fk int,
id_fornecedor_fk   int,
id_marca_fk        int,
dtcadastro    date,
dtmodificacao date,
foreign key (id_departamento_fk) 			references tb_departamento(id),
foreign key (id_fornecedor_fk) 		references tb_fornecedor(id),
foreign key (id_marca_fk) 			references tb_marca(id),
);

*/
	class Produto{
		
		private $id;
		private $nome;
		private $imagem;
		private $modelo;
		private $descricao;
		
		private $sku	;
		private $codigo ;
		private $localizacao;
		private $preco;
		private $quantidade;
		private $miporvenda;
		
		private $situacaoestoque; //2-3 Dias | em Estoque | Fora De Estoque |  Pedido Antecipado
		private $frete;
		private $urlamigavel;
		private $dtdisponível;

		private $comprimento;
		private $altura;
		private $largura;
		private $unidadedemedida;
		private $peso;
		private $uniddedepeso;
		private $situacao;
		private $posicao;



		
		private $dtcadastro;
		private $dtmodificacao;
		private $Fronecedor;
		private $Marca;


		public function __get($property){
			return $this->$property;
		}

		public function __set($property, $value){
			$this->$property = $value;
		}

	}
?>