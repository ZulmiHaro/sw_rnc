<?php
 	include('conexion.php');
	$cn= conectarse();
  $msj;
	$usuario = $_GET['usuario'];
	$pass = $_GET['pass'];

	if(empty($usuario) || empty($pass)){
    echo '<script > alert("Existen campos vacios");</script>';
	  header("Location: ../index.php");
	  exit();
	}
    
    $sql = "SELECT `idUsuario`,`pass`,`user`,empleado.nombres, concat(empleado.email,empleado.dominioEmail) as Email,rol.nombreRol FROM `usuario` 
      INNER JOIN rol on usuario.idRol = rol.idRol
      INNER JOIN empleado on usuario.idEmpleado = empleado.idEmpleado
      where user='".$usuario."' and pass = '".$pass."'";
    $querylog= mysqli_query($cn,$sql);
    //$.parseJSON($querylog);
 
    //$totalfilas=mysqli_num_rows($querylog);
    $row=mysqli_fetch_array($querylog);
    echo json_encode($row);
    //echo '<script > alert("'.$sql.'")</script>';
    
    //if($totalfilas == 0)
   	if(empty($row))
    {   
        //$error = true;
        header("Location: ../index.php");
        //$msj = swal("Error!","Datos Incorrectos","error"); 

    }   
   	else
    { 
   		  session_start();        
    		$_SESSION['registrado']=true;
        $_SESSION['usuario']=$usuario;
        //$_SESSION['email']= 
    		header("Location: ../main.php");
        //echo 'ver: '. $sql;
   	}	
?>
