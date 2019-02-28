<?php 

//============================================================
			//CONEXION GENERAL DEL SISTEMA//
//============================================================
	
	$host="localhost";
    $user="id8844379_user1";
    $pass="sistemas20";
    $baseDatos="id8844379_votaciones";

    $conexion = mysqli_connect("localhost", "id8844379_user1", "sistemas20", "id8844379_votaciones");
    
    if (!$conexion) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    

 ?>