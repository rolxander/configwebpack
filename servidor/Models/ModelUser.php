<?php
    require('Model.php');
    class ModelUser extends Model{
        public function gen_chars_no_dup($long=25){  
                $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";  
                mt_srand((double)microtime()*1000000);   
                $i=0;  
                $pass="";
                while ($i != $long) {  
                    $rand=mt_rand() % strlen($chars);  
                    $tmp=$chars[$rand];  
                    $pass=$pass . $tmp;  
                    $chars=str_replace($tmp, "", $chars);  
                    $i++;  
                }  
                return strrev($pass);  
        }
        
        public function createUser($usuario){
            $usuario->codigou = $this->gen_chars_no_dup(10);
            //echo json_encode($usuario);
        }
        public function updateUser(){

        }
        
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