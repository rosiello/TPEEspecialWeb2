<?php

require_once 'ApiController.php';
require_once './api/ComentariosModel.php';


class ComentariosController extends ApiController
{
    //CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->comentariosModel = new ComentariosModel();
        $this->view = new ApiView();
    }

    //TRAE TODOS LOS COMENTARIOS CON GET
    public function getTodosLosComentarios($params = null)
    {
        $comentarios = $this->comentariosModel->getTodosLosComentarios();
        $this->view->response($comentarios, 200);
    }

    // CREA COMENTARIO CON POST
    public function AddComentario($params = null)
    {
        $body = $this->getData();
        if(!empty($body->contenido)&& !empty($body->valoracion)&& !empty($body->id_producto)&& !empty($body->id_usuario)){
            if($this->comentariosModel->AddComentario($body->contenido, $body->valoracion, $body->id_producto, $body->id_usuario)!=0)
            $this->view->response("El comentario fue realizado", 200);
            else
                $this->view->response("Error al agregar comentario", 500);
        }
        else
        $this->view->response("Algun campo esta vacio", 500);
    }
    

    //MUESTRA COMENTARIOS SEGUN ID DEL PRODUCTO
    public function getComentariosPorProducto($params = null)
    {
        $id_producto = $params[':ID'];
        $comentarios = $this->comentariosModel->getComentariosPorProducto($id_producto);
        $this->view->response($comentarios, 200);
    }



    //Get auxiliar para llamar al comentario en el DELETE y PUT a continuacion
    public function GetComentario($id_comentario)
    {

        $comentario = $this->comentariosModel->GetComentario($id_comentario);
        if ($comentario) {
            $this->view->response($comentario, 200);
        } else {
            $this->view->response("Comentario no encontrado", 404);
        }
    }

    // BORRA COMENTARIO POR ID
    public function BorrarComentario($params = null)
    {
        $id_comentario = $params[':ID'];
        $comentario = $this->comentariosModel->GetComentario($id_comentario);

        if ($comentario) {
            $this->comentariosModel->BorrarComentario($id_comentario);
            $this->view->response("Comentario eliminado", 200);
        } else
            $this->view->response("Error al eliminar comentario", 404);
    }

    // MODIFICA UN COMENTARIO
    public function ModificarComentario($params = null)
    {
        $id_comentario = $params[':ID'];
        $comentario = $this->comentariosModel->GetComentario($id_comentario);
        if ($comentario) {
            $body = $this->getData();
            $contenido = $body->contenido;
            $valoracion = $body->valoracion;
            $comentario = $this->comentariosModel->ModificarComentario($id_comentario, $contenido, $valoracion);
            $this->view->response("Comentario modificado", 200);
        } else
            $this->view->response("Error al modificar comentario", 404);
    }
}
