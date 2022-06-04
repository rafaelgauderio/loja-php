<?php

$id = (int)$_POST['prod_id'];
//sanitizando a variavel;
$id = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
$carrinho = new Carrinho();
$carrinho->AdicionarAoCarrinho($id);

?>