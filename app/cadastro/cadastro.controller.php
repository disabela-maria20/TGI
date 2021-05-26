<?php
    require './cadastro.model.php';
    require './cadastro.service.php';
    require '../conexao.php';

    $cadastro = new Cadastro_Cliente();
    $cadastro->__set('nome', $_POST['nome']);
    $cadastro->__set('dataNasc', $_POST['dataNasc']);
    $cadastro->__set('rg', $_POST['rg']);
    $cadastro->__set('cpf', $_POST['cpf']);
    $cadastro->__set('tel', $_POST['tel']);
    $cadastro->__set('sexo', $_POST['sexo']);
    $cadastro->__set('email', $_POST['email']);
    $cadastro->__set('senha', $_POST['senha']);
    $cadastro->__set('confirmSenha', $_POST['confirmSenha']);
    
    $conexao = new Conexao;

    $cadastroService = new Cadastro_Service($conexao, $cadastro);
    $cadastroService->Cadastrar_Usuario();

?>