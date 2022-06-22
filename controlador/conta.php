<?php
$smarty = new Template();
Logar::DadosCLiente();
$smarty->display('conta.html');
?>