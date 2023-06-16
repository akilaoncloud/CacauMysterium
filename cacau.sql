CREATE DATABASE cacau;

CREATE TABLE produtos (
    idprodutos int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeProd varchar(45) NOT NULL,
    descricao varchar(45) NOT NULL,
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
