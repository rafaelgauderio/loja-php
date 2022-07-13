<?php

class Clientes extends Conection
{

    protected $client_email, $client_senha, $client_nome, $client_endereco, $client_numero;
    protected $client_bairro, $client_cidade, $client_uf, $client_cep, $client_telefone;

    function __construct()
    {
        parent::__construct();
    }
    //fazer os getters e setters das variáveis

    public function getClient_email()
    {
        return $this->client_email;
    }

    public function getClient_senha()
    {
        return $this->client_senha;
    }

    public function getClient_nome()
    {
        return $this->client_nome;
    }

    public function getClient_endereco()
    {
        return $this->client_endereco;
    }

    public function getClient_numero()
    {
        return $this->client_numero;
    }

    public function getClient_bairro()
    {
        return $this->client_bairro;
    }

    public function getClient_cidade()
    {
        return $this->client_cidade;
    }

    public function getClient_uf()
    {
        return $this->client_uf;
    }

    public function getClient_cep()
    {
        return $this->client_cep;
    }

    public function getClient_telefone()
    {
        return $this->client_telefone;
    }

    //Nos setter faz as validações e sanitiza as variaveis
    public function setClient_email($client_email)
    {
        if (filter_var($client_email, FILTER_VALIDATE_EMAIL)) {
            $this->client_email = $client_email;
        } else {
            echo '<h2 class="alert alert-danger">Informe um email válido.<h2>';
            Routes::redirecionarPagina(2, Routes::pag_de_cadastro());
        }
    }

    static function CriptografarSenha($valor)
    {
        return md5($valor);
    }


    public function setClient_senha($client_senha)
    {
        $client_senha = filter_var($client_senha, FILTER_SANITIZE_STRING);
        if (strlen($client_senha) >= 6) {
            $this->client_senha = Clientes::CriptografarSenha($client_senha);
        } else {
            echo '<h2 class="alert alert-danger">Senha tem que ter no mínimo 6 caracteres.<h2>';
            Routes::redirecionarPagina(2, Routes::pag_de_cadastro());
        }
    }

    public function setClient_nome($client_nome)
    {
        $client_nome = filter_var($client_nome, FILTER_SANITIZE_STRING);
        $this->client_nome = $client_nome;
    }

    public function setClient_endereco($client_endereco)
    {
        $client_endereco = filter_var($client_endereco, FILTER_SANITIZE_STRING);
        $this->client_endereco = $client_endereco;
    }

    public function setClient_numero($client_numero)
    {
        $client_numero = filter_var($client_numero, FILTER_SANITIZE_NUMBER_INT);
        $this->client_numero = $client_numero;
    }

    public function setClient_bairro($client_bairro)
    {
        $client_bairro = filter_var($client_bairro, FILTER_SANITIZE_STRING);
        $this->client_bairro = $client_bairro;
    }

    public function setClient_cidade($client_cidade)
    {
        $client_cidade = filter_var($client_cidade, FILTER_SANITIZE_STRING);
        $this->client_cidade = $client_cidade;
    }

    public function setClient_uf($client_uf)
    {
        $client_uf = filter_var($client_uf, FILTER_SANITIZE_STRING);
        if (strlen($client_uf) == 2 || $client_uf == null) {
            $this->client_uf = $client_uf;
        } else {
            echo '<h2 class="alert alert-danger">UF tem que ter apenas 2 dígitos.<h2>';
            Routes::redirecionarPagina(2, Routes::pag_de_cadastro());
        }
    }

    public function setClient_cep($client_cep)
    {
        $client_cep = filter_var($client_cep, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($client_cep) == 8 || $client_cep == null) {
            return $this->client_cep = $client_cep;
        } else {
            echo '<h2 class="alert alert-danger">CEP é formado por 8 dígitos inteiros.<h2>';
            Routes::redirecionarPagina(2, Routes::pag_de_cadastro());
        }
    }

    public function setClient_telefone($client_telefone)
    {
        $client_telefone = filter_var($client_telefone, FILTER_SANITIZE_STRING);
        if (strlen($client_telefone) <= 13 || $client_telefone == null) {
            $this->client_telefone = $client_telefone;
        } else {
            echo '<h2 "class=alert alert-danger">Informe o telefone e o DDD apenas com números.<h2>';
            Routes::redirecionarPagina(2, Routes::pag_de_cadastro());
        }
    }

    public function geradorDeSenha()
    {
        $combinacao = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $senha = array();
        $combinacaoSize = strlen($combinacao) - 1;
        for ($i = 0; $i < 6; $i++) {
            $numero = rand(0, $combinacaoSize);
            $senha[] = $combinacao[$numero];
        }
        return (implode($senha));
    }

    public function trocarSenha($senhaGerada,$email_cadastrado) {
        /* Não funciona com array
        $parametros = array (':email' => $this->getClient_email(),
                            ':senha' => $this->getClient_senha());
        $sql = "UPDATE clientes SET client_senha = ':senha' WHERE client_email = ':email'";
        $this->setClient_email($email_cadastrado);
        $this->setClient_senha($senhaGerada);
        $this->ExecuteQuery($sql,$parametros);
        */
        //primeiro seta a nova senha pra criptogravas e depois atualiza no banco
        $this->setClient_email($email_cadastrado);
        $this->setClient_senha($senhaGerada);
        $email = $this->getClient_email();
        $novaSenha = $this->getClient_senha();
       
        $sql = "UPDATE clientes SET client_senha = '$novaSenha' WHERE client_email = '$email'";
        $this->ExecuteQuery($sql);       

    }



    //permite tudo ser nulo, menos senha e email, mas se foi passado os dados
    // validar eles antes de settar    
    public function SetarDadosValidados(
        $client_email,
        $client_senha,
        $client_nome ,
        $client_endereco,
        $client_numero ,
        $client_bairro ,
        $client_cidade ,
        $client_uf ,
        $client_cep,
        $client_telefone 
    ) {
        $this->setClient_email($client_email);
        $this->setClient_senha($client_senha);
        $this->setClient_nome($client_nome);
        $this->setClient_endereco($client_endereco);
        $this->setClient_numero($client_numero);
        $this->setClient_bairro($client_bairro);
        $this->setClient_cidade($client_cidade);
        $this->setClient_uf($client_uf);
        $this->setClient_cep($client_cep);
        $this->setClient_telefone($client_telefone);
    }

    //verifica se o email já existe no bando de dados
    public function VerificaEmailJaCadastrado($email)
    {
        //$encontrou = false;
        $sql = "SELECT client_email FROM clientes WHERE client_email = '$email'";
        $this->ExecuteQuery($sql);
        return $this->TotalData();
    }

    public function InserirCliente()
    {

        if ($this->VerificaEmailJaCadastrado($this->getClient_email()) > 0) {
            echo '<h3 class="alert alert-danger">Esse email já foi cadastrado. Informe outro.<h3>';
            Routes::redirecionarPagina(2.5, Routes::pag_de_cadastro());
            exit();
        } else {

            $client_email = $this->getClient_email();
            $client_senha = $this->getClient_senha();
            $client_nome = $this->getClient_nome();
            $client_endereco = $this->getClient_endereco();
            $client_numero = $this->getClient_numero();
            $client_bairro = $this->getClient_bairro();
            $client_cidade = $this->getClient_cidade();
            $client_uf = $this->getClient_uf();
            $client_cep = $this->getClient_cep();
            $client_telefone = $this->getClient_telefone();

            $sql = "INSERT INTO clientes (client_email, client_senha, client_nome, client_endereco,";
            $sql .= " client_numero, client_bairro, client_cidade, client_uf, client_cep, client_telefone)";
            $sql .= " VALUES ('$client_email', '$client_senha', '$client_nome', '$client_endereco',";
            $sql .= " '$client_numero', '$client_bairro', '$client_cidade', '$client_uf', '$client_cep', '$client_telefone')";
            /*
        $parametros = array (
            ':client_email' => $this->getClient_email(),
            ':client_senha' => $this->getClient_senha(),
            ':client_nome' => $this->getClient_nome(),
            ':client_endereco' => $this->getClient_endereco(),
            ':client_numero' => $this->getClient_numero(),
            ':client_bairro' => $this->getClient_bairro(),
            ':client_cidade' => $this->getClient_cidade(),
            ':client_uf' => $this->getClient_uf(),
            ':client_cep' => $this->getClient_cep(),
            ':client_telefone' => $this->getClient_telefone()
        ); 
        */
            //echo $sql;
            //Verificar porque não funciona com array
            //$this->ExecuteQuery($sql,$paramentros);
            $this->ExecuteQuery($sql);
        }
    }

    public function AtualizarDadosCliente ($id_cliente) {
        //verificar se já tem aquele email no banco e se não está logado na sessao com um email diferente do cadastrado no banco
        if(($this->getClient_email() == $_SESSION['CLIENTE']['client_email']) && ($this->VerificaEmailJaCadastrado($this->getClient_email()) ==1)) {
            //atualiza cadastro           
           
            $client_nome = $this->getClient_nome();
            $client_endereco = $this->getClient_endereco();
            $client_numero = $this->getClient_numero();
            $client_bairro = $this->getClient_bairro();
            $client_cidade = $this->getClient_cidade();
            $client_uf = $this->getClient_uf();
            $client_cep = $this->getClient_cep();
            $client_telefone = $this->getClient_telefone();

            $sql = "UPDATE clientes ";
            $sql .= " SET client_nome = '$client_nome' , client_endereco = '$client_endereco', client_numero = '$client_numero', client_bairro = '$client_bairro', ";
            $sql .= " client_cidade = '$client_cidade', client_uf ='$client_uf' , client_cep ='$client_cep' , client_telefone= '$client_telefone' ";
            $sql .= " WHERE client_id = '$id_cliente'";
            $flag = $this->ExecuteQuery($sql);
           if($flag==true) {
            return $flag;
           } else {
                return $flag;
           }



        } else {
            echo '<h3 class="alert alert-danger">Não foi possível atualizar os dados. Verifique o email de cadastro.</h3>';
            Routes::redirecionarPagina(2.5, Routes::pag_dados_do_cliente());
            exit();
        }

    } 
}
