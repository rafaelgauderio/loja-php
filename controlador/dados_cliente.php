<?php

$smarty = new Template();

foreach($_SESSION['CLIENTE']  as $field => $value) {
    $smarty->assign($field,$value);
}
$smarty->display('dados_do_cliente.html');

?>