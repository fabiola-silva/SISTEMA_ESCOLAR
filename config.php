<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page Title</title>
    
    </head>
    <body>
    
        <?php

        require "conexao.php";
        @session_start();
        $code = $_SESSION['code'];
        $senha = $_SESSION['senha'];
        $nome = $_SESSION['nome'];
        $painel = $_SESSION['painel'];

        if($code == ''){
            echo"<script language ='javascript'>window.location='../index.php';</script>";

        }else if($nome == ''){
            echo"<script language ='javascript'>window.location='../index.php';</script>";

        }else if($senha == ''){
            echo"<script language ='javascript'>window.location='../index.php';</script>";

        }else{
            if($painel_atual != $painel){
                echo"<script language ='javascript'>window.location='../index.php'</script>";
            }
            
            
            
           
        }


        ?>

    </body>
</html>