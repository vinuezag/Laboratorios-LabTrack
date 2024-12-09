<?php 
require_once "global.php";

class Cls_DataConnection
   {
    function Fn_getConnect()
     {
        if (!($conexion1=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME)))
        {
           echo "Error Conectando la base de Datos";
           exit();
        }
        return $conexion1;
     }
  }

if (!function_exists('ejecutarConsultaSP')) {
	function ejecutarConsultaSP($sql){ 
			$Fn = new Cls_DataConnection();
			$Cn = $Fn -> Fn_getConnect();
			$query= $Cn -> query($sql);
			$Cn -> close();
			return $query;
			
		}
	  
}

$conexion=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');


//muestra posible error en la conexion
if (mysqli_connect_errno()) {
	printf("Falló en la conexion con la base de datos: %s\n",mysqli_connect_error());
	exit();
}

if (!function_exists('ejecutarConsulta')) {
	function ejecutarConsulta($sql){ 
		global $conexion;
	    $query=$conexion->query($sql);
		return $query;
	}
	
	function ejecutarConsultaSimpleFila($sql){
		global $conexion;
		$query=$conexion->query($sql);
		$row=$query->fetch_row();
		return $row;
		}
	function ejecutarConsulta_retornarID($sql){
		global $conexion;
		$query=$conexion->query($sql);
		return $conexion->insert_id;
	}
	
	function limpiarCadena($str){
		global $conexion;
		$str=mysqli_real_escape_string($conexion,trim($str));
		return htmlspecialchars($str);
	}

}

 ?>