<?php
/* Smarty version 3.1.45, created on 2022-07-08 08:13:12
  from 'C:\xampp\htdocs\loja\view\esqueci_senha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62c7caf80abd77_88368712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b18ed56a6068b7c09ee831b28a55ce78202bf7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\esqueci_senha.html',
      1 => 1657260790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7caf80abd77_88368712 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="alert alert-success text-center">Informe seu email para receber sua senha </h3>
<form name="esqueci_minha_senha" method="post" action="">    
    <section>      
        <div class="col-md-12">         
            <input type="email" name="client_email" placeholder="usuario@dominio.com" id="client_email" class="form-control" required>
            <hr>
            <button type="submit" class="btn btn-info btn-lg"> Enviar Senha </button>
        </div>
<br>
<br>     
    </section>
</form><?php }
}
