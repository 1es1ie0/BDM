<?php
include_once('dbh.classes.php');
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
    public function getSection(){
        $stmt = $this->connect()->prepare('CALL GET_SECTIONS()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $secciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["SECCIONES"] = $secciones;
        $stmt = null;
        return $secciones;
        
    }
    protected function updateSection($sectionID,$nombre, $desc, $colores, $orden){
        $stmt = $this->connect()->prepare('CALL UPDATE_SECTION(?,?,?,?,?)');


        if(!$stmt->execute(array($sectionID,$nombre, $desc, $colores, $orden))){
            $stmt = null;
            header("location ../views/Home.php?error=stmtFailed");
            exit();
        }

    }
    protected function deleteSection($secID){
        $stmt = $this->connect()->prepare('UPDATE NEWS_SECTIONS SET ACTIVE_S = FALSE WHERE SECTION_ID = ?;');


        if(!$stmt->execute(array($secID))){
            $stmt = null;
            header("location ../secciones.php?error=stmtFailed");
            exit();
        }

    }
}

?>