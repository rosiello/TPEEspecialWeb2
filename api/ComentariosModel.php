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

    public function getComentariosPorProducto($id_producto){
        $sentencia = $this->db->prepare( "SELECT * FROM comentario WHERE id_producto = ?");
        $sentencia->execute(array($id_producto));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }	
    	
    public function GetComentario($id){
        $sentencia = $this->db->prepare( "SELECT C.*, P.descripcion as descripcionProducto from comentario C join producto P on C.id_producto = P.id WHERE id=?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }
    
    public function AddComentario($contenido,$valoracion,$id_producto){
        $sentencia = $this->db->prepare("INSERT INTO comentario(comentario,valoracion,id_producto) VALUES(?,?,?)");
        $sentencia->execute(array($contenido,$valoracion,$id_producto));
    }

    public function BorrarComentario($id){
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id=?");
        $sentencia->execute(array($id));
    }

    public function ModificarComentario($contenido,$valoracion,$id_producto,$id_comentario){
        $sentencia = $this->db->prepare( "UPDATE comentario SET contenido = ?, valoracion = ? WHERE id=?");
        $sentencia->execute(array($contenido,$valoracion,$id_producto,$id_comentario));
    }
   

}