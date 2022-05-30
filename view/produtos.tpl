<h2>Conheça nossos produtos e serviços</h2>

<hr>
 
 
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