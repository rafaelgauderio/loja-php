<?php
/* Smarty version 3.1.45, created on 2022-07-16 01:49:01
  from 'C:\xampp\htdocs\site\view\esqueci_senha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62d1fced6e6498_97664568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1622faf7320e707de2f8c8abfe834f289cae9c4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\esqueci_senha.html',
      1 => 1657928939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1fced6e6498_97664568 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="alert alert-success text-center">Informe seu email para receber sua uma nova senha </h3>
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
