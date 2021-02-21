<?php
    namespace PDO;
    use Models\Store;
    use PDOException;

    class StorePDO{

        private $tableName = "Store";
        private $connection;

        public function Add(Store $newStore){

            try{
                $querySQL = "INSERT INTO ".$this->tableName." 
                (store_name, store_adress, store_phone) 
                VALUES (:store_name, :store_adress, :store_phone);";

                $parameters['store_name'] = $newStore->getName();
                $parameters['store_adress'] = $newStore->getAdress();
                $parameters['store_phone'] = $newStore->getPhone();

                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($querySQL, $parameters);
            }
            catch(PDOException $ex){

                throw $ex;
            }
        }
    }
?>