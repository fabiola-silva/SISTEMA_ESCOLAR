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
                    $code = $res_1['code'];
                    $nome = $res_1['nome'];
                    $painel = $res_1['painel'];

                    if($status == 'Inativo'){
                        echo "Você está inativo, procure a coordenação";
                    }
                }

            }else{
                echo "Usuário inválido";
            }
        
            
        }

    }



?>