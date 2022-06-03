<?php
//Carinho não precisa extender de conexão, não vai conectar com o banco
//usar sessoes para cada produto adicionado, removido do carrinho
class Carrinho {
    private $total_preco, $quant_itens = array();

    function GetCarrinho ($session=NULL) {
        $contador =1;
        $sub_total =1.00;
        foreach($_SESSION['PRODUTOS'] as $lista ) {   
             $this->quant_itens[$contador] = array(
                'prod_id' => $lista['ID'],
                'prod_nome' => $lista['NOME'],
                'prod_preco' => $lista['PRECO'],
                'prod_quanti'=> $lista['QUANTI'],
                'prod_img'  => $lista['IMG'],
                'prod_subTotal'=> Carrinho::MoedaBrazil($sub_total)
            );       
             $contador++;
        }
        if(count($this->quant_itens) >0) {
            return $this->quant_itens;
        } else {
            echo '<h3 class="alert alert-warning">Seu carrinho está vazio!</h3>';
        }
    
    }

    public static function MoedaBrazil($valor) {
        return number_format($valor,2,",",".");
    }

}

?>
