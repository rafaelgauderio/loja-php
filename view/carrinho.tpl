 <h2>Carrinho de Compras</h2>


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
        <tr>            
            <td colspan="6"><a href="{$PAGINA_PRODUTOS}" class="btn btn-success" title="">Continuar Comprando</a></td> 
        </tr>        
        <tr class="text-danger align=center bg-info">
            <td>Produto</td> 
            <td>Descrição</td>             
            <td>Quantidade</td>
            <td>Valor R$</td> 
            <td>SubTotal R$</td> 
            <td>Excluir Item</td>          
        </tr>    
        
       {foreach from=$PRODUTOS item=PRODUTOS_ITEM}
        
        <tr>
            
            <td> <img src="{$PRODUTOS_ITEM.prod_img}" widht="60" height="60" alt="{$PRODUTOS_ITEM.prod_nome}"> </td>
            <td>  {$PRODUTOS_ITEM.prod_nome} </td>
            <td><button class="btn btn-info btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
            {$PRODUTOS_ITEM.prod_quanti}<button class="btn btn-info btn-sm"> <i class="glyphicon glyphicon-plus"></i> </button></td>
            <td>  {$PRODUTOS_ITEM.prod_preco} </td>           
            <td>  {$PRODUTOS_ITEM.prod_subTotal} </td>
            <td> 
                <form name="carrinho_deletar" method="post" action="{$PAGINA_ALTERAR_CARRINHO}">
                  
                    <input type="hidden" name="prod_id" value="{$PRODUTOS_ITEM.prod_id}">    
                    <input type="hidden" name="action" value="deletar">    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i> </button>
                 </form>
            </td>  
        </tr>        
       {/foreach}        
    </table>  
    </center>            
</section>           
        <section class="row" id="total">                      
            <div class="col-md-4 text-right">           
            </div>            
            <div class="col-md-4 text-right text-danger bg-info">
            <h4>
               Total do Pedido: R$ {$TOTALCARRINHO}
            </h4>
            </div>            
            
            <div class="col-md-4">
                <form name="limpar" method="post" action="{$PAGINA_ALTERAR_CARRINHO}">
                    <input type="hidden" name="action" value="limpar">
                    <input type="hidden" name="prod_id" value="1">                    
                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-remove-circle"></i> Limpar Carrinho</button>
                    <br>
                </form>
                    <form name="finalizar_pedido" method="post" action="{$PAGINA_CONFERIR_PEDIDO}">
                     <button class="btn btn-success btn-block" type="submit">  <i class="glyphicon glyphicon-thumbs-up"></i> Ir para página de checkout</button>
                 </form>
            </div>         

        </section>
                    <br>  
          
       </form>
       </div>            
  </section>
       <br>
       <br> 