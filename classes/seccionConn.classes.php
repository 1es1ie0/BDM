<?php
include "dbh.classes.php";
class SeccionConn extends Dbh{
    protected function register($titulo,$descripcion,$orden,$color){
        $stmt = $this->connect()->prepare('CALL insertSection(?,?,?,?)');

        if(!$stmt->execute(array($titulo,$descripcion,$color,$orden))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
        
    }
    protected function getSection(){
        $stmt = $this->connect()->prepare('CALL GET_SECTIONS()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $secciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["SECCIONES"] = $secciones;
        $stmt = null;
        
    }
}

?>