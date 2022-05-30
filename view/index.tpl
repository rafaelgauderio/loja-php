<!DOCTYPE html>

<html>
    <head>
        <title>{$TITULO_SITE}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/contato.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/personalizado.css" rel="stylesheet" type="text/css"/>

      <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
      <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>  
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    
    </head>
    <body>
        
        
        <div class="container-fluid">
            
            <div class="row" id="topo-superior">
                        <div class="container">
                        
                    <h4>Soluções em desenvolvimento web</h4>
                </div>
                </div>
                
             </div>
            
            <div class="row" id="topo">
                 
                
                <div class="container">
                <img src="{$GET_TEMA}/imagens/logo.jpg" alt="" align="left" height="120">
                
                <img src="{$GET_TEMA}/imagens/logo2.jpg" alt="" align="right" height="120">
                                    
                </div>    
            
            </div>
            
            
            <div class="row" id="barra-menu">
                
                
                <nav class="navbar navbar-inverse">
                    
                    
                    <div class="container">
                        
                        <div class="navbar-header">
                           
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                        
                        </div>
                        
                        <div class="collapse navbar-collapse" id="navbar">
                          
                                                    

                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar Produtos e Serviços..." required>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                            </form>

                              <ul class="nav navbar-nav">
                                <li><a href="{$GET_HOME}"> Home </a> </li>
                               
                                <li><a href="{$PAG_CONTA}"> Login </a> </li>
                                 <li><a href="{$PAG_EMPRESA}"> Empresa</a> </li>
                                <li><a href="{$PAG_CARRINHO}"> Carrinho </a> </li>                                
                                <li><a href="{$PAG_CONTATO}" > Contato </a> </li>                                                    
                                
                            </ul>
                       
                         </div>


                    </div> 
                    
                </nav>
                
                
                
                
                
            </div> 
           
            <div class="row" id="conteudo">
            
            <div class="container"> 
              
               
                <div class="col-md-2" id="lateral">
                    
                <div class="list-group">
                    <span class="list-group-item active"> Produtos</span>                    
                    <a href="#" class="list-group-item"> Dev</a> 
                    <a href="#" class="list-group-item"> Database</a> 
                    <a href="#" class="list-group-item"> Infraestrutura</a> 
                    
                    
                    
                </div>            
                              
                </div>  
                
               
                <div class="col-md-9">
                    
                    
                    <ul class="breadcrumb">
                        <li><a href="#"> Home </a></li>
                        <li><a href="#"> Produtos </a></li>
                        <li><a href="#"> Descrição </a></li>
                    </ul>   
                           
                
                {php}
                    Routes::get_pagina();
                {/php}
                  
                    
                </div>  
            
            </div>   
                
                
            
                
                
                
            </div>
            
          
            <div class="row" id="rodape">
            <h4>Desenvolvido por Rafael de Luca</h4>
            
            
            </div>
            
            
           </div> 
        
        
        
        
    </body>
</html>
