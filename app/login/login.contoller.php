<?php

    require './login.model.php';
    require './login.service.php';
    require '../conexao.php';

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
        $login = new Login();
        $login->__set('email', addslashes($_POST['email']));
        $login->__set('senha', addslashes($_POST['senha']));

        $conexao = new Conexao;

        $login_service = new login_Service($conexao, $login);

        if($login_service->Realizar_Login() == true){
            if(isset($_SESSION['usuario'])){
                header('Location: ../../src/index1.php');
            }else{
                header('Location: ../../src/login.php');
            }
        }else{
            header('Location: ../../src/login.php');
        }
    }
    else{
        header('Location: ../../src/login.php');
    }


?>