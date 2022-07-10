<?php

$smarty = new Template();
Logar::dadosCliente();
$smarty->display('trocar_senha.html');
?>