
     {foreach from=$PRODUCT item=PRODUCT_ITEM}

      <h3 class="text-center">{$PRODUCT_ITEM.prod_nome}</h3>
<hr>

<div class="row">
   
    <div class="col-md-6" id="detalhes">

        <img class="thumbnail" src="{$PRODUCT_ITEM.prod_img}" widht="280" height="200" alt="" > 

    </div>  
        
        <div class="col-md-5">
           <h4 class="text-center preco"><b>Referência: </b> {$PRODUCT_ITEM.prod_id}</h4> 
           <h4 class="text-center preco"><b>Preço: </b>R$ {$PRODUCT_ITEM.prod_preco}</h4>
           <h4 class="text-center preco"><b>Produto em Destaque: </b> {$PRODUCT_ITEM.prod_destaque}</h4>  
           <h4 class="text-center preco"><b>Código da Categoria: </b> {$PRODUCT_ITEM.prod_categoria}</h4>               
        </div>   

        <div class="col-md-4" >
            <form name="carrinho" method="post" action="">
                <input type="hidden" name="prod_id" value="{$PRODUCT_ITEM.prod_id}">
                <input type="hidden" name="acao" value="add">
            <div id=botoes_produto>   
            <button  class="btn btn-success">Adicionar ao Carrinho</button>
            <button  class="btn btn-info">Adicionar a lista de desejos</button>
             </form>
             </div>             
        </div> 
    

    </div>




      
        <div class="row" id="detalhes_produto">
            <hr>
            <h3 class="text-center">Descrição do produto</h3>

            <h4>{$PRODUCT_ITEM.prod_descri}</h4> 

        </div>  
        </div> 
            <br>
           


  {/foreach}
