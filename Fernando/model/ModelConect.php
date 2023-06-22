<?php
namespace Models;
abstract class ModelConect
{
    protected function conectDB()
    {
        try{
            $con=new \PDO("mysql:host=".HOST.";dbname=".DB."",USER,PASS);
            return $con;
        }catch (\PDOException $erro){
            return $erro->getMessage();
        }
    }
}

?>