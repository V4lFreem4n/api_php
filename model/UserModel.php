<?php
class Database{
    protected $connection = null;
    public function __construct(){

        try{
            $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            if(mysqli_connect_errno()){
                throw new Exception("Could not connect to database.");
            }

        }catch(Exception $e){
            throw new Exception($e->getMessage());  
        }

    }
    
}