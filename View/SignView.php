<?php
require_once './Controller/UsuarioController.php';
require_once('libs/Smarty.class.php');


class SignView {
    private $Smarty;
    function __construct(){
        $this->Smarty = new Smarty();
    }
    public function DisplaySign(){

        $this->Smarty->assign('titulo',"Registro");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->display('templates/sign.tpl');
    }
}
?>