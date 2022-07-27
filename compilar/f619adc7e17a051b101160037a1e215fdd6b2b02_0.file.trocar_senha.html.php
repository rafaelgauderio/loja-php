<?php
/* Smarty version 3.1.45, created on 2022-07-26 21:59:39
  from 'C:\xampp\htdocs\site\view\trocar_senha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e047ab92d754_45850114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f619adc7e17a051b101160037a1e215fdd6b2b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\trocar_senha.html',
      1 => 1658840161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e047ab92d754_45850114 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="alert alert-info text-center">Informe a senha anterior e a nova senha. Mínimo de 6 caracteres, máximo de 10 caracteres.<br>
Se esqueceu a senha anterior, clique em <b>Sair</b> depois e vá na opção <b>Esqueci minha senha</b>
em Login.</h4>

<form name="trocar_senha" method="post" action="">
<section>
    <div class="col-md-3"></div>
    <div id="alterar-senha" class="col-md-6">
        <label>Digite a senha atual</label>
        <input type="text" class=form-control name="senha_atual" id="senha_atual" placeholder="senha anterior" minlength="6" maxlength="10" required>
        <label>Digite digite a nova senha</label>
        <input type="text" class=form-control name="nova_senha" id="nova_senha" placeholder="nova senha" minlength="6" maxlength="10" required>
        <label>Confirme a nova senha</label>
        <input type="text" class=form-control name="confirma_nova_senha" id="confirma_nova_senha" placeholder="nova senha" minlength="6" maxlength="10" required>
        <br>        
        <button type="submit" class="btn btn-danger btn-block btn-lg">Confirma Alterar senha</button>
        <br>
    </div>
    <br>
    <br>
</section>
</form>
<?php }
}
