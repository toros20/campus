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
        header('Location:https://elecciones2019.000webhostapp.com/error_noacto.php?cuenta='.$cuenta);
   } 
 
    if ($num_codigo!=0) { //codigo acto para votar
   
        //validamos si este alumno ya voto
        $sql_validar_voto_hecho="select * from elecciones where cuenta=".$cuenta;
        $res=mysqli_query($conexion,$sql_validar_voto_hecho);
        $fila=mysqli_fetch_array($res);
        mysqli_close($conexion);

        $numero_filas = mysqli_num_rows($res);

        if ($numero_filas>0) {
             header('Location:https://elecciones2019.000webhostapp.com/error_yavoto.php?cuenta='.$cuenta);			
        }

        if ($numero_filas==0): ?>

            <script type="text/javascript">
                
                function votar(eleccion) {
                
                    var identidad="<?php echo $_GET['cuenta']; ?>";
                    
                        $.ajax({

                                url: 'php/guardar_voto_elecciones.php',
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
                <title>Elecciones | Estudiantiles</title>
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
                                                <img class="img-responsive" src="img/candidatos/sofia_martinez.png" >
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">SOF&Iacute;A MART&Iacute;NEZ</a></h3>
                                                <p class="item-content">S&Eacute;PTIMO GRADO B</p>
                                                <button id ="btn_1" onclick="votar(1)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse mathematics medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/sofia_castillo.png" >
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">SOF&Iacute;A CASTILLO</a></h3>
                                                <p class="item-content">OCTAVO GRADO B</p>
                                                
                                                <button id ="btn_2" onclick="votar(2)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma mathematics">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/villela2.png" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">C&Eacute;SAR VILLELA</a></h3>
                                                <p class="item-content">NOVENO GRADO B</p>
                                                <button id ="btn_3" onclick="votar(3)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse english medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/toscano2.png" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">NATALIE TOSCANO</a></h3>
                                                <p class="item-content">NOVENO GRADO A.</p>
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
                                                <img class="img-responsive" src="img/candidatos/patinio2.png" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">CARLOS PATIÑO</a></h3>
                                                <p class="item-content">D&Eacute;CIMO GRADO B</p>
                                                <button id ="btn_5" onclick="votar(5)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse mathematics medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/noelia2.png" >
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="img/candidatos/nohelia2.png">NOELIA MONCADA</a></h3>
                                                <p class="item-content">D&Eacute;CIMO GRADO C</p>
                                                <button id ="btn_6" onclick="votar(6)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mathematics english">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/barahona2.png" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">JOS&Eacute; BARAHONA</a></h3>
                                                <p class="item-content">UND&Eacute;CIMO BILINGUE A</p>
                                                <button id ="btn_7" onclick="votar(7)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse medical">
                                    <div class="courses-box1">
                                        <div class="single-item-wrapper">
                                            <div >
                                                <img class="img-responsive" src="img/candidatos/paula2.png" alt="courses">
                                                <a href="#"></a>
                                            </div>
                                            <div class="courses-content-wrapper">
                                                <h3 class="item-title"><a href="#">PAULA MENDOZA</a></h3>
                                                <p class="item-content">UND&Eacute;CIMO ESPAÑOL A</p>
                                                <button id ="btn_8" onclick="votar(8)" style="width:95%" class="btn btn-primary btn-lg">Votar</button>
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
                                        <H3>C.E.M.N.G. SAN JOSÉ DEL CARMEN</H3>
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