<?php
class Connection{

    public function  __construct(){

    }

    public static function get_connection(){
        try {
            $connection = new PDO('mysql:host=localhost; dbname=registros',"santiago","santiago");
            $connection->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
            $connection->exec('SET CHARSET utf8');
        }
        catch (PDOException $e){
            die("It was a problem man!\t".$e->getMessage());
        }
        finally {
            return $connection;
        }
    }
}