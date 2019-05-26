<?php 

$conexion = new mysqli();
abstract class Model{
    private static $host = "localhost";
    private  static $user = "root";
    private  static $password = "";
    private  static $db_name = "netwart";
    private $conexion;
    protected $query = "";
    private $rows = array();
    private function db_open(){
        $this->conexion = new mysqli(self::$host,self::$user,self::$password,self::$db_name);
    }
    private function db_close(){
        $this->conexion->close();
    }
    protected function get_data(){
        $this->db_open();
        $result = $this->conexion->query($this->query);
        while($this->rows[] = $result->fetch_assoc() );
        $result->close();
        $this->db_close();
        array_pop($this->rows);
        return $this->rows;
    } 


}
?>