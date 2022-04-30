drop database if exists EcoStore;
create database EcoStore;
use EcoStore;

create table Usuario(
	CodUsu int,
    Nome varchar(25),
    DataNasc date,
    CPF int,
    Endereco int,
    Telefone int,
    TipoUsuario varchar(10),
    primary key (CodUsu)
);

create table Telefone(
	CodTel int,
    CodUsu int,
    Numtel varchar(20),
    primary key (CodTel)
);

create table Endereco(
	CodEnd int,
    CodUsu int,
    Logradouro varchar(50),
    CEP int,
    Numero int,
    Complemento varchar(25),
	primary key (CodEnd)
);

create table Vendedor(
	CodVend int,
    CodUsu int,
    NomeEmp varchar(50),
    Descricao varchar(255),
    primary key (CodVend)
);

create table Produto(
	CodProduto int,
    CodVend int,
    Validade date,
    Descricao varchar(255),
    ValorUni double,
    Foto mediumblob,
    primary key (CodProduto)
);

create table Venda(
	CodVenda int,
    CodUsu int,
    CodProduto int,
    FormPag varchar(25),
    Quantidade int,
    DataPag date,
    primary key (CodVenda)
);

alter table Usuario
add foreign key (Endereco) references Endereco(CodEnd),
add foreign key (Telefone) references Telefone(CodTel);

alter table Telefone
add foreign key (CodUsu) references Usuario(CodUsu);

alter table Endereco
add foreign key (CodUsu) references Usuario(CodUsu);

alter table Vendedor
add foreign key (CodUsu) references Usuario(CodUsu);

alter table Produto
add foreign key (CodVend) references Vendedor(CodVend);

alter table Venda
add foreign key (CodUsu) references Usuario(CodUsu),
add foreign key (CodProduto) references Produto(CodProduto);
