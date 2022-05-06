<?php
include "porfileConn.classes.php";
class PorfileContr extends PorfileConn{
    private $emailLogged;
    private $email;
    private $pwd;
    private $confirm;
    private $alias;
    private $names;
    private $lastNames;
    private $phone;


    public function __construct($emailLogged,$email,$pwd,$confirm, $alias,$names,$lastNames,$phone){
        $this->emailLogged=$emailLogged;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->confirm = $confirm;
        $this->alias = $alias;
        $this->names = $names;
        $this->lastNames = $lastNames;
        $this->phone = $phone;
        $this->realImage= $realImage;
    }
  
    public function modifyUser(){
        if( $this->emptyInputs() == false ){
            // echo 'rip en los inputs';
            header("location: ../index.php?error=emptyInput");// header modifica el httpRequest y reedirecciona al index
            exit();//detiene todo el script
        }
        if( $this->matchPwd() == false ){
            header("location: ../index.php?error=matchPwd");
            exit();
        }
        /*if( $this->checkUser($this->email) == false ){
            header("location: ../index.php?error=userCheck");
            exit();
        }*/

        $this->update($this->emailLogged,$this->email, $this->pwd,$this->names,$this->lastNames,$this->alias,$this->phone);
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
        if( empty($this->email) || empty($this->pwd) || empty($this->confirm) || empty($this->alias) || empty($this->names) || empty($this->lastNames) || empty($this->phone) ||empty($this->emailLogged) ){//empty si viene vacio
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