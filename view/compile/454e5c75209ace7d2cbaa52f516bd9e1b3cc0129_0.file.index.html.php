<?php
/* Smarty version 3.1.45, created on 2022-06-22 15:49:35
  from 'C:\xampp\htdocs\loja\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62b31def180100_88753325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '454e5c75209ace7d2cbaa52f516bd9e1b3cc0129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\index.html',
      1 => 1655905773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b31def180100_88753325 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/contato.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/personalizado.css" rel="stylesheet" type="text/css"/>

      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>  
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    
    
    </head>
    <body>
        
        
        <div class="container-fluid">
            
            <div class="row" id="topo-superior">
                        <div class="container">
                        
                    <h4>Soluções em desenvolvimento web</h4>
                </div>
                </div>
                
             </div>
            
            <div class="row" id="topo">
                 
                
                <div class="container">
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imagens/logo.jpg" alt="" align="left" height="120">
                
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imagens/logo2.jpg" alt="" align="right" height="120">
                                    
                </div>    
            
            </div>
            
            
            <div class="row" id="barra-menu">
                
                
                <nav class="navbar navbar-inverse">
                    
                    
                    <div class="container">
                        
                        <div class="navbar-header">
                           
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                        
                        </div>
                        
                        <div class="collapse navbar-collapse" id="navbar">
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar Produtos e Serviços..." required>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                            </form>

                              <ul class="nav navbar-nav">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGINA_INICIAL']->value;?>
"> Home </a> </li>                               
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGAR']->value;?>
">Login</a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EMPRESA']->value;?>
">Quem Somos</a> </li>
                                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Carrinho</a> </li>                                
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
" >Fale Conosco</a> </li>                                                    
                                
                            </ul>
                       
                         </div>


                    </div> 
                    
                </nav>
                
                
                
                
                
            </div> 
           
            <div class="row" id="conteudo">
            
            <div class="container"> 
              
               
                <div class="col-md-2" id="lateral">
                    
                <div class="list-group">
                    <span class="list-group-item active"> Produtos</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="list-group-item"> Todos</a>                      
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'CATEGORIA_ITEM');
$_smarty_tpl->tpl_vars['CATEGORIA_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CATEGORIA_ITEM']->value) {
$_smarty_tpl->tpl_vars['CATEGORIA_ITEM']->do_else = false;
?>
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['CATEGORIA_ITEM']->value['categ_href'];?>
" class="list-group-item"> <?php echo $_smarty_tpl->tpl_vars['CATEGORIA_ITEM']->value['categ_nome'];?>
</a> 
                 
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                </div>            
                              
                </div>  
                
               
                <div class="col-md-9">
                    
                    
                    <ul class="breadcrumb"  >
                        <h4 id="contratar">Contrate serviços de programação online!</h4>
                    </ul>   
                           
                
                <?php 
                    Routes::get_pagina();
                ?>
                  
                    
                </div>  
            
            </div>   
                
                
            
                
                
                
            </div>
            
          
            <div class="row" id="rodape">
            <h4>Desenvolvido por Rafael de Luca</h4>
            <h5>Política de privacidade</br>Todos os direitos reservados.</h5>
                      
            
            </div>
            
            
           </div> 
        
        
        
        
    </body>
</html>
<?php }
}
