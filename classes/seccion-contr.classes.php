<?php
include ('seccionConn.classes.php');
class SeccionContr extends SeccionConn{
    private $titulo;
    private $descripcion;
    private $orden;
    private $color;

    public function __construct($titulo,$descripcion,$orden,$color){
        $this->titulo = $titulo;
        $this->descripcion=$descripcion;
        $this->orden = $orden;
        $this->color = $color;
    }

    public function registerSection(){
        
            if( $this->emptyInputs() == false ){
                // echo 'rip en los inputs';
                header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
                exit();//detiene todo el script
            }
           
            $this->register($this->titulo,$this->descripcion, $this->orden,$this->color);
    }

    
    private function emptyInputs(){
        $result;
        if( empty($this->titulo) || empty($this->orden) || empty($this->color)  ){//empty si viene vacio
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    
}

class SeccionContrId extends SeccionConn{
    private $sectionID;
    

    public function __construct($sectionID){
        $this->sectionID = $sectionID;
    }

    public function withSection(){
        $this->getSectionID($this->sectionID);
    }
    public function delSection(){
        $this->deleteSection($this->sectionID);
    }
}

class SeccionEdit extends SeccionConn{
    private $sectionID;
    private $titulo;
    private $descripcion;
    private $orden;
    private $color;

    public function __construct($sectionID,$titulo,$descripcion,$orden,$color){
        $this->sectionID = $sectionID;
        $this->titulo = $titulo;
        $this->descripcion=$descripcion;
        $this->orden = $orden;
        $this->color = $color;
    }

    public function editSection(){
        
        if( $this->emptyInputs() == false ){
            // echo 'rip en los inputs';
            header("location: ../secciones.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
            exit();//detiene todo el script
        }
       
        $this->updateSection($this->sectionID ,$this->titulo,$this->descripcion,$this->color, $this->orden);
}
    private function emptyInputs(){
        $result;
        if( empty($this->titulo) || empty($this->orden) || empty($this->color)  ){//empty si viene vacio
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}

?>