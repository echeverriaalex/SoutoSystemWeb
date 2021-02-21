<?php
    namespace Controllers;

    use PDO\StorePDO;

    class StoreController{

        private $storePDO;

        public function __construct(){$this->storePDO = new StorePDO();}

        public function ShowAddView(){require_once(VIEWS_PATH."add-store.php");}


        public function Add($name, $adress, $phone){


        }


    }
?>