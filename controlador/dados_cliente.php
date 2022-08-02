<?php

$smarty = new Modelo();
$smarty->assign('LOGOFF', Routes::pag_logoff());

if (Logar::ClienteLogado() == false) {
    Logar::areaRestrita();
    Routes::redirecionarPagina(2.8, Routes::pag_logar());
    exit();
} else {
    //Logar::DadosCLiente();
    foreach ($_SESSION['CLIENTE']  as $field => $value) {
        $smarty->assign($field, $value);
    }
    //o campo email está já vem preenchido do banco
    //sanitizar as variaveis novamente, pois está permitindo o usuário alterar.
    if (isset($_POST['client_email'])) {
        $client_senha = filter_var($_POST['client_senha'],FILTER_SANITIZE_STRING);
        $client_email = filter_var($_POST['client_email'],FILTER_SANITIZE_STRING);
        $client_nome = filter_var($_POST['client_nome'],FILTER_SANITIZE_STRING);
        $client_endereco = filter_var($_POST['client_endereco'],FILTER_SANITIZE_STRING);
        $client_numero = filter_var($_POST['client_numero'],FILTER_SANITIZE_NUMBER_INT);
        $client_bairro = filter_var($_POST['client_bairro'],FILTER_SANITIZE_STRING);
        $client_cidade = filter_var($_POST['client_cidade'],FILTER_SANITIZE_STRING);
        $client_uf = filter_var($_POST['client_uf'],FILTER_SANITIZE_STRING);
        $client_cep = filter_var($_POST['client_cep'],FILTER_SANITIZE_STRING);
        $client_telefone = filter_var($_POST['client_telefone'],FILTER_SANITIZE_STRING);

        $cliente = new Clientes();

        //verificar se a senha informada é igual a senha do banco e dae 
        //atualizar dados
        $senha_do_cliente = $_SESSION['CLIENTE']['client_senha'];
        $senha_informada_post = $client_senha;        
        //if ($senha_do_cliente == $senha_informada_post)
        if (password_verify($senha_informada_post,$_SESSION['CLIENTE']['client_senha'])==true) {
            //setando os dados recebidos via post e depois inserindo na tabela cliente
            $cliente->SetarDadosValidados(
                $client_email,
                $client_senha,
                $client_nome,
                $client_endereco,
                $client_numero,
                $client_bairro,
                $client_cidade,
                $client_uf,
                $client_cep,
                $client_telefone
            );
            //atualizar dados com o id do cliente logado
            $client_id = $_SESSION['CLIENTE']['client_id'];
            $cliente->AtualizarDadosCliente($client_id);
           
            echo '<script>alert("Dados alterados com Sucesso")</script>';
            echo '<h3 class="alert alert-success text-center">Dados alterados com sucesso com Sucesso!</h3>';            
            //atualizando a tela com os novo dados do banco
            //fazer logon novamente para atualizar os dados na tela para o usuário
            $logar = new Logar();                        
            $logar->GetLogar($client_email, $client_senha);
        } else {
            echo '<h3 class="alert alert-danger text-center">A senha informada não está CORRETA. Dados não atualizados</h3>';
            Routes::redirecionarPagina(2.5, Routes::pag_dados_do_cliente());
            exit();

        }
    }
    $smarty->display('dados_do_cliente.html');
}
