<?php

if(isset($_POST['prod_id'])==false || ($_POST['prod_id']<=0)) {
    echo '<h3 class="alert alert-danger"> Erro ao tentar ao tentar capturar id do produto.</h3>'; 
    Routes::redirecionarPagina(0.5,Routes::pag_Carrinho());
    exit;
}

$id = (int)$_POST['prod_id'];
//sanitizando a variavel;
//$id = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
$carrinho = new Carrinho();
try {
    $carrinho->AdicionarAoCarrinho($id);
} catch (Exception $erro) {
    echo '<h3 class="alert alert-danger"> Erro ao tentar adicionar o produto ao carrinho.</h3>'; 
}

//redirecionando para página de carrinho após a mensagem
Routes::redirecionarPagina(1.5,Routes::pag_Carrinho());


?>