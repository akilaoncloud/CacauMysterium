CREATE TABLE produtos (
    idprodutos int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeProd varchar(45) NOT NULL,
    descricao varchar(45) NOT NULL,
    codigo int NOT NULL UNIQUE
    
);

CREATE TABLE usuarios (
  idusuarios int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nomeC varchar(45) NOT NULL,
  nomeUser varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  senha varchar(45) NOT NULL,
  CPF varchar(45) NOT NULL UNIQUE
);
