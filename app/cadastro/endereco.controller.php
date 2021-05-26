<?php
    require './endereco.model.php';
    require './endereco.service.php';
    require '../conexao.php';
   
    $endereco = new Endereco_Cliente();
    $endereco->__set('cep', $_POST['cep']);
    $endereco->__set('endereco', $_POST['endereco']);
    $endereco->__set('numero', $_POST['numero']);
    $endereco->__set('bairro', $_POST['bairro']);
    $endereco->__set('uf', $_POST['uf']);
    $endereco->__set('cidade', $_POST['cidade']);
    $endereco->__set('complemento', $_POST['complemento']);
    
    $conexao = new Conexao;

    $enderecoService = new Endereco_Service($conexao, $endereco);
    $enderecoService->Cadastrar_Endereco();

    header('Location: page-home.php');
?>