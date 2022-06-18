<?php
/* Smarty version 3.1.45, created on 2022-06-19 00:17:09
  from 'C:\xampp\htdocs\loja\view\logar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62ae4ee58b0155_20498552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e567fbb8adc9ed1f54f13559db88d1aa78070622' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\logar.html',
      1 => 1655590627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ae4ee58b0155_20498552 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="alert alert-info text-center">Faça Login ou Cadastre-se</h4>

<text><?php echo $_smarty_tpl->tpl_vars['USUARIO']->value;?>
</text>

<section class="row">
    <form name="login_do_cliente" method="post" action="" >    
        <div class="col-md-3 text-center">        
        </div>
        <div class="col-md-6">     
            <div class="form-group"> 
                <label></i> Email: </label>
                <input type="email"  class="form-control " name="campo_email" value="" placeholder="Informe seu email" required autocomplete="off">        
            </div>
            <div class="form-group"> 
                 <label> Senha: </label>
                 <input type="password"  class="form-control " name="campo_senha" value="" placeholder="Informe" required>        
            </div>
            <div class="form-group">                
                <button class="btn btn-success btn-block btn-lg"> Logar </button>
                <a href="" class="btn btn-warning btn-block btn-lg"> Primeiro Acesso? Cadastrar</a>                           
                <a href="" class="btn btn-danger btn-block btn-lg"> Esqueci minha Senha</a>
            </div>               
        <div class="col-md-3 text-center"> 
        </div>    
    </form>
</section>



<?php }
}
