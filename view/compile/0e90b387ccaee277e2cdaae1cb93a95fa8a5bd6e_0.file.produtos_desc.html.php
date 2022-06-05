<?php
/* Smarty version 3.1.45, created on 2022-06-05 22:16:25
  from 'C:\xampp\htdocs\loja\view\produtos_desc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_629d0f192a4739_01122428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e90b387ccaee277e2cdaae1cb93a95fa8a5bd6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos_desc.html',
      1 => 1654460173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629d0f192a4739_01122428 (Smarty_Internal_Template $_smarty_tpl) {
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
           <h4 class="text-left preco"><b>Referência: </b> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_id'];?>
</h4> 
           <h4 class="text-left preco"><b>Preço: </b>R$ <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_preco'];?>
</h4>
           <h4 class="text-left preco"><b>Produto em Destaque: </b> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_destaque'];?>
</h4>  
           <h4 class="text-left preco"><b>Código da Categoria: </b> <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value['prod_categoria'];?>
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
