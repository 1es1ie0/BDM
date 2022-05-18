<?php
include "dbh.classes.php";
class SeccionConn extends Dbh{
    protected function register($titulo,$orden,$color){
        $stmt = $this->connect()->prepare('CALL insertSection(?,?,?)');

        if(!$stmt->execute(array($titulo,$color,$orden))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}

?>