<?php
/* Smarty version 3.1.45, created on 2022-06-03 21:47:24
  from 'C:\xampp\htdocs\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_629a654c655ba5_44544469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4aca169a1025971aeec1f166e642be7e628458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\carrinho.tpl',
      1 => 1654285641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629a654c655ba5_44544469 (Smarty_Internal_Template $_smarty_tpl) {
?> <h2>Carrinho</h2>
<hr>

<section class="row">    
    <div class="col-md-12 " align="right">
        <a href="" class="btn btn-info" title="">Comprar Mais</a>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">         
    </div>
    
</section>
    <br>

<section class="row ">   
    <center>
    <table class="table table-bordered" style="width: 95%">
        <tr>            
            <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Continuar Comprando</a></td> 
        </tr>        
        <tr class="text-danger bg-info">
            <td>Imagem</td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>Excluir</td> 
            <td>Sub Total R$</td> 
            <td></td>          
        </tr>    
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'PRODUTOS_ITEM');
$_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value) {
$_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->do_else = false;
?>
        
        <tr>
            
            <td> <img src="" alt="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_nome'];?>
"> </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_preco'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_quanti'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_subTotal'];?>
 </td>
            <td> 
                <form name="carrinho_dell" method="post" action="">
                  
                    <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_id'];?>
">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                    <button class="btn btn-success btn-sm"> <i class="glyphicon glyphicon-plus"></i> </button>
                </form>
            </td>
            
            
        </tr>
        
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>   
           
</section>    

       
        <section class="row" id="total">                      
            <div class="col-md-4 text-right">           
            </div>            
            <div class="col-md-4 text-right text-danger bg-info">
            <h4>
               Total : R$ 
            </h4>
            </div>
            
            
            <div class="col-md-4 ">
                <form name="limpar" method="post" action="">
                    <input type="hidden" name="acao" value="limpar">
                    <input type="hidden" name="prod_id" value="1">
                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Carrinho</button>
                    <br>

                </form>
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="">
                     <button class="btn btn-success btn-block" type="submit">  <i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>
                 </form>
            </div>         

        </section>
                    <br>   
           <hr>
       </form>
       </div>            
  </section>
       <br>
       <br> <?php }
}
