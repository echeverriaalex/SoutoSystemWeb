<?php
    namespace Controllers;
    use PDO\ProductPDO;

    class HomeController{

        public function Index($message = ""){

            $productsController = new ProductsController();
            //$productsController->ShowListView();
            $productsController->ShowAddView();

            $storeController = new StoreController();
            //$storeController->ShowAddView();


            $productPDO = new ProductPDO();
            //$productPDO->IncreaseStock("Manaos Cola", 32);
            //$productPDO->DecreaseStock("Manaos Cola", 80);

            //$orderController = new OrderController();
            //$orderController->ShowListOrder();

            //echo "hola alex";
            
            //mail("aleex.naahuel@outlook.com", "subject", "Hola bebe");
        }
    }
?>