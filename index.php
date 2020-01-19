<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Escolar</title>
    
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

    <link rel="shortcut icon" href="img/ESCOLA.png" />

    <?php
    require "conexao.php"; 
    include "validacao.php"; 
   
    ?>
</head>
<body>

    <div id="logo">
        <img src="img/logo.png">
    </div>
    <div id="nome_sistema">
        <h1>SCHOOL NET</h1>
    </div>

    <div id="caixa_login">
 
        <form name ="form" method="post" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><h1>Nº Cartão ou Código de acesso:</h1></td>
                </tr>
                <tr>
                    <td><input type="text" name="code"/></td>
                </tr>
                <tr>
                    <td><h1>Senha:</h1></td>
                </tr>
                <tr>
                    <td><input type="password" name="password"/></td>
                </tr>
                <tr>
                    <td><input class="input" type="submit" name="button" value="Acessar"/></td>
                </tr>


            </table>
        </form>
    </div>
</body>
</html>