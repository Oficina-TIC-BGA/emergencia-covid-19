<?php


/**
 * 
 Clase validar para crear objetos de la tabla personas
 */
require_once ("conexiondb.php");
class Validar{

	protected $PerNumDoc;
	protected $PerNumTel;
	protected $PerEmail;
	protected $PerDirRes;
	
	public function __construct($Parametros){

		$this->PerNumDoc = $Parametros["VD00"];
		$this->PerNumTel = $Parametros["GD01"];
		$this->PerEmail  = $Parametros["GD02"];
		$this->PerDirRes = $Parametros["GD03"];
		
	}

	#Funcion para validar los datos de la persona
	public function Validar(){
		$campos="SELECT P.PerNumDoc,
						P.PerPriNom,
						P.PerSegNom,
						P.PerPriApe,
						P.PerSegApe,
						P.PerDirRes,
						P.PerNumTel,
						P.PerEmail,
						P.Latitud,
						P.Longitud FROM personas as P WHERE P.PerNumDoc='$this->PerNumDoc'";
						$querycampos=mysql_query($campos);
						$row=mysql_num_rows($querycampos);
						if($row==true){
							while($rowper=mysql_fetch_array($row)){
								require_once("../actualizar_datos.php")
							}
						}else{
							echo "<script>alert('Usted no está registrado en la base de datos de SISBEN, por favor verifique su documento e intente nuevamente');</script>";
							echo "<script>window.location.href='../actualizar_datos.php';</script>";
						}
						

		echo "<script>alert('Entre a la funcion validar');</script>";
        echo "<script>window.location.href='../actualizar_datos.php';</script>";

	}

	#Funcion para actualizar datos de la persona en la DB
	public function Actualizar(){

		$campos = "UPDATE `personas` SET 	`PerDirRes`='$this->PerDirRes',
                                 			`PerEmail`='$this->PerEmail',
                                			`PerNumTel`='$this->PerNumTel'
                                  			WHERE PerNumDoc=$this->PerNumDoc";

	$QueryCampos = mysql_query($campos);

if($QueryCampos==true){
    
    echo "<script>alert('Entre a la funcion Actualizar');</script>";
	echo "<script>window.location.href='../actualizar_datos.php';</script>";
	
}else{
    
    echo "<script>alert('Entre a la funcion Actualizar');</script>";
    echo "<script>window.location.href='../actualizar_datos.php';</script>";
}
	}
}

?>