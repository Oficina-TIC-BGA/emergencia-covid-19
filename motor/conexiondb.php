<?php
/**
Software:        Tu talento es lo que vale
Dependencia:     Despacho alcalde
Desarrolladores: Hugo Andres Pedroza Rodriguez
Versiòn:         1.0
Todos los derechos reservados 2019
Oficina asesora de despacho TIC
**/

/**
Conexión con la base de datos
**/

date_default_timezone_set('America/Bogota');

$SysFecReg  = date('Y-m-d');
$IntFegReg  = strtotime($SysFecReg);
$SysHorReg  = date('H:i:s');
$IntHorReg  = strtotime($SysHorReg);


$servername = "131.110.1.70";
$username   = "root";
$password   = "91078541";
$URLRouWeb  = "http://localhost/";
$Base       = "sisben";


$conexion   = mysql_connect($servername,$username,$password);
$BaseDatos  = mysql_select_db($Base,$conexion);

$conexion   = mysql_query("SET NAMES 'utf8'");



		if ($conexion == false) {

		    echo "<script>alert('! ERROR 001 - CONEXION DB ¡ El sistema no pudo realizar la conexion con el servidor de base de datos, por favor comuniquese con el administrador del sistema para restablecer la conexion con el servidor');</script>"; 
		    echo "<script>window.location.href='$URLRouWeb/';</script>";

		}

		if ($BaseDatos == false) {

		    echo "<script>alert('! ERROR 002 - SELECCION DB ¡ El sistema no pudo realizar la Seleccion de base de datos, por favor comuniquese con el administrador del sistema para restablecer la conexion con el servidor');</script>"; 
		    echo "<script>window.location.href='$URLRouWeb/';</script>";

		}

?>