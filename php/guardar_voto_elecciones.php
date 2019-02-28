<?php 
		
		require_once('conexion.php');

		//codigo para obtener la asignatura, el titulo de la tarea, y el tipo de tarea
		$eleccion=$_POST['id_eleccion'];
		$identidad=$_POST['id_identidad'];

		if ($eleccion==1) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",1,0,0,0,0,0,0,0,0,'".date('y-m-d,H:m:s')."')";
					
		}

		if ($eleccion==2) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,1,0,0,0,0,0,0,0,'".date('y-m-d,H:m:s')."')";
		}

		if ($eleccion==3) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,0,1,0,0,0,0,0,0,'".date('y-m-d,H:m:s')."')";
		}

		if ($eleccion==4) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,0,0,1,0,0,0,0,0,'".date('y-m-d,H:m:s')."')";
		}
		if ($eleccion==5) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,0,0,0,1,0,0,0,0,'".date('y-m-d,H:m:s')."')";
		}
		if ($eleccion==6) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,0,0,0,0,1,0,0,0,'".date('y-m-d,H:m:s')."')";
		}
		if ($eleccion==7) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,0,0,0,0,0,1,0,0,'".date('y-m-d,H:m:s')."')";
		}
		if ($eleccion==8) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,0,0,0,0,0,0,1,0,'".date('y-m-d,H:m:s')."')";
		}

		if ($eleccion==0) {
			$sql_votar="insert into elecciones(cuenta,player1,player2,player3,player4,player5,player6,player7,player8,blanco,fecha)
					value(".$identidad.",0,0,0,0,0,0,0,0,1,'".date('y-m-d,H:m:s')."')";
		}
		
		if (mysqli_query($conexion,$sql_votar)) {?>
			

			<div style="float:center"  align="center">
			<strong><legend>GRACIAS POR TU VOTO!!!.</legend></strong>
				<div style="text-align: center;"   align="center" ><a href="../elecciones.php">
				<button type="button" style="text-align: center;" 
						class="btn-lg btn btn-primary">
						<i class="fa fa-home" > Regresar</i>
				</button>
				</a></div>
                        
            </div>
		<?php }; ?>

 