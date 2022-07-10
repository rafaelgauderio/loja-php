<?php
/* Smarty version 3.1.45, created on 2022-07-10 19:54:26
  from 'C:\xampp\htdocs\loja\view\trocar_senha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62cb1252169cd8_27068782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79229deb27601d3869dd3693de3b95f39c3ab896' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\trocar_senha.html',
      1 => 1657475664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cb1252169cd8_27068782 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Deluca Tecnologia</title>       
    </head>
<body>
<h4 class="alert alert-info text-center">Informe a senha anterior e a nova senha.<br>
Se esqueceu a senha anterior, faça LOGOFF e vá na opção <b>Esqueci minha senha</b>
em Login.</h4>

<section>
    <div class="col-md-3"></div>
    <div id="alterar-senha" class="col-md-6">
        <label>Digite a senha atual</label>
        <input type="text" class=form-control name="senha_atual" id="senha_atual" placeholder="senha anterior" required>
        <label>Digite digite a nova senha</label>
        <input type="text" class=form-control name="nova_senha" id="nova_senha" placeholder="nova senha" required>
        <label>Confirme a nova senha</label>
        <input type="text" class=form-control name="confirma_nova_senha" id="confirma_nova_senha" placeholder="nova senha" required>
    </div>
    <div class="col-md-3"></div>
    <hr>
</section>
</body>
</html><?php }
}
