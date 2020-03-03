<meta http-equiv="refresh" content="15" />

	 
<?php 
         require_once('php/conexion.php');
        //obtener el total de votos

		$sql_total="select count(*) as total from elecciones";
        $res_total=mysqli_query($conexion,$sql_total);
		$fila=mysqli_fetch_array($res_total); 

		//obtener el total de votos del candidato 1
		$sql_total1="select Sum(player1) as total1 from elecciones";
		$res_total1=mysqli_query($conexion,$sql_total1);
		$fila1=mysqli_fetch_array($res_total1);

		//obtener el total de votos del player2
		$sql_total2="select Sum(player2) as total2 from elecciones";
		$res_total2=mysqli_query($conexion,$sql_total2);
		$fila2=mysqli_fetch_array($res_total2);

		//obtener el total de votos del player3
		$sql_total3="select Sum(player3) as total3 from elecciones";
		$res_total3=mysqli_query($conexion,$sql_total3);
		$fila3=mysqli_fetch_array($res_total3);

		//obtener el total de votos del player4
		$sql_total4="select Sum(player4) as total4 from elecciones";
		$res_total4=mysqli_query($conexion,$sql_total4);
        $fila4=mysqli_fetch_array($res_total4);
        
        //obtener el total de votos del player4
		$sql_total5="select Sum(player5) as total5 from elecciones";
		$res_total5=mysqli_query($conexion,$sql_total5);
        $fila5=mysqli_fetch_array($res_total5);
        
        //obtener el total de votos del player4
		$sql_total6="select Sum(player6) as total6 from elecciones";
		$res_total6=mysqli_query($conexion,$sql_total6);
        $fila6=mysqli_fetch_array($res_total6);
        
        //obtener el total de votos del player4
		$sql_total7="select Sum(player7) as total7 from elecciones";
		$res_total7=mysqli_query($conexion,$sql_total7);
        $fila7=mysqli_fetch_array($res_total7);
        
        //obtener el total de votos del player4
		$sql_total8="select Sum(player8) as total8 from elecciones";
		$res_total8=mysqli_query($conexion,$sql_total8);
		$fila8=mysqli_fetch_array($res_total8);

		//obtener el total de votos blancos
		$sql_total_0="select Sum(blanco) as total0 from elecciones";
		$res_total_0=mysqli_query($conexion,$sql_total_0);
		$fila0=mysqli_fetch_array($res_total_0);
		
		if ($fila['total']==0) { //impedir divicion por cero
			$fila['total']=1;
		}
 ?>

<!doctype html>
            <html class="no-js" lang="">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>Resultados Elecciones | Estudiantiles</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Favicon -->
                <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
                <!-- Normalize CSS -->
                <link rel="stylesheet" href="css/normalize.css">
                <!-- Main CSS -->
                <link rel="stylesheet" href="css/main.css">
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <!-- Animate CSS -->
                <link rel="stylesheet" href="css/animate.min.css">
                <!-- Font-awesome CSS-->
                <link rel="stylesheet" href="css/font-awesome.min.css">
            
                <!-- Magic popup CSS -->
                <link rel="stylesheet" href="css/magnific-popup.css">

                <!-- Custom CSS -->
                <link rel="stylesheet" href="style.css">
                <!-- Modernizr Js -->
                <script src="js/modernizr-2.8.3.min.js"></script>
            </head>

            <body>
                <!--[if lt IE 8]>
                        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                    <![endif]-->
                <!-- Add your site or application content here -->
                <div id="wrapper">
                
                    <!-- Inner Page Banner Area Start Here -->
                    <div class="inner-page-banner-area" style="background-image: url('img/voto.jpg');">
                        <div class="container">
                            <div class="pagination-area">
                                
                                <ul>
                                    <li><h3>.</h3></li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>

    <div class="courses-page-area2">
        <div class="container" id="pagina" style="text-align:center">
                <h4>Resultados de las Votaciones Estudiantiles 2020.</h4>
	            <h4>Total de Votos Realizado: <?php echo $fila['total']; ?></h4>
            <div class="row featuredContainer">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 diploma cse english">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div>
                                <img class="img-responsive" src="img/candidatos/katherine.png" >
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#">KATHERINE HERNANDEZ</a></h3>
                                <p class="item-content">S&Eacute;PTIMO GRADO A</p>
                                <button id ="btn_1" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila1['total1'] . " de ". $fila['total'] . " (" .  Round( (($fila1['total1']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cse mathematics medical">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div >
                                <img class="img-responsive" src="img/candidatos/sofia_castillo.png" >
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#">SOF&Iacute;A CASTILLO</a></h3>
                                <p class="item-content">OCTAVO GRADO B</p>
                                
                                <button id ="btn_2" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila2['total2'] . " de ". $fila['total'] . " (" .  Round( (($fila2['total2']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 diploma mathematics">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div >
                                <img class="img-responsive" src="img/candidatos/villela2.png" alt="courses">
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#">C&Eacute;SAR VILLELA</a></h3>
                                <p class="item-content">NOVENO GRADO B</p>
                                <button id ="btn_3" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila3['total3'] . " de ". $fila['total'] . " (" .  Round( (($fila3['total3']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cse english medical">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div >
                                <img class="img-responsive" src="img/candidatos/toscano2.png" alt="courses">
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#">NATALIE TOSCANO</a></h3>
                                <p class="item-content">NOVENO GRADO A.</p>
                                <button id ="btn_4" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila4['total4'] . " de ". $fila['total'] . " (" .  Round( (($fila4['total4']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row featuredContainer">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 diploma english">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div >
                                <img class="img-responsive" src="img/candidatos/patinio2.png" alt="courses">
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#">CARLOS PATIÑO</a></h3>
                                <p class="item-content">D&Eacute;CIMO GRADO B</p>
                                <button id ="btn_5" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila5['total5'] . " de ". $fila['total'] . " (" .  Round( (($fila5['total5']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cse mathematics medical">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div >
                                <img class="img-responsive" src="img/candidatos/noelia2.png" >
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="img/candidatos/nohelia2.png">NOELIA MONCADA</a></h3>
                                <p class="item-content">D&Eacute;CIMO GRADO C</p>
                                <button id ="btn_6" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila6['total6'] . " de ". $fila['total'] . " (" .  Round( (($fila6['total6']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mathematics english">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div >
                                <img class="img-responsive" src="img/candidatos/barahona2.png" alt="courses">
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#">JOS&Eacute; BARAHONA</a></h3>
                                <p class="item-content">UND&Eacute;CIMO BILINGUE A</p>
                                <button id ="btn_7" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila7['total7'] . " de ". $fila['total'] . " (" .  Round( (($fila7['total7']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 diploma cse medical">
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div >
                                <img class="img-responsive" src="img/candidatos/paula2.png" alt="courses">
                                <a href="#"></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#">PAULA MENDOZA</a></h3>
                                <p class="item-content">UND&Eacute;CIMO ESPAÑOL A</p>
                                <button id ="btn_8" style="width:95%" class="btn btn-primary btn-lg"><?php echo $fila8['total8'] . " de ". $fila['total'] . " (" .  Round( (($fila8['total8']*100)/ $fila['total']),2) ."%)" ;  ?></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div> <p>Votos en Blanco</p><button id ="btn_0" class="btn btn-default btn-lg"><?php echo $fila0['total0'] . " de ". $fila['total'] . " (" .  Round( (($fila0['total0']*100)/ $fila['total']),2) ."%)" ;  ?></button>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-area-top">
            <div class="container">
                <div align="center" class="row">
                    
                    <div align="center"  class="footer-about">
                        <H3>C.E.M.N.G. SAN JOSÉ DEL CARMEN</H3>
                    </div>
                        
                    
                </div>
                
            </div>
        </div>
    
    </footer>

            <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
                <!-- Plugins js -->
                <script src="js/plugins.js" type="text/javascript"></script>
                <!-- Bootstrap js -->
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <!-- WOW JS -->
                <script src="js/wow.min.js"></script>

                <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
                <!-- Srollup js -->
                <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
            
                <!-- Magic Popup js -->
                <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
            
                
</body>

</html>