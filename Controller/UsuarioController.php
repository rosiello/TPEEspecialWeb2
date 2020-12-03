<?php
require_once "./Model/UsuarioModel.php";
require_once "./View/UsuarioVista.php";
require_once "./Controller/SignController.php";
require_once "./Controller/ProductosController.php";
require_once "./View/ProductosView.php";


class UsuarioController {
    private $model;
    private $view;
    private $controller;

	function __construct(){
        $this->model = new UsuarioModel();
        $this->view = new UsuarioVista();
        $this->controller = new ProductosController();
        $this->productosView = new ProductosView();
    }

    public function login(){
        $this->view->DisplayLogin();
    }

    public function deslogueo(){
        session_start();
        session_destroy();
        header("Location: " . URL_LOGIN);
    }

    public function iniciarSesion(){
        $password = $_POST['password'];
        $usuario = $this->model->getPassword($_POST['usuario']);
        if (isset($email) && password_verify($password, $usuario->password)){
            //var_dump(password_verify($password, $usuario->password));
            session_start();
            $_SESSION['email'] = $usuario->email;
            $_SESSION['id'] = $usuario->id;
            if ($usuario->rango==1) {
                $this->productosView->ShowProductos();
            }
            elseif($usuario->rango==0) {
                $this->productosView->ShowProductos();
            }
        }   
        else{
            $this->productosView->ShowComunidad();
        }
    }

    public function MostrarUsuarios(){
        $this->controller->VerificarSesion();
        $idUsuario = $_SESSION['id'];
        $usuario = $this->model->GetUsuario($idUsuario);
        $usuarios = $this->model->GetUsuarios();
        $this->view->ShowUsuarios($usuarios,$usuario);
    }

    public function BorrarUsuario($idUsuario){
        $this->controller->VerificarSesion();
        $this->model->BorrarUsuario($idUsuario);
        header("Location: " . BASE_URL . "/usuarios");
    }

    public function EditarUsuario($id){
        $this->controller->VerificarSesion();
        $idUsuario = $_SESSION['id'];
        $usuario = $this->model->GetUsuario($idUsuario);
        $edicionUsuario = $this->model->GetUsuarios($id);
        $this->view->ShowEdicionUsuario($edicionUsuario,$usuario);
    }
    
    public function GuardarUsuario(){
        $this->controller->VerificarSesion();
        $idUsuario = $_POST["id"];
        $rango = $_POST["rango"];
        $this->model->GuardarUsuario($rango, $idUsuario);
        header("Location: " . BASE_URL . "usuarios");
    }
   
   

}
        
    

