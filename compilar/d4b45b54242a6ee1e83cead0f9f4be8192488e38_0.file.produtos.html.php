<?php
/* Smarty version 3.1.45, created on 2022-08-03 00:58:02
  from 'C:\xampp\htdocs\site\view\produtos.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e9abfa69d1e6_02714293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b45b54242a6ee1e83cead0f9f4be8192488e38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\produtos.html',
      1 => 1659480519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e9abfa69d1e6_02714293 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<h2 class="alert alert-info text-center">Conheça nossos produtos e serviços</h2>
 </div>
<?php if (($_smarty_tpl->tpl_vars['PRODUCT_CONTAGEM']->value <= 0)) {?>
<h4 class="alert alert-warning text-center">Não foram encontrados produtos com a especificação informada.</h4>
<?php }?> 
  <section id="produtos" class="row">  
		<ul style="list-style: none" >  
		        <div class="row" id="pularlinha">
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCT']->value, 'PRODUCT_ITEM');
$_smarty_tpl->tpl_vars['PRODUCT_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value) {
$_smarty_tpl->tpl_vars['PRODUCT_ITEM']->do_else = false;
?> 
		        <li class="col-md-4">
		            <div class="thumbnail">
		                <a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_DESCRIPTION']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_id'];?>
">
		                    <img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_img'];?>
" alt="" width="175" height="175"> 
		                    <div class="caption">
		                        <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_nome'];?>
</h4>                                                        
                            <h4 class="text-center text-danger">R$ <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_preco'];?>
</h4>
		                    </div>
		                </a>
		            </div>
		        </li>
		        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		        
		         </div>		
		</ul>    
    </section>
    <?php }
}
