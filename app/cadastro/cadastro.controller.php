<?php
    require './cadastro.model.php';
    require './cadastro.service.php';
    require '../conexao.php';
    
    echo "teste";

    echo $_POST['nome'] .'</br>';
	echo $_POST['dataNasc'] .'</br>';
	echo $_POST['rg'] .'</br>';
	echo $_POST['cpf'].'</br>';
	echo $_POST['tel'].'</br>';
	echo $_POST['sexo'].'</br>';
	echo $_POST['confirmSenha'].'</br>';
    echo $_POST['senha'].'</br>';
    echo $_POST['confirmSenha'].'</br>';
?>