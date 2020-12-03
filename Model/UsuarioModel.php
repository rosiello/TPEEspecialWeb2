<?php

class UsuarioModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=sparring;charset=utf8', 'root', '');
    }

    public function getPassword($usuario){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE usuario = ?");
        $sentencia->execute(array($usuario));
        $password = $sentencia->fetch(PDO::FETCH_OBJ);   
        return $password;
    }

    public function InsertarUsuario($email,$password){
        $sentencia = $this->db->prepare("INSERT INTO usuario(email,password) VALUES(?,?)");
        $sentencia->execute(array($email,$password));
    }

    public function GetUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }

    public function GetUsuario($idUsuario){
        $sentencia = $this->db->prepare("SELECT * FROM usuario where id=?");
        $sentencia->execute(array($idUsuario));
        $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuario;
    }

    public function BorrarUsuario($idUsuario){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id=?");
        $sentencia->execute(array($idUsuario));
    }

    public function GuardarUsuario($rango, $idUsuario){
        $sentencia = $this->db->prepare( "UPDATE usuario SET rango = ? where id=?");
        $sentencia->execute(array($rango, $idUsuario));
    }
 }
