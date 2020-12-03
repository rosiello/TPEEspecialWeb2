<?php

require_once('ApiController.php');
require_once('ComentariosModel.php');
require_once('ApiView.php');

class ComentariosController extends ApiController
{
    //CONSTRUCTOR
    public function __construct(){
        parent::__construct();
        $this->comentariosModel = new ComentariosModel();
        $this->view = new ApiView();
    }

    //TRAE COMENTARIOS CON GET
    public function getTodosLosComentarios($params = null){
        $comentarios = $this->comentariosModel->getTodosLosComentarios();
        $this->view->response($comentarios, 200);
    }
    public function getComentariosPorProducto($params = null){
        $id_producto = $params[':ID'];
        $comentarios = $this->comentariosModel->getComentariosPorProducto($id_producto);
        $this->view->response($comentarios, 200);
    }

    public function GetComentario($params = null){
        $id_comentario = $params[':ID'];
        $comentario = $this->comentariosModel->GetComentario($id_comentario);
        if ($comentario) {
            $this->view->response($comentario, 200);
        } else {
            $this->view->response("Comentario no encontrado", 404);
        }
    }

    // Elimina comentario
    public function BorrarComentario($params = []){
        $id_comentario = $params[':ID'];
        $comentario = $this->comentariosModel->GetComentario($id_comentario);

        if ($comentario) {
            $this->comentariosModel->BorrarComentario($id_comentario);
            $this->view->response("Comentario eliminado", 200);
        } else
            $this->view->response("Error al eliminar comentario", 404);
    }

    // Crea comentario
    public function AddComentario(){
        $body = $this->getData();
        $id_comentario = $this->comentariosModel->AddComentario($body->contenido, $body->valoracion, $body->id_producto, 0);

        if (!empty($id_comentario)) //verifico que exista el comentario
            $this->view->response($this->comentariosModel->GetComentario($id_comentario), 200);
        else
            $this->view->response("Error al agregar comentario", 500);
    }

    // Modifica un comentario
    public function ModificarComentario($params = []){
        $id_comentario = $params[':ID'];
        $comentario = $this->comentariosModel->GetComentario($id_comentario);
        if ($comentario) {
            $body = $this->getData();
            $contenido = $body->contenido;
            $valoracion = $body->valoracion;
            $id_producto = $body->id_producto;
            $id_comentario = $body->id;
            $comentario = $this->comentariosModel->ModificarComentario($contenido, $valoracion, $id_producto, $id_comentario);
            $this->view->response("Comentario modificado", 200);
        } else
            $this->view->response("Error al modificar comentario", 404);
    }
}
