<?php
/*


create table tb_detalheVestuario
    id   int primary key auto_increment,
	sku                    varchar(100),
	cor_predominante       varchar(80),
	conteudo_da_embalagem  varchar(250),
	aplicacao              varchar(100),
	genero                 varchar(100),
	tipo                   varchar(100),
	estilo                 varchar(100),
	caracteristicas_do_vestuario varchar(100), 
	gola                         varchar(100),
	nome_fornecedor              varchar(100),
	sac_do_fornecedor            varchar(255),

	altura       decimal(15,8)	,              
	largura      decimal(15,8)	,              
	comprimento  decimal(15,8)	,              
	diametro     decimal(15,8)	,
	peso         decimal(15,8)	,
	id_produto_fk    int,
foreign key (id_produto_fk) references tb_produto(id)
                            
)


*/

class DetalheVestuario{
	    
	    
		private $sku;
		private $codigoBarras;
		private $EAN;
		private $JAN;
		private $MPN;
		private $localizacao;
		private $preco;
		private $grupoImposto;
		
		private $quantidade;
		private $miniporvenda;
		private $reduzirestoque;
		private $situaca;
		private $frete;
		private $urlamigavel;
		private $dtdisponibilidade;
		private $dimensoes;
		private $unidademedida;
		private $peso;
		private $unidadePeso;
		private $situacao;
		private $posicao;

}
?>