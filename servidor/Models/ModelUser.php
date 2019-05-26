<?php
    require('Model.php');
    class ModelUser extends Model{
     
     public function Login($usuario){
         
         $this->query = "SELECT * FROM usuario WHERE nick = '$usuario->nick' and password = '$usuario->password'";
    
         if(sizeof($this->get_data())>0){
             return "Encontrado";
             

         }
         else{
             return  "No registrado En la base de datos";
         }
         
     }  
    }
// $usuario = new stdClass();
// $usuario->nick = "rolxander";
// $usuario->password = "123456789";
// $prueva  = new ModelUser();
// $prueva->Login($usuario);
?>