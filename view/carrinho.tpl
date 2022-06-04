 <h2>Carrinho</h2>
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
    <table class="table table-bordered" style="width: 100%">
        <tr>            
            <td colspan="6" align="center"><a href="" class="btn btn-success" title="">Continuar Comprando</a></td> 
        </tr>        
        <tr class="text-danger bg-info">
            <td>Imagem</td> 
            <td>Produto</td>             
            <td>Quantidade</td>
            <td>Valor R$</td> 
            <td>SubTotal R$</td> 
            <td></td>          
        </tr>    
        
       {foreach from=$PRODUTOS item=PRODUTOS_ITEM}
        
        <tr>
            
            <td> <img src="{$PRODUTOS_ITEM.prod_img}" widht="60" height="60" alt="{$PRODUTOS_ITEM.prod_nome}"> </td>
            <td>  {$PRODUTOS_ITEM.prod_nome} </td>
            <td>{$PRODUTOS_ITEM.prod_quanti}</td>
            <td>  {$PRODUTOS_ITEM.prod_preco} </td>           
            <td>  {$PRODUTOS_ITEM.prod_subTotal} </td>
            <td> 
                <form name="carrinho_dell" method="post" action="">
                  
                    <input type="hidden" name="prod_id" value="{$PRODUTOS_ITEM.prod_id}">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                    <button class="btn btn-success btn-sm"> <i class="glyphicon glyphicon-plus"></i> </button>
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
            
            <div class="col-md-4 ">
                <form name="limpar" method="post" action="">
                    <input type="hidden" name="action" value="limpar">
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
       <br> 