<?php
    if (isset($_POST['button'])) {
        $code = $_POST['code'];
        $password = $_POST['password'];

        if($code == ''){
            echo '<h2>Por favor digite seu codigo de acesso ou nº do cartão</h2>';
        }else if ($password == '') {
            echo '<h2>Digite sua senha</h2>';
        }else{
            $sql = ("Select * FROM login WHERE code = '$code' AND senha ='$password' ");//verifica na tabela se existe registro cadastrado
            
            $result=mysqli_query($conexao,$sql);
            if(mysqli_num_rows($result) > 0){ //verifica a quantidade de linha
                
                while($res_1 = mysqli_fetch_assoc($result)){
                    $status = $res_1['status'];
                    $code = $res_1['code'];
                    $senha = $res_1['senha'];
                    $nome = $res_1['nome'];
                    $painel = $res_1['painel'];

                    if($status == 'inativo'){
                        echo "Você está inativo, procure a coordenação";
                    }else {
                        
                        session_start();
                        $_SESSION['code'] = $code;
                        $_SESSION['nome'] = $nome;
                        $_SESSION['senha'] = $senha;
                        $_SESSION['painel'] = $painel;

                        if ($painel == 'admin') {
                            echo"<script languagem='javascript'> window.location='admin';</script>";
                        }else if ($painel == 'Aluno') {
                            echo"<script languagem='javascript'> window.location='aluno';</script>";
                        }else if ($painel == 'Professor') {
                            echo"<script languagem='javascript'> window.location='professor';</script>";
                        }else if ($painel == 'portaria') {
                            echo"<script languagem='javascript'> window.location='portaria';</script>";
                        }else if ($painel == 'tesouraria') {
                            echo"<script languagem='javascript'> window.location='tesouraria';</script>";
                        }
                    }
                }

            }else{
                echo "Usuário inválido";
            }
        
            
        }

    }



?>