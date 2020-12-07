<?php


class ComentariosModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=sparring;charset=utf8', 'root', '');
    }


	public function getTodosLosComentarios(){
        $sentencia = $this->db->prepare("SELECT C.*, P.descripcion as descripcionProducto from comentario C join producto P on C.id_producto = P.id");
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }	

    public function AddComentario($contenido,$valoracion,$id_producto,$id_usuario){
        $sentencia = $this->db->prepare("INSERT INTO comentario (contenido,valoracion,id_producto,id_usuario) VALUES(?,?,?,?)");
        $sentencia->execute(array($contenido,$valoracion,$id_producto,$id_usuario));
        return $sentencia->rowCount();
    }

    public function getComentariosPorProducto($id_producto){
        $sentencia = $this->db->prepare( "SELECT * FROM comentario WHERE id_producto = ?");
        $sentencia->execute(array($id_producto));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }	
        
    
    //EL GETCOMENTARIO AUXILIAR DE DELETE Y PUT
    public function GetComentario($id_comentario){
        $sentencia = $this->db->prepare( "SELECT * FROM comentario WHERE id=?");
        $sentencia->execute(array($id_comentario));
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }
    
    public function BorrarComentario($id_comentario){
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id=?");
        $sentencia->execute(array($id_comentario));
    }

    public function ModificarComentario($id, $contenido,$valoracion){
        $sentencia = $this->db->prepare( "UPDATE comentario SET contenido = ?, valoracion = ? WHERE id=?");
        $sentencia->execute(array($contenido,$valoracion,$id));
    }
 
}