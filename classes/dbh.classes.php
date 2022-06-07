<?php
class Dbh{

    protected function connect(){
        try{

            $server="localhost";
            $username="root";
            $password="lero2001";
            $database="pia_news_bdm";

            $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);// generamos una instancia de PDO (Php DataBase Object)
            return $conn;
        }
        catch(PDOException $error){
            die("Connection failed " . $error->getMessage());// DIE termina todo y lanza una excepcion
        }
    }
}
?>