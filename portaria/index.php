<?php $painel_atual = "Portaria"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Portaria</title>
        <link rel="stylesheet" type="text/css" href="estilo_port.css" /> 
    </head>
    <body >
            <?php

                require "../config.php";
     
            ?>


        <div id="box">
            <div id="porteiro">
               Seu código é:  &emsp; &emsp; &emsp; &emsp;
               <a href="../config.php?acao=quebra"> Sair </a> 
            </div>  

            <div id="logo">
                <img src="../img/logo.png" />
            </div>  

            <div id="campo_busca">
                <form name="" method="post" action="" enctype="multpart/form-data">
                    <input type="text" name="CPF" value="" /> 
                    <input class="input" type="submit" name="send" value="Enviar"/>
                </form>

                <br><br><br><br><h3>Aluno:</h3> <strong>Nº de matriculas:</strong> <strong>RG:</strong> 
                    <a href="index.php?pg=confirma&code_a =" > 
                        <img src="../img/correto.jpg" title="Confirmar"/>
                    </a>
                    <a href="index.php">
                        <img id="lixeira" src="../img/lixeira.png" title="Cancelar"/>
                    </a>
                    <input type="hidden" name="code" value="" />



            </div>   

            
        
        </div>



    </body>
</html>