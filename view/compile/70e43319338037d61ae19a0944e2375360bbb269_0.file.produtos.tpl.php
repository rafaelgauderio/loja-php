<?php
/* Smarty version 3.1.45, created on 2022-05-29 03:06:48
  from 'C:\xampp\htdocs\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6292c728bbed85_08025358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e43319338037d61ae19a0944e2375360bbb269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos.tpl',
      1 => 1653786405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6292c728bbed85_08025358 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Conheça nossos produtos e serviços</h2>
 
 
  <section id="produtos" class="row">  
 
		<ul style="list-style: none" >		    
		    
		  
		        <div class="row" id="pularlinha">
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCT']->value, 'PRODUCT_ITEM');
$_smarty_tpl->tpl_vars['PRODUCT_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value) {
$_smarty_tpl->tpl_vars['PRODUCT_ITEM']->do_else = false;
?> 
		           
		        <li class="col-md-5">

		            <div class="thumbnail">

		                <a href="">

		                    <img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_img'];?>
" width="250" height="250" alt="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_nome'];?>
" > 

		                    <div class="caption">
		                        <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_nome'];?>
</h4>
                            <h5 class="text-center"><b>Descrição: </b> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_descri'];?>
</h5>                            
                            <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_destaque'];?>
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
    
    
  
    </section><?php }
}
