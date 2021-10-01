<?php

/* PARÂMETROS DE CONEXÃO MYSQL I
   1 - HOST -> ONDE O BANCO DE DADOS ESTÁ RODANDO
   2 - USER -> USUÁRIO DO BANCO DE DADOS
   3 - PASSWORD -> SENHA DO USUÁRIO DE BANCO DE DADOS
   4 - DATABASE -> NOME DO BANCO DE DADOS
*/

const HOST = 'localhost'; // onde
const USER = 'root'; // quem
const PASSWORD = 'bcd127';
const DATABASE = 'icatalogo'; // o quê

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if ($conexao === false) {
    
    die (mysqli_connect_error());

}

// echo '<pre>';
// var_dump($conexao);
// echo '</pre>';

?>