<?php
$smarty = new Template();

//verficiar se o campo email e senha foram preenchidos no formulário de cadastro

if(isset($_POST['client_email']) && isset($_POST['client_senha'])) {
    //pegar os valores preenchidos nos formulários e armazenar em variáveis
    $client_email = $_POST['client_email'];
    $client_senha = $_POST['client_senha'];
    $client_nome = $_POST['client_nome'];
    $client_endereco = $_POST['client_endereco'];
    $client_numero = $_POST['client_numero'];
    $client_bairro = $_POST['client_bairro'];
    $client_cidade = $_POST['client_cidade'];
    $client_uf = $_POST['client_uf'];
    $client_cep = $_POST['client_cep'];
    $client_telefone = $_POST['client_telefone'];
  }

$smarty->display('cadastro.html');
?>