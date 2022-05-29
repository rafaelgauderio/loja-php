<h2>Conheça nossos produtos e serviços</h2>
 
 
  <section id="produtos" class="row">  
 
		<ul style="list-style: none" >		    
		    
		  
		        <div class="row" id="pularlinha">
		        {foreach from=$PRODUCT item=PRODUCT_ITEM} 
		           
		        <li class="col-md-5">

		            <div class="thumbnail">

		                <a href="">

		                    <img src="{$PRODUCT_ITEM.prod_img}" width="250" height="250" alt="{$PRODUCT_ITEM.prod_nome}" > 

		                    <div class="caption">
		                        <h4 class="text-center"> {$PRODUCT_ITEM.prod_nome}</h4>
                            <h5 class="text-center"><b>Descrição: </b> {$PRODUCT_ITEM.prod_descri}</h5>                            
                            <h4 class="text-center"> {$PRODUCT_ITEM.prod_destaque}</h4>
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