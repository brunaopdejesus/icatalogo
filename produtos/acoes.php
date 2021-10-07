<?php

    require("../database/conexao.php");

    switch ($_POST["acao"]) {
        case 'inserir':
            
            // TRATAMENTO DA IMAGEM PARA UPLOAD

            // RECUPERA O NOME DO ARQUIVO
            $nomeArquivo = $_FILES["foto"]["name"];
        
            // RECUPERA A EXTENSÃO DO ARQUIVO
            $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

            // DEFINE UM NOVO NOME PARA O ARQUIVO DE IMAGEM
            $novoNome = md5(microtime()) . "." . $extensao;

            // UPLOAD DO ARQUIVO
            move_uploaded_file($_FILES["foto"]["tmp_name"], "fotos/$novoNome");

            break;

        default:
            # code...
            break;
    }

?>