<?php
/* Smarty version 3.1.45, created on 2022-07-13 13:41:34
  from 'C:\xampp\htdocs\loja\view\pedido_finalizado.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62cef5bed38b59_86224632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '891916bf1682567ed79f80591598c2b7e0613f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\pedido_finalizado.html',
      1 => 1656434434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cef5bed38b59_86224632 (Smarty_Internal_Template $_smarty_tpl) {
?> <h4 class="alert alert-success">Pedido Realizado com Sucesso.</h4>
 <h5 class="alert alert-info">Escolha uma das formas de pagamento abaixo.<br> Assim que confirmado o pagamento entraremos em contato para realizarmos atendimento.<br></h5>
 <h5 class="alert alert-info">Os dados do pedido foram enviados para seu email.</h5>

<section class="row">    
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">         
    </div>    
</section>
    <section class="row ">   
   
    <table class="table table-bordered" style="width: 105%">
           
        <tr class="text-danger align=center bg-info">            
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
            
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_nome'];?>
 </td>            
            <td>  <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_quanti'];?>
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
               Total do Pedido: <b>R$ <?php echo $_smarty_tpl->tpl_vars['TOTALCARRINHO']->value;?>
</b>
            </h4>
            <h4>
                Frete Grátis: R$ 0,00
             </h4>
            </div>   
        </section>             
       </div>            
  </section>
       <br>
       


<?php }
}
