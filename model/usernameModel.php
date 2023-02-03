<?php 
class usernameModel{
    private $PDO;
    public function __construct(){
        require_once("../config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function insert($name){
        $stament = $this->PDO->prepare("INSERT INTO username VALUES(NULL , :placeholder)");
        $stament->bindParam(":placeholder", $name);
        return ($stament->execute()) ? $this->PDO-lastInsertId()  : false ;
    }

}
?>