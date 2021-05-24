<?php 

Class ctrRegister{

    public function ctrNewRegister($datos){
        $tabla = "usuario";
        $reply = mdlRegister::mdlNewRegister($tabla, $datos);
        return $reply;
    }

}


?>