<?php
    namespace PDO;

    use Exception;
    use Models\Product as Product;
    use PDOException;

    class ProductPDO{
            
        private $connection;
        private $tableName = "Products";    
        
        public function Add(Product $product){

            try{
                $querySQL = "INSERT INTO ".$this->tableName."
                (product_description, product_stock, product_code, product_price) 
                VALUES (:product_description, :product_stock, :product_code, :product_price);";

                $parameters['product_description'] = $product->getDescription();
                $parameters['product_stock'] = $product->getStock();
                $parameters['product_code'] = $product->getCode();
                $parameters['product_price'] = $product->getPrice();

                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($querySQL, $parameters);                    
            }
            catch(Exception $ex){

                throw $ex;
            }
        }

        public function Edit($description, Product $newProduct){

            try{
                $edit_query = "UPDATE ".$this->tableName." 
                SET product_description = :product_description,
                product_stock = :product_stock, 
                product_code = :product_code, 
                product_price = :product_price 
                WHERE(product_description = :product_description);";

                $parameters['product_description'] = $newProduct->getDescription();
                $parameters['product_stock'] = $newProduct->getStock();
                $parameters['product_code'] = $newProduct->getCode();
                $parameters['product_price'] = $newProduct->getPrice(); 
                $parameters['current_description'] = $description;

                $this->connection = Connection::GetInstance();
                $editCount = $this->connection->ExecuteNonQuery($edit_query, $parameters);
                return $editCount;
            }
            catch(PDOException $ex){

                throw $ex;
            }
        }

        public function Delete($productDescription){

            try{
                $querySQL = "DELETE FROM ".$this->tableName." 
                WHERE (product_description = :product_description);";

                $parameters['product_description'] = $productDescription;
                $this->connection = Connection::GetInstance();
                $deleteCount = $this->connection->ExecuteNonQuery($querySQL, $parameters);
                return $deleteCount;
            }
            catch(PDOException $ex){

                throw $ex;
            }
        }

        public function List(){ // o tambien se puede llamar getAll

            try{
                $productList = array();
                $querySQL = "SELECT * FROM ".$this->tableName;

                $this->connection = Connection::GetInstance();
                $productsResult = $this->connection->Execute($querySQL);

                foreach($productsResult as $row){

                    $product = new Product();
                    $product->setDescription($row['product_description']);
                    $product->setStock($row['product_stock']);
                    $product->setCode($row['product_code']);
                    $product->setPrice($row['product_price']);

                    array_push($productList, $product);
                }

                return $productList;
            }
            catch(PDOException $ex){

                throw $ex;
            }
        }

        // aumentar stock
        public function IncreaseStock($productDescription, $addStock){

            try{
                $query = "SELECT product_stock FROM ".$this->tableName." 
                WHERE (product_description = :product_description);";
               
                $parameters['product_description'] = $productDescription;

                $this->connection = Connection::GetInstance();
                $stockReal = $this->connection->Execute($query, $parameters);

                if($stockReal){

                    $product = $stockReal[0];
                    $stock = $product['product_stock'];
              
                    $stockFinal = $stock + $addStock;

                    $query = "UPDATE ".$this->tableName." 
                    SET product_stock = :product_stock 
                    WHERE (product_description = :product_description);";

                    $parameters['product_stock'] = $stockFinal;

                    $this->connection = Connection::GetInstance();
                    $up = $this->connection->ExecuteNonQuery($query, $parameters);

                    return $up;
                }
            }
            catch(PDOException $ex){

                throw $ex;
            }
        }

        // disminuir, reducir stock
        public function DecreaseStock($productDescription, $subtractStock){

            try{
                $query = "SELECT product_stock FROM ".$this->tableName." 
                WHERE (product_description =:product_description);";

                $parameters['product_description'] = $productDescription;

                $this->connection = Connection::GetInstance();
                $stockReal = $this->connection->Execute($query, $parameters);

                if($stockReal){

                    $product = $stockReal[0];
                    $stock = $product['product_stock'];

                    $stockFinal = $stock - $subtractStock;

                    $query = "UPDATE ".$this->tableName." 
                    SET product_stock = :product_stock 
                    WHERE (product_description = :product_description);";

                    $parameters['product_stock'] = $stockFinal;

                    $this->connection = Connection::GetInstance();
                    $down = $this->connection->ExecuteNonQuery($query, $parameters);

                    return $down;
                }
            }
            catch(PDOException $ex){

                throw $ex;
            }
        }
    }
?>