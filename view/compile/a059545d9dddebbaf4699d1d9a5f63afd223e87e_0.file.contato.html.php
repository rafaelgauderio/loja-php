<?php
/* Smarty version 3.1.45, created on 2022-06-27 01:27:46
  from 'C:\xampp\htdocs\loja\view\contato.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62b8eb7276fee9_29705378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a059545d9dddebbaf4699d1d9a5f63afd223e87e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\contato.html',
      1 => 1656286062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b8eb7276fee9_29705378 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="formulario" action="email">
        <fieldset>        
        
        <legend>Formulário de contato</legend>        
        
        <div class="grupo">
          <label class="col-md-5 control-label" for="inputnome">Nome</label>  
          <div class="col-md-7">
          <input id="inputnome" name="inputnome" placeholder="Nome Completo (obrigatório)" class="form-control input-md" required="required" type="text" />
          </div>
        </div>
         <div class="grupo">
          <label class="col-md-5 control-label" for="inputtelefone">Telefone</label>  
          <div class="col-md-7">
          <input id="inputtelefone" name="inputelefone" placeholder="Telefone (opcional)" class="form-control input-md" type="cel"/>
          </div>
        </div>
        
        
        <div class="grupo">
          <label class="col-md-5 control-label" for="inputemail">Email</label>  
          <div class="col-md-7">
          <input id="inputemail" name="inputemail" placeholder="Email (obrigatório)" class="form-control input-md" required="required" type="email" />
          
          </div>
        </div>         
        
      
        <div class="grupo">
          <label class="col-md-5 control-label" for="inputarea">Mensagem</label>
          <div class="col-md-7">                     
            <textarea class="form-control" id="inputarea" rows="8" name="inputarea" placeholder="Informe aqui sua dúvida, crítica ou sugestão que entratemos em contato. (obrigatório)" required="required"></textarea>
          </div>
        </div>
        
       
        <div class="grupo">
          <label class="col-md-4 control-label" for="botaoenviar"></label>
          <div class="col-md-8">
            <button id="botaoenviar" name="botaoenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
	</div>
</div>
<?php }
}
