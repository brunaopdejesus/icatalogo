<?php

session_start();

// CONEXÃO COM BANCO DE DADOS
require('../database/conexao.php');

// FUNÇÃO DE VALIDAÇÃO
function validaCampos() {

    $erros = [];

    if(!isset($_POST['descricao']) || $_POST['descricao'] == "") {

        $erros[] = "O campo de descrição é de preenchimento obrigatório!";

    }

    return $erros;

}

/* TRATAMENTO DOS DADOS VINDOS DO FORMULARIO
   - TIPOS DA AÇÃO
   - EXECUÇÃO DOS PROCESSOS DA AÇÃO SOLICITADA 
*/

switch ($_POST['acao']) {
    case 'inserir':

        $erros = validaCampos();

        // VERIFICAR SE EXISTEM ERROS
        if (count($erros) > 0) {
            
            $_SESSION["erros"] = $erros;

            header('location: index.php');

            exit();

        }

        $descricao = $_POST['descricao'];

        //  MONTAGEM DA INSTRUÇÃO SQL DE INSERÇÃO DE DADOS
        $sql = "INSERT INTO tbl_categoria (descricao) VALUES ('$descricao')";
        // echo $sql;exit;

        /* MYSQLI_QUERI PARÂMETROS:
           1 - UMA CONEXÃO ABERTA E VÁLIDA
           2 - UMA INSTRUÇÃO SQL VÁLIDA
        */

        $resultado = mysqli_query($conexao, $sql);

        header('location: index.php');

        // echo '<pre>';
        // var_dump($resultado);
        // echo '</pre>';
        // exit;  

        break;

        case 'deletar':
            
            $categoriaId = $_POST["categoriaId"];
            $sql = "DELETE FROM tbl_categoria WHERE id = $categoriaId";
            $resultado = mysqli_query($conexao, $sql);

            header('location: index.php');

            break;

    
    default:
        # code...
        break;
}

?>