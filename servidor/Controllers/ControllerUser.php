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
        $modelo_Usuario = new ModelUser();
        $modelo_Usuario->createUser($usuario);
    }
    public function resolveOperations($variable){
        if(isset($_POST['login'])){
            $usuario = new stdClass();
            $usuario->nick = $_POST["login"]["nick"];
            $usuario->password = $_POST["login"]["password"];
            $this->login($usuario);

        }else if(isset($_POST["user"])){
            $usuario = new stdClass();
            $usuario->name = $_POST["user"]["name"];
            $usuario->lastname = $_POST["user"]["lastname"];
            $usuario->sexo  = $_POST["user"]["sexo"];
            $usuario->direccion  = $_POST["user"]["direccion"]; 
            $usuario->nci  = $_POST["user"]["nci"];
            $usuario->telefono  = $_POST["user"]["telephone"];
            $usuario->cargo  = $_POST["user"]["cargo"];
            $usuario->nick  = $_POST["user"]["nick"];
            $usuario->password  = $_POST["user"]["password"];
            $this->register($usuario);
        }
    }
    
}
$controller_Usuario = new UserController();
$controller_Usuario->resolveOperations($_POST);




?>