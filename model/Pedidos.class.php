<?php
    Class Pedidos extends Conection {

        function __construct () {
            parent::__construct();
        }

        function SalvarPedido($cliente,$codigo,$referencia) {

        $flag = false;
        $data=Pedidos::DataAtual();
        $hora=Pedidos::HoraAtual();       

        $sql  = "INSERT INTO pedidos ";   
     	$sql .= "(`pedid_data`, `pedid_hora`,`pedid_cliente`,`pedid_codigo`,`pedid_referencia`) VALUES ('$data','$hora','$cliente','$codigo','$referencia')";

     	$this->ExecuteQuery($sql);
        //echo $sql;
        $this->GravarItensPedido($codigo);
        $flag= true;
        return $flag;
           }


        static function DataAtual () {
            return date('Y-m-d');
         }
         
        static function HoraAtual () {
            return date('H:i:s');
        }     
    

        public function GravarItensPedido($codigoPedido) {
           
            $carrinho = new Carrinho();
            foreach($carrinho->GetCarrinho() as $item) {
                
                $produto=$item['prod_id'];
                $preco=$item['prod_preco_banco'];
                $quantidade=$item['prod_quanti'];
                $codigo=$codigoPedido;
                
                $sql = "INSERT INTO itens_dos_pedidos ";
                $sql .= "(item_produto,item_preco,item_quanti,item_codigo_pedido)";
                $sql .= "VALUES ('$produto','$preco','$quantidade','$codigo')";               
                $this->ExecuteQuery($sql);
                //echo $sql;
            }
            
        }

        public function LimparSessao() {
            unset($_SESSION['PRODUTOS']);
            unset($_SESSION['pedido']);

        }


    }   

?>
