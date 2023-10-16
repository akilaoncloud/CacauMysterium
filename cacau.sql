CREATE DATABASE cacau;

CREATE TABLE produtos (
    idproduto int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeProd varchar(45) NOT NULL,
    precoUn int NOT NULL,
    descricao varchar(200) NOT NULL,
    codigo int NOT NULL
);

CREATE TABLE usuarios (
    idusuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeC varchar(45) NOT NULL,
    nomeUser varchar(45) NOT NULL,
    email varchar(45) NOT NULL,
    senha varchar(45) NOT NULL,
    CPF varchar(45) NOT NULL
);

CREATE TABLE endereco (
    idendereco int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    logradouro varchar(100) NOT NULL,
    numero int,
    bairro varchar (30) NOT NULL,
    cidade varchar (50) NOT NULL,
    estado varchar (20) NOT NULL
);

CREATE TABLE cliente (
    idcliente int NOT NULL AUTO_INCREMENT primary key,
    idusuario int NOT NULL,
    idendereco int NOT NULL,
    coin int NOT NULL,
    FOREIGN KEY (idusuario) REFERENCES usuarios(idusuario),
    FOREIGN KEY (idendereco) REFERENCES endereco(idendereco)
);

CREATE TABLE venda (
    idvenda int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idcliente int NOT NULL,
    idproduto int NOT NULL,
    statusVenda varchar(15) NOT NULL,
    dataVenda date NOT NULL,
    FOREIGN KEY (idcliente) REFERENCES cliente(idcliente),
    FOREIGN KEY (idproduto) REFERENCES produtos(idproduto)
);