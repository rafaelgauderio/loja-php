<?php

Class Logar extends Conection {
    private $usuario, $senha;

    function __construct() {
        parent::__construct();
    }

    protected function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    protected function setSenha($senha) {
        //$this->senha = md5($senha);
       $this->senha = Logar::CriptografarSenha($senha);
       //$this->senha = $senha;
    }

    //criptograr a senha com sha256, sha512, md5 ou outra função hash de criptografia
    static function CriptografarSenha($valor) {
        return md5($valor);
    }

    protected function GetUsuario() {
        return $this->usuario;
    }

    protected function GetSenha() {
        return $this->senha;
    }
   

    public function GetLogar($usuario, $senha) {
        $this->setUsuario($usuario);
        $this->setSenha($senha);

        $user=$this->getUsuario();
        //criptografa a senha recebida pelo usuario para comparar com a senha critpgrafada no banco
        $password=($this->getSenha());
      
        $sql = "SELECT * FROM clientes WHERE client_email = '$user' AND client_senha = '$password'";        
        $this->ExecuteQuery($sql);        

        if($this->object->rowCount()>0) {
        
        $list = $this->PrintData();
        $_SESSION['CLIENTE']['client_id']        =  $list['client_id'];
        $_SESSION['CLIENTE']['client_nome']      =  $list['client_nome'];
        $_SESSION['CLIENTE']['client_senha']     =  $list['client_senha'];
        $_SESSION['CLIENTE']['client_email']     =  $list['client_email'];
        $_SESSION['CLIENTE']['client_endereco']  =  $list['client_endereco'];
        $_SESSION['CLIENTE']['client_numero']    =  $list['client_numero'];
        $_SESSION['CLIENTE']['client_bairro']    =  $list['client_bairro'];
        $_SESSION['CLIENTE']['client_cidade']    =  $list['client_cidade'];
        $_SESSION['CLIENTE']['client_uf']        =  $list['client_uf'];
        $_SESSION['CLIENTE']['client_cep']       =  $list['client_cep'];
        $_SESSION['CLIENTE']['client_telefone']  =  $list['client_telefone'];
        //$_SESSION['CLIENTE']['client_cadastro']  =  $list['client_cadastro'];
        //redirecionar para pagina de conta do cliente ao logar
        Routes::redirecionarPagina(0.5,Routes::pag_conta());
        

        }else {
           echo '<h4 class="alert alert-danger text-center">Usuário ou senha inválidos.</h4>';
           echo '<script>alert("Email ou senha inválidos")</script>';
           //echo $this->GetUsuario();
           //echo $this->GetSenha(); 
        }           
    }

    public static function Redirecionar () {   

        Routes::redirecionarPagina(0.5, Routes::pag_logar());           
    }   

    //se estiver logado, não carregar a página pedindo login e senha
    public static function ClienteLogado() {   
        $logado=false;
        if(isset($_SESSION['CLIENTE']['client_id']) && isset($_SESSION['CLIENTE']['client_email'])) {
            $logado=true;
            return $logado;

        } else {
            return $logado;
        }
    }

    public static function fazerLogoff() {
        unset($_SESSION['CLIENTE']);
        echo '<h4 class="alert alert-warning text-center">Logoff realizado com sucesso. Voltando pra pagina de login.</h4>';
        Routes::redirecionarPagina(2.8,Routes::pag_logar());
        
    }
    //Não deve mostrar os dados do cliente se o cliente não estiver logado
    //Senão estiver logado, joga de volta para pagina de login
    public static function dadosCliente() {
        if(self::ClienteLogado()==false) {
            self::areaRestrita();
            Routes::redirecionarPagina(2.5,Routes::pag_logar());
            exit();
        } else {
            $smarty = new Modelo();
            $smarty->assign('PAG_CONTA',Routes::pag_conta());
            $smarty->assign('ISLOGADO',Logar::ClienteLogado());
            $smarty->assign('ISLOGADO','<h4 class="alert alert-success text-center"> Seja bem-vindo <b>' . $_SESSION['CLIENTE']['client_email']. '</b></h4>');           
            $smarty->assign('DADOS_CLIENTE',Routes::pag_dados_do_cliente());
            $smarty->assign('TROCAR_SENHA',Routes::pag_trocar_senha());
            $smarty->assign('LOGOFF',Routes::pag_logoff());
            $smarty->display('logar.html');       

        }
    }

    public static function areaRestrita() {
        echo '<h4 class="alert alert-danger text-center">É necessário estar logado para ter acesso a aréa do cliente.<br>
        Finalizar Pedido, alterar senha, consultar dados. <br><b>Faça Login!</b></h4>';
        Routes::redirecionarPagina(3.5,Routes::pag_logar());

    }
}
?>