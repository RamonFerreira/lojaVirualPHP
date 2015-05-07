drop table tb_endereco;
drop table tb_usuario;
drop table tb_login;

/*


create table tb_login(
id       int primary key auto_increment,
cpf      varchar(12)  not null unique,
email    varchar(100) not null unique,
senha    varchar(41)  not null,
tipo        enum('A','U'),
situacao    enum('A','B','S','C','E','AC'),
remail      enum('S','N'),
islogado    enum('S','N'),
dtcadastro    date,
dtmodificacao date
);



--insert into tb_login(id, cpf, email, senha, tipo, situacao, dtcadastro,dtmodificacao) value(null, );
-- ADM login adm
-- USER login public


create table tb_usuario(
id  int primary key auto_increment,
nome         varchar(150)not null,
sobrenome    varchar(150)not null,
telresidencial varchar(15) not null,
telcelular     varchar(15) ,
telcomercial   varchar(15) ,
dtnascimento    date,
cpf             varchar(12) not null,
sexo            enum('M','F'),
situacao        enum('A','B','S','C','E','AC'),
tipo            enum('A','U'),
id_login_fk     int,
foreign key (id_login_fk) references tb_login(id),
dtcadastro date,
dtmodificacao date
);





create table tb_endereco(
id  int primary key auto_increment,
cep     varchar(20)not null,
logradrouro varchar(250)not null,
numero      int not null,
complemento varchar(80)not null,
bairro      varchar(80)not null,
cidade      varchar(80)not null,
estado          varchar(80)not null,
referencia  varchar(250),
id_usuario_fk     int,
foreign key (id_usuario_fk) references tb_usuario(id),
dtcadastro date not null,
dtmodificacao date not null
);



delete from tb_usuario;
delete from tb_login;

create table tb_marca(
id            int primary key auto_increment,
nome          varchar(100),
imagem        varchar(100),
descricao     varchar(250),
posicao       int, 
dtcadastro    date,
dtmodificacao date
);

create table tb_departamento(
id           int primary key auto_increment,
nome         varchar(100),
posicao      int,
descricao     varchar(250),
dtcadastro date,
dtmodificacao date
);

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




create table ta_tamanho(
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


create table tb_tamanho_produto(
id               int primary key auto_increment,
id_tamanho_fk    int,
foreign key (id_tamanho_fk) references ta_tamanho(id),
id_produto_fk    int,
foreign key (id_produto_fk) references tb_produto(id)
dtcadastro    date,
dtmodificacao date
)




create table tb_produto(
id               int primary key auto_increment,
nome             varchar(250)not null,
descricao        varchar(250)not null,
codigo 			 varchar(100),
quantidade       varchar(10),
id_fornecedor_fk   int,
id_marca_fk        int,
id_departamento_fk int,
dtcadastro    date,
dtmodificacao date,
foreign key (id_fornecedor_fk) 		references tb_fornecedor(id),
foreign key (id_marca_fk) 			references tb_marca(id)
);


create table tb_departamento_produto(
id               int primary key auto_increment,
id_departamento_fk    int,
foreign key (id_departamento_fk) references tb_departamento(id),
id_produto_fk    int,
foreign key (id_produto_fk) references tb_produto(id)
dtcadastro    date,
dtmodificacao date
)

*/



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

