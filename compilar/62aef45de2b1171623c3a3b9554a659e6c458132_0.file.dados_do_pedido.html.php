<?php
/* Smarty version 3.1.45, created on 2022-08-03 22:12:31
  from 'C:\xampp\htdocs\site\view\dados_do_pedido.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62eb1cff9fbc10_37757625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62aef45de2b1171623c3a3b9554a659e6c458132' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site\\view\\dados_do_pedido.html',
      1 => 1659575533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62eb1cff9fbc10_37757625 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
 <body>  
 <h3 class="alert alert-success">Confirmação de Pedido Loja deluca Tecnologia</h3>
 <h4 class="alert alert-success">Obrigado por comprar conosco <?php echo $_smarty_tpl->tpl_vars['EMAIL_CLIENTE']->value;?>
</h4>
 <h4 class="alert alert-info">Segue abaixo os dados do seu pedido.<br>
    Assim que confirmado o pagamento, entraremos em contato para realizar o atendimento.</h4>
 <hr>    
 <h4>Código do pedido: <?php echo $_smarty_tpl->tpl_vars['CODIGO_PEDIDO']->value;?>
</h5>   
<section class="row">    
    <div class="col-md-4">        
    </div>
    <div class="col-md-4 text-right">         
    </div>    
</section>
    <section class="row ">   
    <table id="tabela_pedido" style="width:80%; border:1px solid black;">
          
        <tr style="border:1px solid black; color:blue; text-align:center; ">            
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
        <tr style="text-align:center;">          
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
                Frete Grátis: R$ 0,00
            </h4>
            <h4>
               Total do Pedido: <b>R$ <?php echo $_smarty_tpl->tpl_vars['TOTALCARRINHO']->value;?>
</b>
            </h4>
            <hr>          
            </div>   
        </section>             
       </div>            
  </section>
       <br>
   <h4>Dúvidas. Acesse o site.</h4>    
   <a href="https://ifrs-canoas.delucahigiene.com.br">ifrs-canoas.delucahigiene.com.br</a>    
</body>
       
       


<?php }
}
