<?php
include ('newsConn.classes.php');
class NewsContr extends NewsConn{
    private $titulo;
    private $pais;
    private $colonia;
    private $ciudad;
    private $descripcion;
    private $keyword;
    private $firma;
    private $text;
    private $fecha;
    private $id;
    private $imagen;

    public function __construct($titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id){
        $this->titulo = $titulo;
        $this->pais = $pais;
        $this->colonia = $colonia;
        $this->ciudad = $ciudad;
        $this->descripcion = $descripcion;
        $this->keyword = $keyword;
        $this->firma = $firma;
        $this->text= $text;
        $this->fecha= $fecha;
        $this->id= $id;
    }

    public function registerNews(){

        
        if( $this->emptyInputs() == false ){
            // echo 'rip en los inputs';
            header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
            exit();//detiene todo el script
        }

        $this->register($this->titulo, $this->pais,$this->colonia,$this->ciudad,$this->descripcion,$this->keyword,$this->firma,$this->text,$this->fecha,$this->id);

    }
    private function emptyInputs(){
        
        $result;
        if( empty($this->titulo) || empty($this->pais) || empty($this->colonia) || empty($this->ciudad) || empty($this->descripcion) || empty($this->keyword) || empty($this->firma) ||empty($this->text) ||empty($this->fecha) ||empty($this->id)){//empty si viene vacio
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    public static function withImage($imagen,$newsid,$id){//todas las instancias comparten el mismo espacio de memoria
        //$instance= new self();
       
        $this->images($this->$imagen,$this->$newsid,$this->$id);
    }
}
?>