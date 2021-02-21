<?php
    namespace Models;

    class Product{

        private $description; // aca va el nombre o la descripcion del producto
        private $stock; // cantidad disponible o  existente
        private $code; // el identificador, id, codigo de barra
        private $price;
        //private $quantity; // para hacer una orden de pedido al deposito

        public function __construct($description = '', $stock = '', $code = '', $price = '', $quantity = ''){

            $this->setDescription($description);
            $this->setStock($stock);
            $this->setCode($code);
            $this->setPrice($price);
            //$this->setQuantity($quantity);
        }
        
        public function setDescription($description){$this->description = $description;}
        public function setStock($stock){$this->stock = $stock;}
        public function setCode($code){$this->code = $code;}
        public function setPrice($price){$this->price = $price;}
        //public function setQuantity($quantity){$this->quantity = $quantity;}
        
        public function getDescription(){return $this->description;}
        public function getStock(){return $this->stock;}
        public function getCode(){return $this->code;}
        public function getPrice(){return $this->price;}
        //public function getQuantity(){return $this->quantity;}

        public function getInfo(){

            return  "<br> Product: " . $this->getDescription().
                    "<br> Stock: "   . $this->getStock().
                    "<br> Code: "    . $this->getCode().
                    "<br> Price: "   . $this->getPrice();
        }
    }
?>