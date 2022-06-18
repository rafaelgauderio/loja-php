<?php

Class Categorias extends Conection {

    private $categ_id, $categ_nome;

    function __construct() {
        parent::__construct();
    }

    public function GetCategorias () {
        $sql = "SELECT categ_id, categ_nome FROM categorias";
        $this->ExecuteQuery($sql);
        $this->GetListCategorias();
    }

    public function GetListCategorias () {
        $i = 1;
        while($list = $this->PrintData()) {
            $this->itens[$i] = array(
                'categ_id' =>$list['categ_id'],
                'categ_nome' =>$list['categ_nome'],
                'categ_href' => Routes::pag_Produtos() . '/' . $list['categ_id']                           
                );
            $i++;
        }              
           
    }   

}



?>

