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
        $id_sanitizado = filter_var($id,FILTER_SANITIZE_STRING);
        $sql = "SELECT *
         FROM produtos 
         INNER JOIN categorias
         ON produtos.prod_categoria = categorias.categ_id";
         $sql .= " AND prod_id={$id_sanitizado}";
         $parametros = array(':id_sanitizado'=>(int)$id_sanitizado);         
         //somente vai aceitar inteiros para id, não tem como o usuário fazer sql injection         
         $this->ExecuteQuery($sql,$parametros);
         $this->GetList();
    }

    public static function MoedaBrazil($valor) {
        return number_format($valor,2,",",".");
    }

    public function GetList () {
        $i = 1;
        while($list = $this->PrintData()) {
            $this->itens[$i] = array(
                'prod_id' =>$list['prod_id'],
                'prod_nome' =>$list['prod_nome'],
                'prod_descri' => $list['prod_descri'],
                'prod_preco' => Produtos::MoedaBrazil($list['prod_preco']),
                'prod_img'=>Routes::get_ImageURL() . $list['prod_img'],
                'prod_categoria' => $list['prod_categoria'],
                'prod_destaque' => $list['prod_destaque'] 
                );
            $i++;
        }               
           
        } 
        
        public function GetProdutosCategoriaId($id) {            
            $id_sanitizado = filter_var($id,FILTER_SANITIZE_STRING);
            $sql = "SELECT *
             FROM produtos 
             INNER JOIN categorias
             ON produtos.prod_categoria = categorias.categ_id";
             $sql .= " AND prod_categoria= {$id_sanitizado}";
             $parametros = array(':id_sanitizado'=>(int)$id_sanitizado);
             $this->ExecuteQuery($sql,$parametros);
             $this->GetList();
        }
     

    }


?>
