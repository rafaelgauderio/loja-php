<?php
/* Smarty version 3.1.45, created on 2022-08-03 01:04:43
  from 'C:\xampp\htdocs\site\view\finalizar_pedido.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62e9ad8b950614_17722324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12f2a234d91a86d8b3c4139a030d429ea9f07ada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\finalizar_pedido.html',
      1 => 1659480519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e9ad8b950614_17722324 (Smarty_Internal_Template $_smarty_tpl) {
?> <h2>Checkout do Pedido</h2>
 <h4>Confira os dados do pedido abaixo</h4>


<section class="row">    
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">         
    </div>
    
</section>
    <br>
<section class="row ">   
     <table class="table table-bordered" style="width: 105%">
        <tr>            
            <td colspan="6"><a href="<?php echo $_smarty_tpl->tpl_vars['PAGINA_CARRINHO']->value;?>
" class="btn btn-danger" title="">Voltar ao Carrinho de Compras</a></td> 
        </tr>        
        <tr class="text-danger align=center bg-info">
            <td>Produto</td> 
            <td>Descrição</td>             
            <td>Quantidade</td>
            <td>Valor R$</td> 
            <td>SubTotal R$</td>                     
        </tr>    
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'PRODUTOS_ITEM');
$_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value) {
$_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->do_else = false;
?>
        
        <tr>
            
            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_img'];?>
" widht="60" height="60" alt="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_nome'];?>
"> </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_nome'];?>
 </td>            
            <td><?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_quanti'];?>
</td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_preco'];?>
 </td>           
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_subTotal'];?>
 </td>            
        </tr>        
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
    </table>               
</section>           
        <section class="row" id="total">                      
            <div class="col-md-4 text-right">           
            </div>            
            <div class="col-md-4 text-right text-danger bg-info">
            <h4>
               Total do Pedido: R$ <?php echo $_smarty_tpl->tpl_vars['TOTALCARRINHO']->value;?>

            </h4>
            <h4>
                Frete Grátis: R$ 0.00
             </h4>
            </div>            
            
            <div class="col-md-4">              
                    <form name="finalizar_pedido" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGINA_PEDIDO_FINALIZADO']->value;?>
">
                     <button class="btn btn-success btn-block" type="submit">Finalizar Pedido </button>
                 </form>
            </div>         

        </section>
                    <br>  
          
       </form>
       </div>            
  </section>
       <br>
       <br> 


<?php }
}
