<?php 
require('../Models/ModelUser.php');
class UserController{
    public function login($usuario){
        $modelo_Usuario = new ModelUser();
        $respuesta = new stdClass();
        $respuesta->Status=  $modelo_Usuario->Login($usuario);;
        $respuesta = json_encode($respuesta);
        echo $respuesta;
    }
    public function register($usuario){

    }
    public function resolveOperations($variable){
        if(isset($_POST['login'])){
            $usuario = new stdClass();
            $usuario->nick = $_POST["login"]["nick"];
            $usuario->password = $_POST["login"]["password"];
            $this->login($usuario);

        }else if(isset($_POST["user"])){
            echo "estas intentado registrar";
        }
    }
}
$controller_Usuario = new UserController();
$controller_Usuario->resolveOperations($_POST);




?>