<?php
/* Smarty version 3.1.45, created on 2022-06-02 20:10:22
  from 'C:\xampp\htdocs\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6298fd0ea7b7d5_91596632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e43319338037d61ae19a0944e2375360bbb269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos.tpl',
      1 => 1654088569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6298fd0ea7b7d5_91596632 (Smarty_Internal_Template $_smarty_tpl) {
?><hr>

<?php if (($_smarty_tpl->tpl_vars['PRODUCT_CONTAGEM']->value <= 0)) {?>
<h3 class="alert alert-warning">Não foram encontrados produtos com a especificação desejada.</h3>
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
    
    
  
    </section><?php }
}
