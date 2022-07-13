<?php

$smarty = new Template();
$smarty->assign('LOGOFF',Routes::pag_logoff());

if(Logar::ClienteLogado()==false) {
    Logar::areaRestrita();
    Routes::redirecionarPagina(2.8,Routes::pag_logar());
    exit();
} else {
    Logar::DadosCLiente();
    foreach($_SESSION['CLIENTE']  as $field => $value) {
        $smarty->assign($field,$value);
    }  
        //o campo email está já bem preenchido do banco
        if(isset($_POST['client_email'])) {
            
            $client_email = $_POST['client_email'];            
            $client_nome = $_POST['client_nome'];
            $client_endereco = $_POST['client_endereco'];
            $client_numero = $_POST['client_numero'];
            $client_bairro = $_POST['client_bairro'];
            $client_cidade = $_POST['client_cidade'];
            $client_uf = $_POST['client_uf'];
            $client_cep = $_POST['client_cep'];
            $client_telefone = $_POST['client_telefone'];

            $cliente = new Clientes();
            //setando os dados recebidos via post e depois inserindo na tabela cliente
            $cliente->SetarDadosValidados($client_email,$_SESSION['CLIENTE']['client_senha'],$client_nome,$client_endereco,
                    $client_numero,$client_bairro,$client_cidade,$client_uf,$client_cep,$client_telefone);  
            //atualizar dados com o id do cliente logado
            $client_id = $_SESSION['CLIENTE']['client_id'];        
            $cliente->AtualizarDadosCliente($client_id);        
        
            echo '<h3 class="alert alert-success">Dados alterados com sucesso com Sucesso!</h3>';
            echo '<script>alert("Dados alterados com Sucesso")</script>';
            //atualizando a tela com os novo dados do banco
           
            //fazer logon novamente para atualizar os dados na tela para o usuário
            $logar = new Logar();
            $client_senha = $_SESSION['CLIENTE']['client_senha'];
            echo $cliente->getClient_senha();
            $logar->GetLogar($client_email,$client_senha);                
            Routes::redirecionarPagina(15,Routes::pag_dados_do_cliente()); 
          
    }
    $smarty->display('dados_do_cliente.html');

}