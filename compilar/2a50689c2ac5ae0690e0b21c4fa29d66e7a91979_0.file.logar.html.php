<?php
/* Smarty version 3.1.45, created on 2022-08-03 00:58:31
  from 'C:\xampp\htdocs\site\view\logar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e9ac17e9d980_24346355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a50689c2ac5ae0690e0b21c4fa29d66e7a91979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\logar.html',
      1 => 1659480519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e9ac17e9d980_24346355 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ISLOGADO']->value == false) {?>
<h4 class="alert alert-info text-center">Faça Login ou Cadastre-se</h4>
<section class="row">
    <form name="login_do_cliente" method="post" action="" >    
        <div class="col-md-3 text-center">        
        </div>
        <div class="col-md-6">     
            <div class="form-group"> 
                <label></i> Email: </label>
                <input type="email"  class="form-control " name="campo_email" value="" placeholder="Informe seu email" required>        
            </div>
            <div class="form-group"> 
                 <label> Senha: </label>
                 <input type="password"  class="form-control " name="campo_senha" value="" placeholder="Informe sua senha" required>        
            </div>
            <div class="form-group">                
                <button class="btn btn-success btn-block btn-lg"> Logar </button>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAGINA_CADASTRO']->value;?>
" class="btn btn-warning btn-block btn-lg"> Primeiro Acesso? Cadastrar</a>                           
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAGINA_SENHA']->value;?>
" class="btn btn-danger btn-block btn-lg"> Esqueci minha Senha</a>
            </div>               
        <div class="col-md-3 text-center"> 
        </div>    
    </form>
</section>
<?php } else { ?> 
<text><?php echo $_smarty_tpl->tpl_vars['ISLOGADO']->value;?>
</text>
<section class="text-center">
<a href="<?php echo $_smarty_tpl->tpl_vars['DADOS_CLIENTE']->value;?>
" class="btn btn-success btn-lg">Meus Dados</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['TROCAR_SENHA']->value;?>
" class="btn btn-warning btn-lg">Alterar Senha</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['LOGOFF']->value;?>
" class="btn btn-danger btn-lg">Sair</a>
</section>
<?php }
}
}
