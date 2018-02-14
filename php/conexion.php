<?php
    //class conexiones{
       // var $cn = null;
    
        function conectarse()
        {
            $servidor = "localhost";
            $basededatos = "narvaez";
            $usuario = "root";
            $clave = "";
            $cn = mysqli_connect($servidor,$usuario,$clave) or die("Error al conectar a la BD".mysql_error());
            mysqli_select_db($cn, $basededatos) or die("Error al seleccionar la BD");
            mysqli_set_charset($cn,'utf8');
            return $cn;   

            /*$servidor = "bdfullday.mysql.database.azure.com";
            $basededatos = "colegionarvaez";
            $usuario = "adminfullday@bdfullday";
            $clave = "admin456.";
            $cn = mysqli_connect($servidor,$usuario,$clave) or die("Error al conectar a la BD".mysql_error());
            mysqli_select_db($cn, $basededatos) or die("Error al seleccionar la BD");
            return $cn; */  
        }    
   
   /*     function desconectar()     
        {
            mysql_close($cn);
        }
   }*/
    
    //if(conectarse){
    //    echo "Se conecto";
    //}
    //else {
    //    echo "No se pudo";
    //}
?>