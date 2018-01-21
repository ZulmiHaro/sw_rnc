<?php 
/**
* 
*/
include('conexion.php');
$cn= conectarse();
//class usuarios
//{
	//public var $usuario = $_GET['username'];
	//public var $pass = $_GET['password'];
	
	function validarUsuario()
	{
		if(empty($usuario) || empty($pass)){
	    	echo '<script > alert("Existen campos vacios");</script>';
		  		header("Location: ./index.php");
		  		exit();
		}
	    
	    $sql = "select * from usuario where user='".$usuario."' and pass = '".$pass."'";
	    $querylog= mysqli_query($cn,$sql);
	 
	    $totalfilas=mysqli_num_rows($querylog);
	    //echo '<script > alert("'.$sql.'")</script>';
	    

	   	if($totalfilas == 0)
	    {   
	        header("Location: ../index.php");

	    }   
	   	else
	    { 
	   		  session_start();        
	    		$_SESSION['registrado']=true;
	        $_SESSION['usuario']=$usuario;
	    		header("Location: ../main.php");
	   	}
		}
//}

?>