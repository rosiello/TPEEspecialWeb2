<?php
require_once './Controller/UsuarioController.php';
require_once('libs/Smarty.class.php');


class UsuarioVista {
    private $Smarty;
    function __construct(){
        $this->Smarty = new Smarty();
    }

    public function DisplayLogin(){
        $this->Smarty->assign('titulo',"Login");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->display('templates/login.tpl');
    }
    public function ShowUsuarios($usuarios,$usuario){
        $this->Smarty->assign('titulo',"usuarios");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('usuarios',$usuarios);
        $this->Smarty->assign('usuario',$usuario);
        $this->Smarty->display('templates/listaUsuarios.tpl');
    }
    public function ShowEdicionUsuario($edicionUsuario,$usuario){
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('UserEdit',$edicionUsuario);
        $this->Smarty->assign('User',$usuario);
        $this->Smarty->display('templates/edicionUsuario.tpl');
    }

    function ShowListaUsuarios(){
   
        $this->Smarty->assign("titulo", "usuarios lisados");
        $this->Smarty->display("templates/listaUsuarios.tpl");
      }
}