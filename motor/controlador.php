<?php
/**
Software:        Tu talento es lo que vale
Dependencia:     Despacho alcalde
Desarrolladores: Hugo Andres Pedroza Rodriguez
Versiòn:         1.0
Todos los derechos reservados 2019
Oficina asesora de despacho OATIC
**/

/**
Controlador que me permite realizar el llamado de clases y crear objetos de la misma segun las funciones que se requiera utilizar
**/

if(isset($_POST["Boton"])){
	
	$Archivo = $_POST["Archivo"];
	$Clase   = $_POST["Clase"];
	$Funcion = $_POST["Funcion"];

	include_once("../_clases/".$Archivo.".php");
	$Objeto = new $Clase($_POST);
	$Objeto->$Funcion();

}elseif(isset($_GET["Parametro"])){
	
	$Archivo = $_GET["A"];
	$Clase   = $_GET["C"];
	$Funcion = $_GET["F"];

	include_once("../_clases/".$Archivo.".php");
	$Objeto = new $Clase($_GET);
	$Objeto->$Funcion();
}
?>