<?php

$smarty = new Modelo;
$smarty->assign('LOGO',Routes::Get_Image('programacao-logo.png'));
$smarty->display('home.html');

//fazer a página home jogar para a página de produtos
include_once Routes::get_controlador() .'/produtos.php';


?>