<?php
require_once "RouterClass.php";
require_once 'api/ComentariosController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();

//RUTAS COMENTARIOS

$r->addRoute("comentarios", "GET", "ComentariosController", "getTodosLosComentarios");
$r->addRoute("comentarios/:ID", "GET", "ComentariosController", "getComentariosPorProducto");

$r->addRoute("comentario/:ID", "GET", "ComentariosController", "GetComentario");
$r->addRoute("comentario/:ID", "DELETE", "ComentariosController", "BorrarComentario");
$r->addRoute("comentario/:ID", "POST", "ComentariosController", "AddComentario");
$r->addRoute("comentario/:ID", "PUT", "ComentariosController", "ModificarComentario");




$r->route($resource, $method);

//METODOS
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);   
