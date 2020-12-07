<?php 
require_once './api/ApiView.php';


abstract class ApiController {

    protected $view;
    protected $data; 

    public function __construct() {
        $this->data = file_get_contents("php://input"); 
  
        $this->view = new ApiView();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}

