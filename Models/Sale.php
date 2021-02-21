<?php
    namespace Sale;

use Models\Product;

class Sale{

    private $total;
    private $subTotal;
    private $quantityProducts;
    private $date;
    private $hour;
    private $products = array();

    public function setTotal($total = ''){$this->total = $total;}
    public function getTotal(){return $this->total;}
    
    public function setSubtotal($subtotal = ''){$this->subTotal = $subtotal;}
    public function getSubtotal(){return $this->subTotal;}

    public function setQuantityProducts($quantity){$this->quantityProducts = $quantity;}
    public function getQuantityProduts(){return $this->countProducts();}

    private function setDate($date){$this->date = $date;}

    private function setHour($hour){

        date_default_timezone_set("America/Argentina/Buenos_Aires");
        //date 

    }


    public function AddProductToSale(Product $product){

        array_push($this->products, $product);
    }

    public function DeleteProductToSale($productDeleteCode){

        foreach($this->products as $key => $product){

            if($product->getCodigo() == $productDeleteCode){

                unset($this->products[$key]);
            }
        }
    }

    public function countProducts(){

        return count($this->products);
    }

    public function calculateSubtotal(){

        $subtotal = 0;

        foreach($this->products as $product){

            $subtotal += $product->getPrice();
        }

        return $subtotal;
    }


    



    

}
?>