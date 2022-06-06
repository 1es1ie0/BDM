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

    public function __construct(){
        
    }
    public function fillWith($titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id){
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
    public static function with( $titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id ) {
        $instance = new self();
        $instance->fillWith( $titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id );
        return $instance;
    }

    public function registerNews(){

        
        if( $this->emptyInputs() == false ){
            // echo 'rip en los inputs';
            header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
            exit();//detiene todo el script
        }

        $this->register($this->titulo, $this->pais,$this->colonia,$this->ciudad,$this->descripcion,$this->keyword,$this->firma,$this->text,$this->fecha,$this->id);

    }
    public function registerNewsTerminada(){

        
        if( $this->emptyInputs() == false ){
            // echo 'rip en los inputs';
            header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
            exit();//detiene todo el script
        }

        $this->registerTerminada($this->titulo, $this->pais,$this->colonia,$this->ciudad,$this->descripcion,$this->keyword,$this->firma,$this->text,$this->fecha,$this->id);

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
    public  function withImage($imagen,$newsid,$id){//todas las instancias comparten el mismo espacio de memoria
        $instance = new self();
        $instance->fillWithImage( $imagen,$newsid,$id );
        return $instance;
    }
    public  function fillWithImage($imagen,$newsid,$id){//todas las instancias comparten el mismo espacio de memoria
        
        $this->imagen = $imagen;
        $this->newsid = $newsid;
        $this->id = $id;
    }

    public function uploadImage(){

        $this->images($this->imagen,$this->newsid,$this->id);

    }

}
class NewsContrUpdate extends NewsConn{
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
    private $newsid;
   

    public function __construct(){
        
    }
    public function fillWith($titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id,$newsid){
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
        $this->newsid=$newsid;
    }
    public static function with( $titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id,$newsid) {
        $instance = new self();
        $instance->fillWith( $titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id,$newsid );
        return $instance;
    }

    public function updateNews(){

        
        if( $this->emptyInputs() == false ){
            // echo 'rip en los inputs';
            header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
            exit();//detiene todo el script
        }

        $this->update($this->titulo, $this->pais,$this->colonia,$this->ciudad,$this->descripcion,$this->keyword,$this->firma,$this->text,$this->fecha,$this->id,$this->newsid=$newsid);

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
}

class NewsConnId extends NewsConn{
    private $newsID;
    

    public function __construct($newsID){
        $this->newsID = $newsID;
    }

    public function withNews(){
        $this->getnewsID($this->newsID);
    }
    public function Aprobar(){
        $this->ReporteroApruebanewsID($this->newsID);
    }
    public function AprobarEditor(){
        $this->EditorApruebanewsID($this->newsID);
    }
    public function DetalleDash(){
        $this->getNewsID_DASH($this->newsID);
    }

    public function delNews(){
        $this->deleteNew($this->newsID);
    }
}
class NewsSearch extends NewsConn{
    private $titulo, $descripcion,$keyword,$fechaInicio,$fechaFinal;
    

    public function __construct($titulo,$descripcion,$keyword,$fechaInicio,$fechaFinal){
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->keyword = $keyword;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFinal = $fechaFinal;
    }

    public function FlitrarNews(){
        
        $this->SEARCHNew($this->doNull($this->titulo),$this->doNull($this->descripcion),$this->doNull($this->keyword),$this->doNull($this->fechaInicio),$this->doNull($this->fechaFinal));
    }
    private function doNull($var){
        if(empty($var)){
            $var=null;
            return $var;
        }
        else{
            return $var;
        }
    }
   
    
}
class NewsCommentAdmin extends NewsConn{
    private $newsID, $commentText,$userId;
    

    public function __construct($newsID,$commentText,$userId){
        $this->newsID = $newsID;
        $this->commentText = $commentText;
        $this->userId = $userId;
    }

    public function commentAdminNews(){
        
        $this->insertCommentAdmin($this->newsID,$this->commentText,$this->userId);
    }

    
}
?>