<?php
/* Smarty version 3.1.45, created on 2022-06-05 09:08:08
  from 'C:\xampp\htdocs\loja\view\pedido_finalizado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_629c5658ee32a9_86065608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9895ab39037c0e9ac2280d93ed726de6162eb12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\pedido_finalizado.tpl',
      1 => 1654412873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629c5658ee32a9_86065608 (Smarty_Internal_Template $_smarty_tpl) {
?> <h4 class="alert alert-success">Pedido Realizado com Sucesso.</h4>
 <h5 class="alert alert-info">Escolha uma das formas de pagamento abaixo.<br> Assim que confirmado o pagamento entraremos em contato para realizarmos atendimento.<br></h5>

<section class="row">    
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">         
    </div>    
</section>
    <br>
<section class="row ">   
    <center>
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
    </center>            
</section>           
        <section class="row" id="total">                      
            <div class="col-md-4 text-right">           
            </div>            
            <div class="col-md-4 text-right text-danger bg-info">
            <h4>
               Total do Pedido: R$ <?php echo $_smarty_tpl->tpl_vars['TOTALCARRINHO']->value;?>

            </h4>
            </div>   
        </section>             
       </div>            
  </section>
       <br>
       


<?php }
}
