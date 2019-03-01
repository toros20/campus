<?php 
   require_once('php/conexion.php');
    //obtenemos el codigo de votacion del url
   $cuenta=$_GET['cuenta'];

   //validamos si este es un codigo valido para votar
   $sql_validar_codigo="select * from codigos where cuenta=".$cuenta;
   $res1=mysqli_query($conexion,$sql_validar_codigo);
   //$fila_codigo=mysqli_fetch_array($res1);
   $num_codigo = mysqli_num_rows($res1);

   if ($num_codigo==0) {
        header('Location:https://elecciones2019.000webhostapp.com/error_noacto2.php?cuenta='.$cuenta);
   } 
 
    if ($num_codigo!=0) { //codigo acto para votar
   
        //validamos si este alumno ya voto
        $sql_validar_voto_hecho="select * from elecciones_primaria where cuenta=".$cuenta;
        $res=mysqli_query($conexion,$sql_validar_voto_hecho);
        $fila=mysqli_fetch_array($res);
        mysqli_close($conexion);

        $numero_filas = mysqli_num_rows($res);

        if ($numero_filas>0) {
             header('Location:https://elecciones2019.000webhostapp.com/error_yavoto2.php?cuenta='.$cuenta);			
        }

        if ($numero_filas==0): ?>

            <script type="text/javascript">
                
                function votar(eleccion) {
                
                    var identidad="<?php echo $_GET['cuenta']; ?>";
                    
                        $.ajax({

                                url: 'php/guardar_voto_elecciones_primaria.php',
                                data:{id_eleccion:eleccion,id_identidad:identidad},
                                type:'post',
                                beforeSend: function(){
                                    $('#btn_0').attr("disabled", true);
                                    $('#btn_1').attr("disabled", true);
                                    $('#btn_2').attr("disabled", true);
                                    $('#btn_3').attr("disabled", true);
                                    $('#btn_4').attr("disabled", true);
                                    $('#btn_5').attr("disabled", true);
                                    $('#btn_6').attr("disabled", true);
                                    $('#btn_7').attr("disabled", true);
                                    $('#btn_8').attr("disabled", true);
                                    $('#btn_9').attr("disabled", true);
                                    $('#btn_10').attr("disabled", true);
                                    $('#btn_11').attr("disabled", true);
                                    $('#btn_12').attr("disabled", true);
                            
                                },
                                success: function(data)
                                {
                                    $("#pagina").html(data);
                                    
                                }

                                }

                            )
                }

            </script>

            <!doctype html>
            <html class="no-js" lang="">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>Primaria | Estudiantiles</title>
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
                    <!-- Inner Page Banner Area End Here -->
                    <!-- Courses Page 2 Area Start Here -->
                    <div class="courses-page-area2">
                        <div class="container" id="pagina">
                        
                            <div class="row featuredContainer">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse english">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div>
                                                <img class="img-responsive" src="img/candidatos/1.jpeg" >
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">MAYA REYES</a></h3>
                                                <p class="item-content">SEXTO GRADO C</p>
                                                <button id ="btn_1" onclick="votar(1)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse mathematics medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/2.jpeg" >
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">WILSON FLORES</a></h3>
                                                <p class="item-content">SEXTO GRADO B</p>
                                                
                                                <button id ="btn_2" onclick="votar(2)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma mathematics">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/3.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">AUDRIE ZACAPA</a></h3>
                                                <p class="item-content">QUINTO GRADO B</p>
                                                <button id ="btn_3" onclick="votar(3)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse english medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/4.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">ANA ANDINO</a></h3>
                                                <p class="item-content">QUINTO GRADO C</p>
                                                <button id ="btn_4" onclick="votar(4)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row featuredContainer">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma english">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/5.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">BRITHANY BENAVIDES</a></h3>
                                                <p class="item-content">CUARTO GRADO B</p>
                                                <button id ="btn_5" onclick="votar(5)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse mathematics medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/6.jpeg" >
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="img/candidatos/6.jpeg">PABLO SABILL&Oacute;N</a></h3>
                                                <p class="item-content">CUARTO GRADO A</p>
                                                <button id ="btn_6" onclick="votar(6)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mathematics english">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/7.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">ANGHELINA G&Aacute;MEZ</a></h3>
                                                <p class="item-content">TERCER GRADO C</p>
                                                <button id ="btn_7" onclick="votar(7)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/8.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">SEBASTIAN LAGOS</a></h3>
                                                <p class="item-content">TERCER GRADO A</p>
                                                <button id ="btn_8" onclick="votar(8)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/9.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">KAMILA ORTIZ</a></h3>
                                                <p class="item-content">SEGUNDO GRADO C</p>
                                                <button id ="btn_9" onclick="votar(9)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/10.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">RODRIGO S&Aacute;NCHEZ</a></h3>
                                                <p class="item-content">SEGUNDO GRADO A</p>
                                                <button id ="btn_10" onclick="votar(10)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/11.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">REBECA GUARDIOLA</a></h3>
                                                <p class="item-content">PRIMER GRADO A</p>
                                                <button id ="btn_11" onclick="votar(11)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/12.jpeg" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">MAR&Iacute;A ESTER RIVERA</a></h3>
                                                <p class="item-content">PRIMER GRADO C</p>
                                                <button id ="btn_12" onclick="votar(12)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div> <button id ="btn_0" onclick="votar(0)" class="btn btn-default btn-lg">Voto en Blanco</button>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Page 2 Area End Here -->
                    <!-- Footer Area Start Here -->
                    <footer>
                        <div class="footer-area-top">
                            <div class="container">
                                <div align="center" class="row">
                                    
                                    <div align="center"  class="footer-about">
                                        <H3>C.E.B.N.G. SAN JOSÉ DEL CARMEN</H3>
                                    </div>
                                        
                                    
                                </div>
                                
                            </div>
                        </div>
                    
                    </footer>
                    <!-- Footer Area End Here -->
                
                <!-- Preloader Start Here -->
            
                <!-- Preloader End Here -->
                <!-- jquery-->
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

        <?php endif ?>

    <?php }//fonal del if del codigo acto para votar ?>  