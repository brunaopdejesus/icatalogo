<?php

    require('../../database/conexao.php');

    function realizarLogin($usuario, $senha, $conexao) {

        $sql = "SELECT * FROM tbl_administrador 
                WHERE usuario = '$usuario' AND senha = '$senha'";

        $resultado = mysqli_query($conexao, $sql);
        $dadosUsuario = mysqli_fetch_array($resultado);

        if (isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"])) {
            
            echo 'Login executado com sucesso!';

        } else {

            echo 'Algo deu errado...';
        
        }

    }

    realizarLogin('bruna', '1234', $conexao);

?>