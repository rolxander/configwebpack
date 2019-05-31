<?php 
// if(isset($_POST["user"])){
// $user = new stdClass();
// $user->name = $_POST["user"]["name"];
// $user->lastname = $_POST["user"]["lastname"];
// $user->direccion = $_POST["user"]["direccion"];
// $user->sexo = $_POST["user"]["sexo"];
// $user->telephone =  $_POST["user"]["telephone"];
// $user->cargo = $_POST["user"]["cargo"];
// $user  = json_encode($user);
// echo $user;
// }else if(isset($_POST["login"])){

// }
function gen_chars_no_dup($long=25)  
{  
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";  
    mt_srand((double)microtime()*1000000);   
    $i=0;  
    $pass = "";
    while ($i != $long) {  
        $rand=mt_rand() % strlen($chars);  
        $tmp=$chars[$rand];  
        $pass=$pass . $tmp;  
        $chars=str_replace($tmp, "", $chars);  
        $i++;  
    }  
    return strrev($pass);  
}
$valor =  gen_chars_no_dup();
echo $valor;  
?>  
