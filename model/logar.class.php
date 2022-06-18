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
            echo 'Login efetuado';
        }else {
            echo 'Usuario não está logado';
            echo $this->GetUsuario();
            echo $this->GetSenha();            
            
        }
            //$list = $this->PrintData();

            //$_SESSION['CLIENTE']['client_id']
        
    }

    public function GetListClientes () {
        $i = 1;
        while($list = $this->PrintData()) {
            $this->itens[$i] = array(
                'client_id' =>$list['client_id'],
                'client_email' =>$list['client_email'],
                'client_nome' => $list['cliente_nome']                           
                );
            $i++;
        }              
           
    }   

        



        
}

 



?>