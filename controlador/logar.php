<?php

$smarty = new Template();
$logar = new Logar();

if(isset($_POST['campo_email']) && isset($_POST['campo_senha'])) {
    
}
//teste
$logar->GetLogar('rafael@gmail.com','12345');
$smarty->display("logar.html");

?>