<?php
/* Smarty version 3.1.45, created on 2022-08-03 01:15:07
  from 'C:\xampp\htdocs\site\view\contato.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e9affba64227_70839748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78e6c76d6bd46b625c0dfd7cc8c9fe8c21473db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\contato.html',
      1 => 1659482105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e9affba64227_70839748 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">

    <form class="form-horizontal" id="formulario" onsubmit="return enviado()" action="email">
      <fieldset>

        <legend>Formulário de contato</legend>

        <div class="formulario-contato">
          <label class="col-md-5 control-label" for="inputnome">Nome</label>
          <div class="col-md-7">
            <input id="inputnome" name="inputnome" placeholder="Nome Completo (opcional)" maxlength="40"
              class="form-control input-md" type="text" />
          </div>
        </div>
        <div class="formulario-contato">
          <label class="col-md-5 control-label" for="inputtelefone">Telefone</label>
          <div class="col-md-7">
            <input id="inputtelefone" name="inputtelefone" placeholder="Telefone (opcional)" maxlength="15"
              class="form-control input-md" type="cel" />
          </div>
        </div>
        <div class="formulario-contato">
          <label class="col-md-5 control-label" for="inputemail">Email</label>
          <div class="col-md-7">
            <input id="inputemail" name="inputemail" placeholder="Email (obrigatório)" maxlength="40"
              class="form-control input-md" required="required" type="email" />
          </div>
        </div>
        <div class="formulario-contato">
          <label class="col-md-5 control-label" for="inputarea">Mensagem</label>
          <div class="col-md-7">
            <textarea class="form-control" id="inputarea" rows="8" name="inputarea"
              placeholder="Informe aqui sua dúvida, crítica ou sugestão que entratemos em contato. (obrigatório)"
              maxlength="40" required="required"></textarea>
          </div>
        </div>
        <div class="formulario-contato">
          <label class="col-md-5 control-label" for="receberpromo">Deseja receber promoções e novidades por email e/ou
            sms?</label>
          <div class="col-md-3">
            <input id="inputpromo" name="inputpromo" type="checkbox" value="sim" class="form-control input-sm" checked />
          </div>
        </div>
        <div class="formulario-contato">
          <label class="col-md-4 control-label" for="botaoenviar"></label>
          <div class="col-md-6">
            <button id="botaoenviar" name="botaoenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
      </fieldset>
    </form>

  </div>
</div><?php }
}
