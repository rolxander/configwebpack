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
// function gen_chars_no_dup($long=25)  
// {  
//     $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";  
//     mt_srand((double)microtime()*1000000);   
//     $i=0;  
//     $pass="";
//     while ($i != $long) {  
//         $rand=mt_rand() % strlen($chars);  
//         $tmp=$chars[$rand];  
//         $pass=$pass . $tmp;  
//         $chars=str_replace($tmp, "", $chars);  
//         $i++;  
//     }  
//     return strrev($pass);  
// }
// $valor =  gen_chars_no_dup();
// echo $valor; 

function gen_chars_no_dup($long=25)  
{  
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
$array = array();
for($i=0 ;$i<10 ;$i++){
    
    $valor = gen_chars_no_dup(10);
    echo $valor."<br>";
}

// $array = [1,2,3,4,5];
// foreach($array as $clave=>$valor){
//     echo $valor . $clave;
// }
?>  
