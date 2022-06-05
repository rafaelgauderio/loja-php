 <h4 class="alert alert-success">Pedido Realizado com Sucesso.</h4>
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
        
       {foreach from=$PRODUTOS item=PRODUTOS_ITEM}
        
        <tr>           
            
            <td>  {$PRODUTOS_ITEM.prod_nome} </td>            
            <td>{$PRODUTOS_ITEM.prod_quanti}</td>
            <td>  {$PRODUTOS_ITEM.prod_preco} </td>           
            <td>  {$PRODUTOS_ITEM.prod_subTotal} </td>            
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
        </section>             
       </div>            
  </section>
       <br>
       


