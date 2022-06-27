<?php
/* Smarty version 3.1.45, created on 2022-06-27 00:37:20
  from 'C:\xampp\htdocs\loja\view\carrinho.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_62b8dfa006e0c9_57792156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe11646ff7c76fee4a7581e950ae18da689c30b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\carrinho.html',
      1 => 1656283027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b8dfa006e0c9_57792156 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Carrinho de Compras</h2>


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
            <td colspan="6"><a href="<?php echo $_smarty_tpl->tpl_vars['PAGINA_PRODUTOS']->value;?>
" class="btn btn-success" title="">Continuar Comprando</a></td>
        </tr>
        <tr class="text-danger align=center bg-info">
            <td>Produto</td>
            <td>Descrição</td>
            <td>Quantidade</td>
            <td>Valor R$</td>
            <td>SubTotal R$</td>
            <td>Excluir Item</td>
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
            <td> <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_nome'];?>
 </td>
            <td><button class="btn btn-info btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                <text class="quantidade"><?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_quanti'];?>
 </text></text><button class="btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-plus"></i> </button>
            </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_preco'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_subTotal'];?>
 </td>
            <td>
                <form name="carrinho_deletar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGINA_ALTERAR_CARRINHO']->value;?>
">

                    <input type="hidden" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_ITEM']->value['prod_id'];?>
">
                    <input type="hidden" name="action" value="deletar">
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i> </button>
                </form>
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
        <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGINA_ALTERAR_CARRINHO']->value;?>
">
            <input type="hidden" name="action" value="limpar">
            <input type="hidden" name="prod_id" value="1">
            <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-remove-circle"></i> Limpar
                Carrinho</button>
            <br>
        </form>
        <form name="finalizar_pedido" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGINA_CONFERIR_PEDIDO']->value;?>
">
            <button class="btn btn-success btn-block" type="submit"> <i class="glyphicon glyphicon-thumbs-up"></i> Ir
                para página de checkout</button>
        </form>
    </div>
</section>


<br>
<br><?php }
}
