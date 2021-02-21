<?php
    namespace PDO;
    use Models\Product as Product;

    class OrderPDO{

        private $orderList = array();

        public function Add(Product $product){

            array_push($this->orderList, $product);  
            //var_dump($this->orderList);
        }

        public function RetrieveData(){

            $this->orderList = array();



        }

        public function getData(){

            return $this->orderList;
        }
    }
?>