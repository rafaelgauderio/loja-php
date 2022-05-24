<?php
    require './lib/autoload.php';

    $email = new PHPMailer();

    $smarty = new Template();   

    //valores de template assign(name,value)
    $smarty->assign('Nome','Rafael de Luca');

    $smarty->display('index.tpl');


?>