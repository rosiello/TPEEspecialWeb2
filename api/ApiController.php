<?php 

require_once 'ComentariosModel.php';

abstract class ApiController {
    protected $comentariosModel;
    protected $view;
    protected $data; 

    public function __construct() {
        $this->data = file_get_contents("php://input"); 
        $this->ComentariosModel = new ComentariosModel();
        $this->view = new ApiView();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}

