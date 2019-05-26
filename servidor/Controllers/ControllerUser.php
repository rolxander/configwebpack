<?php 
require('../Models/ModelUser.php');
$usuario = new stdClass();
$usuario->nick = "rolxander";
$usuario->password = "1234567891";
class UserController{
    public function login($usuario){
        $modelo_Usuario = new ModelUser();
        $respuesta = new stdClass();
        $respuesta->Status=  $modelo_Usuario->Login($usuario);;
        $respuesta = json_encode($respuesta);
        echo $respuesta;
    }
}
$controller_Usuario = new UserController();
$controller_Usuario->Login($usuario);

?>