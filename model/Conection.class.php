<?php

class Conection extends Constants
{

    private $user, $password, $host, $database;

    protected $object, $itens=array(),$prefix;

    function __construct()
    {
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->password =self::BD_PASSWORD;        
        $this->database = self::BD_DATABASE;
        $this->prefix = self::BD_PREFIX;

        try {
            if ($this->Conect() == null) {
                $this->Conect();
            }
            $this->Conect();
        } catch (Exception $erro) {
            exit($erro->getMessage() . '<h3> Erro, não foi possível conectar ao Banco de dados</h3>')
                . "<br>". $erro->getTrace();
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

    //progeter essa função de sql injection
    public function ExecuteQuery($query, array $parametros=NULL) {
        $this->object = $this->Conect()->prepare($query);        
        $parametros=filter_var($parametros,FILTER_SANITIZE_NUMBER_INT);                
               
        if(is_countable($parametros) && count($parametros)>0) {
            foreach($parametros as $key=>$value) {
                $this->object->bindvalue($key,$value);                
            }
        } 
                             
        return $this->object->execute();                      
    }
    //faz um for e percorre todos os dados do objeto
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
