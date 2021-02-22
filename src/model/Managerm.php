<?php
class Managerm{
    private $connection;
    public $user_id;
    public $user_name;
    public $user_lastname;
    public $user_nick;
    public $register_day;
    public function __construct(){
        require_once('Connection.php');
        $this->connection = Connection::get_connection();
    }

    public function set_data($data){
        try {
            $query = "insert into users (user_id,user_name,user_nick,user_lastname,register_day)
                        values (user_id,:name,:nick,:lastname,now())";
            $result = $this->connection->prepare($query);
            $result->execute(array(":name"=>$data->user_name,":nick"=>$data->user_nick,":lastname"=>$data->user_lastname));
        }
        catch (PDOException $e){
            echo "It was a problem-----> Message \t".$e->getMessage();
        }
    }

    public function get_data(){
        try {
            $query = "select *from users";
            $result = $this->connection->prepare($query);
            $result->execute();
            return $result->fetchAll();
        }
        catch (PDOException $e){
            echo "It was a problem----> Message:  \t".$e->getMessage();
        }
    }

}