<?php
require_once "./View/SignView.php";
require_once "./Model/UsuarioModel.php";
require_once "./View/ProductosView.php";

class SignController {

    private $model;
    private $view;
    private $productosView;

	function __construct(){
        $this->view = new SignView();
        $this->model = new UsuarioModel();
        $this->productosView = new ProductosView();
    }

    public function SignUp(){
        $this->view->DisplaySign();
    }
    public function RegistrarUsuario(){
        $email= $_POST['email'];
        $password= $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $this->model->InsertarUsuario($email,$password);
        $this->iniciarSesion();
    }

    public function iniciarSesion(){
        $password = $_POST['password'];
        $usuario = $this->model->getPassword($_POST['email']);
        if (isset($email) && password_verify($password, $usuario->password)){
            var_dump(password_verify($password, $usuario->password));
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
}