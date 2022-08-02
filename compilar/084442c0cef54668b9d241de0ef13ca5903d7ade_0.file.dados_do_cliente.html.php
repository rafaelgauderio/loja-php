<?php
/* Smarty version 3.1.45, created on 2022-08-03 01:09:58
  from 'C:\xampp\htdocs\site\view\dados_do_cliente.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e9aec6dee317_47620887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084442c0cef54668b9d241de0ef13ca5903d7ade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\dados_do_cliente.html',
      1 => 1659480519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e9aec6dee317_47620887 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="alert alert-info text-center">Dados do cliente</h3>
<h4 class="alert alert-warning text-center">Tem que confirmar a senha atual para poder editar dados.
    <br>Não é possível editar o campo email.</h4>

<form name="dados_cliente" id="dados_cliente" method="post">
<section class="row" id="dados_cliente">
    <div class="col-md-12">
        <label><b>senha (Obrigatório): </b></label>
        <input type="password" name="client_senha" class="form-control" minlength="6" maxlenght="10">
    </div>
    <div class="col-md-6">
        <label>Email: </label>
        <input type="email" name="client_email" value="<?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
" class="form-control" placeholder="usuario@dominio.com" readonly required >
    </div>   
    <div class="col-md-6">
        <label>Nome: </label>
        <input type="text" name="client_nome" value ="<?php echo $_smarty_tpl->tpl_vars['client_nome']->value;?>
" class="form-control" maxlenght="50">
    </div>

    <div class="col-md-6">
        <label>Endereço: </label>
        <input type="text" name="client_endereco" value ="<?php echo $_smarty_tpl->tpl_vars['client_endereco']->value;?>
" class="form-control" maxlenght="80">
    </div>
    <div class="col-md-6">
        <label>Número: </label>
        <input type="number" name="client_numero" value ="<?php echo $_smarty_tpl->tpl_vars['client_numero']->value;?>
" class="form-control" maxlenght="10">
    </div>
    <div class="col-md-6">
        <label>Cep: </label>
        <input type="text" name="client_cep" value ="<?php echo $_smarty_tpl->tpl_vars['client_cep']->value;?>
" id="client_cep" class="form-control cep-mask" minlength="8" maxlength="8"  placeholder="00000000"/>
    </div>

    <div class="col-md-6">
        <label>Bairro: </label>
        <input type="text" name="client_bairro" value ="<?php echo $_smarty_tpl->tpl_vars['client_bairro']->value;?>
" class="form-control" maxlenght="20">
    </div>

    <div class="col-md-6">
        <label>Cidade: </label>
        <input type="text" name="client_cidade" value ="<?php echo $_smarty_tpl->tpl_vars['client_cidade']->value;?>
" class="form-control" maxlenght="30">
    </div>
    <div class="col-md-6">
        <label>uf: </label>
        <input type="text" name="client_uf" value ="<?php echo $_smarty_tpl->tpl_vars['client_uf']->value;?>
" class="form-control" minlength="2" maxlength="2" placeholder="Estado. Exemplo: RS" >
    </div>
    
    <div class="col-md-6">
        <label>Telefone: </label>
        <input type="text" name="client_telefone" value ="<?php echo $_smarty_tpl->tpl_vars['client_telefone']->value;?>
" class="form-control" maxlenght="15">
    </div>
</section>
<hr>
<section class="row" id="salvar_dados_cliente">
    <div class="col-md-6">
        <button type="submit" class="btn btn-warning btn-lg btn-block"> Salvar dados Alterados </button>
        
        <br>
    </div>
    <br>
    <br>
      
</section>
</form><?php }
}
