CREATE DATABASE cacau;

CREATE TABLE produtos (
    idprodutos int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeProd varchar(45) NOT NULL,
    descricao varchar(200) NOT NULL,
    codigo int NOT NULL
);

CREATE TABLE usuarios (
    idusuarios int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeC varchar(45) NOT NULL,
    nomeUser varchar(45) NOT NULL,
    email varchar(45) NOT NULL,
    senha varchar(45) NOT NULL,
    CPF varchar(45) NOT NULL
);

CREATE TABLE endereco (
    idendereco int not null AUTO_INCREMENT PRIMARY KEY,
    endereco varchar(100) NOT NULL,
    numero int,
    bairro varchar (30) NOT NULL,
    cidade varchar (50) NOT NULL,
    estado varchar (20) NOT NULL,
    pais varchar (20) NOT NULL
);

CREATE TABLE cartao (
    idcartao int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario int not NULL,
    numCartao int NOT NULL,
    cvc int NOT NULL,
    dtVal date NOT NULL,
    nomeCartao varchar(50) NOT NULL,
    endereco int NOT NULL,
    FOREIGN KEY (usuario) REFERENCES usuarios(idusuarios),
    FOREIGN KEY (endereco) REFERENCES endereco(idendereco)
);

CREATE TABLE cliente (
    idcliente int NOT null auto_increment primary key,
    fk_cliente_idusuario int not null,
    fk_cliente_idprodutos int,
    fk_cliente_idcartao int not null,
    fk_cliente_idendereco int not null,
    FOREIGN KEY (fk_cliente_idusuario) REFERENCES usuarios(idusuarios),
    FOREIGN KEY (fk_cliente_idprodutos) REFERENCES produtos(idprodutos),
    FOREIGN KEY (fk_cliente_idcartao) REFERENCES cartao(idcartao),
    FOREIGN KEY (fk_cliente_idendereco) REFERENCES endereco(idendereco)
);

CREATE TABLE venda (
    fk_venda_idcliente int not null,
    fk_venda_idprodutos int not null,
    statusProduto varchar(15) not null,
    dataVenda date,
    FOREIGN KEY (fk_venda_idcliente) REFERENCES cliente(idcliente),
    FOREIGN KEY (fk_venda_idprodutos) REFERENCES produtos(idprodutos)
);
