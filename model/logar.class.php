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
       // $this->senha = Logar::CriptografarSenha($senha);
       $this->senha = $senha;
    }

    //criptograr a senha com sha256, sha512 ou outra função hash de criptografia
    static function CriptografarSenha($valor) {
        return hash('SHA256', $valor);
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
        $password=$this->getSenha();
      
        $sql = "SELECT * FROM clientes WHERE client_email = '$user' AND client_senha = '$password'";        
        $this->ExecuteQuery($sql);    
        

        if($this->object->rowCount()>0) {
        //echo 'Login efetuado com sucesso';

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
        $_SESSION['CLIENTE']['client_cadastro']  =  $list['client_cadastro'];
        

        }else {
           //echo 'Usuario não está logado. Usuário ou senha inválidos.';
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
        echo '<h5 class="alert alert-warning">Logoff realizado com sucesso. Voltando pra pagina de login</h5>';
        Routes::redirecionarPagina(1,Routes::pag_logar());
        
    }
    //Não deve mostrar os dados do cliente se o clietne não estiver logado
    //Senão estiver logado, joga de volta para pagina de login
    public static function dadosCliente() {
        if(self::ClienteLogado()==false) {
            Routes::redirecionarPagina(1,Routes::pag_logar());
            exit();
        } else {
            $smarty = new Template();
            $smarty->assign('ISLOGADO',Logar::ClienteLogado());
            $smarty->assign('ISLOGADO','<h5 class="alert alert-success text-center"> Seja bem-vindo ' . $_SESSION['CLIENTE']['client_email']. '</h5>');           
            $smarty->assign('LOGOFF',Routes::pag_logoff());
            $smarty->display('logar.html');

        }
    }
}
?>