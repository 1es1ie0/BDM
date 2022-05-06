<?php
include "registerReporteroConn.classes.php";
class RegisterReporteroContr extends RegisterReporteroConn{
    private $email;
    private $pwd;
    private $confirm;
    private $alias;
    private $names;
    private $lastNames;
    private $phone;
    private $realImage;


    public function __construct($email,$pwd,$confirm, $alias,$names,$lastNames,$phone, $realImage){
        $this->email = $email;
        $this->pwd = $pwd;
        $this->confirm = $confirm;
        $this->alias = $alias;
        $this->names = $names;
        $this->lastNames = $lastNames;
        $this->phone = $phone;
        $this->realImage= $realImage;
    }
  
    public function registerReporteroUser(){
        if( $this->emptyInputs() == false ){
            // echo 'rip en los inputs';
            header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
            exit();//detiene todo el script
        }
        if( $this->matchPwd() == false ){
            header("location: ../index.php?error=matchPwd");
            exit();
        }
        if( $this->checkUser($this->email) == false ){
            header("location: ../index.php?error=userCheck");
            exit();
        }

        $this->registerReportero($this->email, $this->pwd,$this->alias,$this->names,$this->lastNames,$this->phone,$this->realImage);
    }
    private function matchPwd(){
        $result;
        if($this->pwd !== $this->confirm){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function emptyInputs(){
        $result;
        if( empty($this->email) || empty($this->pwd) || empty($this->confirm) || empty($this->alias) || empty($this->names) || empty($this->lastNames) || empty($this->phone) ||empty($this->realImage) ){//empty si viene vacio
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    public static function withEMAIL($email){//todas las instancias comparten el mismo espacio de memoria
        $instance= new self();
    }
}
?>