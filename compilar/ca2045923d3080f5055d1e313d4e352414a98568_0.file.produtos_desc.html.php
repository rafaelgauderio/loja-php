<?php
/* Smarty version 3.1.45, created on 2022-08-03 00:59:44
  from 'C:\xampp\htdocs\site\view\produtos_desc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e9ac6044d4f6_79570631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2045923d3080f5055d1e313d4e352414a98568' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\produtos_desc.html',
      1 => 1659480519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e9ac6044d4f6_79570631 (Smarty_Internal_Template $_smarty_tpl) {
?>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCT']->value, 'PRODUCT_ITEM');
$_smarty_tpl->tpl_vars['PRODUCT_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value) {
$_smarty_tpl->tpl_vars['PRODUCT_ITEM']->do_else = false;
?>

      <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_nome'];?>
</h3>
<hr>

<div class="row">
   
    <div class="col-md-6" id="detalhes">

        <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_img'];?>
" widht="280" height="200" alt="" > 

    </div>  
        
        <div class="col-md-5">
           <h4 class="text-left"><b>Código/Referência: </b> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_id'];?>
</h4> 
           <h4 class="text-left text-secondary"><b>Preço: </b>R$ <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_preco'];?>
</h4>
           <h4 class="text-left text-info"><b>Produto em Destaque: </b> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_destaque'];?>
</h4>  
           <h4 class="text-left"><b>Categoria: </b> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['categ_nome'];?>
</h4>               
        </div>   

        <div class="col-md-6" id="produtos_desc" >
            <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGINA_COMPRAR']->value;?>
">
                <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_id'];?>
">
                <input type="hidden" name="action" value="adicionar">
            <div id=botoes_produto>   
            <button  class="btn btn-success btn-block">Adicionar ao Carrinho</button>
             </form>
             </div>
                      
        </div> 
    

    </div>




      
        <div class="row" id="detalhes_produto">
            <hr>
            <h3 class="text-center">Descrição do produto</h3>

            <h4><?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_descri'];?>
</h4> 

        </div>  
        </div> 
            <br>
           


  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
