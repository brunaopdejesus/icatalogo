#HABILITA O BANCO DE DADOS QUE SERÁ USADO
use icatalogo;

#SELECIONANDO DADOS DE PRODUTOS
SELECT * FROM tbl_produto;

#SELECIONANDO DADOS DE CATEGORIA
SELECT * FROM tbl_categoria;

#SELECIONA OS DADOS DE PRODUTO E CATEGORIA
SELECT p.*, c.descricao AS nome_categoria FROM tbl_produto p
INNER JOIN tbl_categoria c ON p.categoria_id = c.id;