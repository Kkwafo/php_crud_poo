<?php 
require_once("./../model/usernameModel.php");
class usernameController{
    private $model;
    public function __construct()
    {
        
        $this->model = new usernameModel();

    }
    public function save($name){
        $id = $this->model->insert($name);
        return ($id!=false) ? header("Location: show.php?id=".$id) : header("Location:create.php");
    }
}?>