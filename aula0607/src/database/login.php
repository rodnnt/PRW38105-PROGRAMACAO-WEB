<?php
    function validarLoginBD($conexao, $email,  $senha){
        $buscar_login = "select senha from usuario where email = '$email'";
        $query_login = mysqli_query($conexao, $buscar_login);

        $usuario = mysqli_fetch_array($query_login);
        $hash_senha_armazenada = $usuario['senha'];

        if(password_verify($senha, $hash_senha_armazenada)){       
            mysqli_close($conexao);
            return true;
        }else{
            mysqli_close($conexao);
            return false;
        }


    }
?>