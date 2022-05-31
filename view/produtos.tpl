<hr>

{if ($PRODUCT_CONTAGEM <=0)}
<h3 class="alert alert-warning">Não foram encontrados produtos com a especificação desejada.</h3>
{/if} 
 
  <section id="produtos" class="row">  
 
		<ul style="list-style: none" >		    
		    
		  
		        <div class="row" id="pularlinha">
		        {foreach from=$PRODUCT item=PRODUCT_ITEM} 
		           
		        <li class="col-md-4">

		            <div class="thumbnail">

		                <a href="{$PRODUCT_DESCRIPTION}/{$PRODUCT_ITEM.prod_id}">

		                    <img src="{$PRODUCT_ITEM.prod_img}" alt="" width="175" height="175"> 

		                    <div class="caption">
		                        <h4 class="text-center"> {$PRODUCT_ITEM.prod_nome}</h4>                                                        
                            <h4 class="text-center text-danger">R$ {$PRODUCT_ITEM.prod_preco}</h4>

		                    </div>

		                </a>

		            </div>


		        </li>

		        {/foreach}
		        
		         </div>		         
		    
		</ul>
    
    </section>
    
    
  
    </section>