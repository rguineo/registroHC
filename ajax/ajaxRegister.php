<?php

include_once '../controllers/register.controller.php';
include_once '../models/register.model.php';


Class ajaxRegister{
    public $_name;
    public $_last;
    public $_address;
    public $_email;
    public $_phone;

    public function ajaxNewRegister(){
        $datos = array(  "nameusr"=>$this->_name,
                        "lastusr"=>$this->_last,
                        "addressusr"=>$this->_address,
                        "emailusr"=>$this->_email,
                        "phoneusr"=>$this->_phone);
        $reply = ctrRegister::ctrNewRegister($datos);
        echo $reply;
    }

}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "newRegister"){
    $newRegister = (new ajaxRegister);
    $newRegister -> _name = $_POST["name"];
    $newRegister -> _last = $_POST["last"];
    $newRegister -> _address = $_POST["address"];
    $newRegister -> _email = $_POST["email"];
    $newRegister -> _phone = $_POST["phone"];
    $newRegister -> ajaxNewRegister();
}


?>