<?php
    namespace Controllers;
    use Models\Product as Product;
use PDO\OrderPDO;
use PDO\ProductPDO as ProductPDO;

    class OrderController{

        private $orderPDO;

        public function __construct(){$this->orderPDO = new OrderPDO();}
        
        public function ShowListProduct(){

        }

        public function ShowListOrder(){
            
            $product1 = new Product("marolio pure de tomate", 100, 11111, 11.11);
            $product2 = new Product("molto mostachol", 200, 22222, 22.22);
            $product3 = new Product("cocacola 2.25l", 300, 33333, 33.33);
            $product4 = new Product("quara malbec", 400, 44444, 44.44);
            $product5 = new Product("estancia mendoza", 500, 55555, 55.55);
            $product6 = new Product("Vodka Skyy", 600, 66666, 66.66);
            $product7 = new Product("Detergente Ala", 700, 77777, 77.77);
            $product8 = new Product("mayonesa cada dia", 800, 88888, 88.88);
            $product9 = new Product("azucar ledesma", 900, 99999, 99.99 );
            
            $products = array();
            $products = [$product1, $product2, $product3, $product4, $product5, $product6, 
                        $product7,$product8, $product9];
    
            require_once(VIEWS_PATH."make-order.php");
        }

        public function List(){

            /*
            var_dump($_POST);

            foreach($_POST as $dato){
                
                echo "<br><br> Product: ".$_POST["product"];
                echo "<br> Code: ".$_POST["code"];
                echo "<br> Quantity: ".$_POST["quantity"];
                echo "<br> Selection: ".$_POST["selection"]."<br><br><br> --> ";

                var_dump($dato);
            }
            */      

            //var_dump($this->orderList);
            require_once(VIEWS_PATH."order-list.php");            
        }

        public function Add($product, $code, $quantility){

            $product = new Product($product, "", $code, "", $quantility);
            $this->orderPDO->Add($product);
            $this->ShowListOrder();

            $orderList = $this->orderPDO->getData();
            require_once(VIEWS_PATH."list-order.php");
        }
    }
?>