<?php 

//============================================================
			//CONEXION GENERAL DEL SISTEMA//
//============================================================
	
	$host="localhost";
    $user="id12785253_user1";
    $pass="sistemas20";
    $baseDatos="id12785253_votaciones";

    $conexion = mysqli_connect("localhost", "id12785253_user1", "sistemas20", "id12785253_votaciones");
    
    if (!$conexion) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    

 ?>