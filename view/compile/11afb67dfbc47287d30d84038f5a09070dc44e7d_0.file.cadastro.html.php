<?php
/* Smarty version 3.1.45, created on 2022-07-01 21:23:07
  from 'C:\xampp\htdocs\loja\view\cadastro.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62bf499b36d841_07006581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11afb67dfbc47287d30d84038f5a09070dc44e7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cadastro.html',
      1 => 1656618455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bf499b36d841_07006581 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="alert alert-success">Favor preencher os campos abaixos.</h4>
<h4 class="alert alert-danger">Apenas email e senha são obrigatórios. Mínimo 6 dígitos na senha.</h4>

<br>
<form name="cadastrar_cliente" id="cadastrar_cliente" method="post">
<section class="row" id="cadastrar_cliente">
    <div class="col-md-6">
        <label>Email (obrigatório): </label>
        <input type="email" name="client_email" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label>senha (obrigatório): </label>
        <input type="text" name="client_senha" class="form-control" minlength="6" required>
    </div>
    <div class="col-md-6">
        <label>Nome: </label>
        <input type="text" name="client_nome" class="form-control">
    </div>

    <div class="col-md-5">
        <label>Endereço: </label>
        <input type="text" name="client_endereco" class="form-control">
    </div>
    <div class="col-md-1">
        <label>Número: </label>
        <input type="number" name="client_numero" class="form-control">
    </div>
    <div class="col-md-6">
        <label>Cep: </label>
        <input type="number" name="client_cep" class="form-control">
    </div>

    <div class="col-md-6">
        <label>Bairro: </label>
        <input type="text" name="client_bairro" class="form-control">
    </div>

    <div class="col-md-6">
        <label>Cidade: </label>
        <input type="text" name="client_cidade" class="form-control">
    </div>
    <div class="col-md-6">
        <label>uf: </label>
        <input type="text" name="client_uf" class="form-control">
    </div>
    
    <div class="col-md-6">
        <label>Telefone: </label>
        <input type="number" name="client_telefone" class="form-control">
    </div>
</section>

<br>

<section class="row" id="salvar_cliente">
    <div class="col-md-6">
        <button type="submit" class="btn btn-success btn-lg btn-block"> Salvar Cadastro </button>
    </div>
    <br>
    <br>
    <br>    
    
</section>

</form>



<?php }
}