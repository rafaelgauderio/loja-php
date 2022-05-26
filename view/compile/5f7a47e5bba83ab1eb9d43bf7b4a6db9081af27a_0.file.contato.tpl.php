<?php
/* Smarty version 3.1.45, created on 2022-05-26 23:44:18
  from 'C:\xampp\htdocs\loja\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_628ff4b2a16004_22944202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7a47e5bba83ab1eb9d43bf7b4a6db9081af27a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\contato.tpl',
      1 => 1653601438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628ff4b2a16004_22944202 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="formulario" action="enviar">
        <fieldset>        
        
        <legend>Entre em contato</legend>        
        
        <div class="grupo">
          <label class="col-md-5 control-label" for="inputnome">Nome</label>  
          <div class="col-md-7">
          <input id="txtinputnome" name="inputnome" placeholder="Nome Completo (obrigatório)" class="form-control input-md" required="required" type="text" />
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
          <input id="inputemail" name="inputemail" placeholder="Email (obrigatarório)" class="form-control input-md" required="required" type="email" />
          
          </div>
        </div>         
        
      
        <div class="grupo">
          <label class="col-md-5 control-label" for="inputarea">Assunto</label>
          <div class="col-md-7">                     
            <textarea class="form-control" id="inputarea" rows="8" name="inputarea" placeholder="Informe aqui sua dúvida , crítica ou sugestão que entratemos em contato. (obrigatório)" required="required"></textarea>
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
