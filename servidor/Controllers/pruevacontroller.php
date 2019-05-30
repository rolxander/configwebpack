<?php 
if(isset($_POST["user"])){
$user = new stdClass();
$user->name = $_POST["user"]["name"];
$user->lastname = $_POST["user"]["lastname"];
$user->direccion = $_POST["user"]["direccion"];
$user->sexo = $_POST["user"]["sexo"];
$user->telephone =  $_POST["user"]["telephone"];
$user->cargo = $_POST["user"]["cargo"];
$user  = json_encode($user);
echo $user;
}else if(isset($_POST["login"])){

}
?>  
