<?php

class Conection extends Config
{

    private $user, $password, $host, $database;

    protected $object, $itens=array(),$prefix;

    function __construct()
    {
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->password =self::BD_SENHA;        
        $this->database = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;

        try {
            if ($this->Conect() == null) {
                $this->Conect();
            }
            $this->Conect();
        } catch (Exception $erro) {
            exit($erro->getMessage() . '<h3> Erro, não foi possível conectar ao Banco de dados</h3>');
        }
    }
  

    private function Conect()
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );
        $link = new PDO("mysql:host={$this->host};
        dbname={$this->database}",
            $this->user,
            $this->password,
            $options);
        return $link;
    }

    public function ExecuteQuery($query, array $params = NULL) {
        $this->object = $this->Conect()->prepare($query);
        return $this->object->execute();                      
    }
    public function PrintData () {
        return $this->object->fetch(PDO::FETCH_ASSOC);
    }

    public function TotalData () {
        return $this->object->rowCount();
    }

    public function GetItens () {
        //itens vai ser uma lista de vetores
        //return $this->object->itens;
        return $this->itens;
    }

  
}
