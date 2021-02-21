<?php
    namespace Models;

    class Store{

        private $name;
        private $adress;
        private $phone;

        public function __construct($name = '', $adress = '', $phone = ''){

            $this->setName($name);
            $this->setAdress($adress);
            $this->setPhone($phone);
        }

        public function setName($name){$this->name = $name;}
        public function getName(){return $this->name;}

        public function setAdress($adress){$this->adress = $adress;}
        public function getAdress(){return $this->adress;}

        public function setPhone($phone){$this->phone = $phone;}
        public function getPhone(){return $this->phone;}
    }
?>