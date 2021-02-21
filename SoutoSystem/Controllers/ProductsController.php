<?php
    namespace Controllers;
    use Models\Product as Product;
    use PDO\ProductPDO as ProductPDO;

    class ProductsController{

        private $productPDO;

        public function __construct(){$this->productPDO = new ProductPDO();}
     
        public function ShowAddView(){require_once(VIEWS_PATH."add-product.php");}

        public function ShowEditView(){}

        public function ShowListView(){
            
            $products = $this->productPDO->List();
            //var_dump($products);
            require_once(VIEWS_PATH."list-products.php");
        }

        public function Add($product, $stock, $code, $price){

            $newproduct = new Product($product, $stock, $code, $price);
            $this->productPDO->Add($newproduct);

            //echo "<script> alert('producto agregado con exito') </script>";

            echo "producto agregado: <br>" . $newproduct->getInfo();
            $this->ShowAddView();

        }

        public function Delete($productDescription){

            $delete = $this->productPDO->Delete($productDescription);

            //echo "<br><br> Delete es: $delete<br><br>";

            if($delete > 0)
                $this->ShowListView();            
            else{
                echo "<script> alert('ERROR: El producto `${productDescription}` 
                sufrio un problema al eliminarlo, por favor verifique de su existencia 
                y vuelva a intentarlo.');</script>";
            }
        }
    }
?>