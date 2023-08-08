CREATE DATABASE cacau;

CREATE TABLE produto (
    idproduto int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeProd varchar(45) NOT NULL,
    descricao varchar(200) NOT NULL,
    codigo int NOT NULL
);

CREATE TABLE usuario (
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
    estado varchar (20) NOT NULL,
    pais varchar (20) NOT NULL
);

CREATE TABLE cliente (
    idcliente int NOT NULL auto_increment primary key,
    fk_cliente_idusuario int NOT NULL,
    fk_cliente_idvenda int,
    fk_cliente_idendereco int NOT NULL,
    FOREIGN KEY (fk_cliente_idusuario) REFERENCES usuario(idusuario),
    FOREIGN KEY (fk_cliente_idvenda) REFERENCES venda(idvenda),
    FOREIGN KEY (fk_cliente_idendereco) REFERENCES endereco(idendereco)
);

CREATE TABLE venda (
    idvenda int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fk_venda_idcliente int NOT NULL,
    fk_venda_idproduto int NOT NULL,
    statusProduto varchar(15) NOT NULL,
    dataVenda date NOT NULL,
    FOREIGN KEY (fk_venda_idcliente) REFERENCES cliente(idcliente),
    FOREIGN KEY (fk_venda_idproduto) REFERENCES produto(idproduto)
);
