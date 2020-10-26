
create database IF NOT EXISTS coffeeshop;

use coffeeshop;


DROP TABLE IF EXISTS `produtos`;

create table Produtos(
	cod_produto INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_produto varchar(60) NOT NULL, 
    descricao_produto varchar(400) NOT NULL,
    regiao varchar(20) NOT NULL,
    peso varchar(4),
    preco decimal(5,2) NOT NULL,
    imagem VARCHAR(150)
    ) DEFAULT CHARSET = utf8;

SELECT * FROM Produtos;

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE Pedidos(
	cod_pedido INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_cliente VARCHAR(50) NOT NULL,
    endereco VARCHAR(120) NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    nome_produto VARCHAR(50) NOT NULL,
    valor_unit DECIMAL(3,2) NOT NULL,
    quantidade INT NOT NULL,
    valor_total DECIMAL (7,2)    
);

INSERT INTO Produtos (cod_produto, nome_produto, descricao_produto, regiao, peso, preco, imagem)
VALUES (DEFAULT, 'Café de São Paulo', 'Café especial da região da Mogiana', 'São Paulo', '250g', '18,90', 'img/cafe_sp.jpg'),
(DEFAULT, 'Café de Minas', 'Café especial do Sul de Minas', 'Minas Gerais', '250g', '18,90', 'img/cafe_mg.jpg'),
(DEFAULT, 'Café do Espírito Santo', 'Café especial da Serra do Caparaó', 'Espírito Santo', '250g', '18,90', 'img/cafe_es.jpg'),
(DEFAULT, 'Café do Rio de Janeiro', 'Café especial Carioca', 'Rio de Janeiro', '250g', '18,90', 'img/cafe_rj.jpg'),
(DEFAULT, 'Café da Bahia', 'Café especial da Chapada Diamantina', 'Bahia', '250g', '18,90', 'img/cafe_ba.jpg'),
(DEFAULT, 'Café do Paraná', 'Café especial Paranaense', 'Paraná', '250g', '18,90', 'img/cafe_pr.jpg');

INSERT INTO Pedidos (cod_pedido, nome_cliente, endereco, telefone, nome_produto, valor_unit, quantidade, valor_total)
VALUES (DEFAULT, 'Mário Menezes', 'Rua Paranaguá, 1234, Centro, São Paulo, SP', 11543214321, 'Café de Minas', '18,90', '3', (valor_unit * quantidade)); 

SELECT * FROM Pedidos;

