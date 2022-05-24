<?php
    require './lib/autoload.php';

    $email = new PHPMailer();

    $smarty = new Template();
    Routes::get_pagina();  

    $smarty->assign('Nome','Rafael de Luca');

    echo Routes::get_SiteHOME() . '<br>';
    $smarty->display('index.tpl');


?>