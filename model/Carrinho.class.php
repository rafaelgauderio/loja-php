<?php
//Carinho não precisa extender de conexão, não vai conectar com o banco
//usar sessoes para cada produto adicionado, removido do carrinho
class Carrinho {
    private $total_preco, $quant_itens = array();

    public function GetCarrinho ($session=NULL) {
        $contador=1;
        
        foreach(@$_SESSION['PRODUTOS'] as $lista ) {  
            $sub_total =($lista['PRECO_BANCO'] * $lista['QUANTI']); 
            $this->total_preco = $this->total_preco + $sub_total; 
             $this->quant_itens[$contador] = array(
                'prod_id' => $lista['ID'],
                'prod_nome' => $lista['NOME'],
                //salvar no banco de dados como padrão US e depois converte para
                //o padrão brasil na hora de mostrar pro usuário
                'prod_preco_banco'=>$lista['PRECO_BANCO'],
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

    public function GetTotalCarrinho() {
        return $this->total_preco;
    }

    public function AdicionarAoCarrinho($id) {
        $produtos = new Produtos();
        $produtos->GetProdutosId($id);
        foreach ($produtos->GetItens() as $objProdutos) {
            $ID = $objProdutos['prod_id'];
            $NOME = $objProdutos['prod_nome'];
            $PRECO_BANCO = $objProdutos['prod_preco_banco'];
            $PRECO = $objProdutos['prod_preco'];
            $QUANTI= 1;
            $IMG = $objProdutos['prod_img'];
            $ACTION= $_POST['action'];
        }
        if($ACTION=='adicionar') {
            //primeiro verificar se já tem um sessão com esse prod_id
            if(isset($_SESSION['PRODUTOS'][$ID]['ID'])==false) {
                $_SESSION['PRODUTOS'][$id]['ID'] = $ID;
                $_SESSION['PRODUTOS'][$id]['NOME'] = $NOME;                
                $_SESSION['PRODUTOS'][$id]['QUANTI'] = $QUANTI;
                $_SESSION['PRODUTOS'][$id]['IMG'] = $IMG;
                $_SESSION['PRODUTOS'][$id]['PRECO_BANCO'] = $PRECO_BANCO;
                $_SESSION['PRODUTOS'][$id]['PRECO'] = $PRECO;
            } else {
                //caso o produto já existe na sessao, apenas incrementa
                $_SESSION['PRODUTOS'][$id]['QUANTI'] = $_SESSION['PRODUTOS'][$id]['QUANTI'] + $QUANTI;
            }            
            echo '<h3 class="alert alert-success">Produto adicionado ao carrinho com sucesso.</h3>';

        } else if ($ACTION=='deletar') {
            $this->DeleterCarrinhoId($id);
            echo '<h3 class="alert alert-success">Produto(s) removido(s) do carrinho.</h3>';

        } else if ($ACTION=='limpar') {
            $this->LimparCarrinho();
            echo '<h3 class="alert alert-success">Todos os itens foram excluídos do carrinho.</h3>';

        }
    }

    protected function DeleterCarrinhoId($id) {
        unset($_SESSION['PRODUTOS'][$id]);
    }

    protected function LimparCarrinho () {
        //destroi todo as sessoes idependetes do id
        unset($_SESSION['PRODUTOS']);
    }

}

?>
