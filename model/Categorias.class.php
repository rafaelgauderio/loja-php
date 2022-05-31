<?php

Class Categorias extends Conection {

    private $categ_id, $categ_nome;

    function __construct() {
        parent::__construct();
    }

    function GetCategorias () {
        $sql = "SELECT * FROM categorias";
        $this->ExecuteQuery($sql);
        $this->GetList();
    }

    public function GetList () {
        $i = 1;
        while($list = $this->PrintData()) {
            $this->itens[$i] = array(
                'categ_id' =>$list['categ_id'],
                'categ_nome' =>$list['categ_nome'],
                'categ_href' => Routes::pag_Produtos() . '/' . $list['categ_nome']                           
                );
            $i++;
        }              
           
    }   

}



?>

