<?php

Class Produtos extends Conection {

    function __construct( )
    {
        parent::__construct();
    }

    public function GetProdutos() {
        $sql = "SELECT *
         FROM produtos 
         INNER JOIN categorias
         ON produtos.prod_categoria = categorias.categ_id";
         $this->ExecuteQuery($sql);
         $this->GetList();
    }

    public function GetProdutosId($id) {
        $sql = "SELECT *
         FROM produtos 
         INNER JOIN categorias
         ON produtos.prod_categoria = categorias.categ_id";
         $sql .= " AND prod_id= {$id}";
         $this->ExecuteQuery($sql);
         $this->GetList();
    }

    public function GetList () {
        $i = 1;
        while($list = $this->PrintData()) {
            $this->itens[$i] = array(
                'prod_id' =>$list['prod_id'],
                'prod_nome' =>$list['prod_nome'],
                'prod_descri' => $list['prod_descri'],
                'prod_preco' => $list['prod_preco'],
                'prod_img'=>Routes::get_ImageURL() . $list['prod_img'],
                'prod_categoria' => $list['prod_categoria'],
                'prod_destaque' => $list['prod_destaque'] 
                );
            $i++;
        }               
           
        }            
     

    }


?>
