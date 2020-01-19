<?php
    if (isset($_POST['button'])) {
        $code = $_POST['code'];
        $password = $_POST['password'];

        if($code == ''){
            echo '<h2>Por favor digite seu codigo de acesso</h2>';
        }else if ($password == '') {
            echo '<h2>Digite sua senha</h2>';
        }

    }



?>