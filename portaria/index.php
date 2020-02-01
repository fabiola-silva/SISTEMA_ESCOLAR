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
               <img src="../img/sair.png" id="img_exit" />
            </div>  

            <div id="logo">
                <img src="../img/logo.png" />
            </div>  

            <div id="campo_busca">

                <form name="" method="post" action="" enctype="multpart/form-data">
                    <input type="text" id="btn_cpf" name="CPF" value="" /> 
                    <input class="input" type="submit" name="send" id="btn_enviar" value="Enviar"/>
                </form> <br> 
            </div>  
               

            <div id="campo_aluno">
                <h3>Aluno: <br>
                    <strong>RG:</strong>  <br>
                    <strong>Nº de matriculas:</strong> &emsp; &emsp; &emsp;
                </h3>
                    <a href="index.php">
                        <img id="lixeira" src="../img/lixeira.png" title="Cancelar"/>
                    </a>
                    <input type="hidden" name="code" value="" />
            </div>


            

            
        
        </div>



    </body>
</html>