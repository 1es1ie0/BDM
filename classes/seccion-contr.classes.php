<?php
include ('seccionConn.classes.php');
class SeccionContr extends SeccionConn{
    private $titulo;
    private $orden;
    private $color;

    public function __construct($titulo,$orden,$color){
        $this->titulo = $titulo;
        $this->orden = $orden;
        $this->color = $color;
    }

    public function registerSection(){
        
            if( $this->emptyInputs() == false ){
                // echo 'rip en los inputs';
                header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
                exit();//detiene todo el script
            }
           
            $this->register($this->titulo, $this->orden,$this->color);
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