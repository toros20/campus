    <?php
        
         $cuenta=$_GET['cuenta'];

    ?>
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
            <div class="courses-page-area2" align="center">
                <div class="container" id="pagina" align="center">

                <div class="row" align="center" >

                    <div style="float:center"  align="center">
                        
                    <h3>Lo sentimos, este número de cuenta ya realizo su voto. </h3>
                    <h4>Codigo Ingresado: <?php echo $cuenta?></h4>
			       
				    <?php echo "<br />";echo "<br />"; ?>
					<div style="text-align: center;"   align="center" ><a href="../elecciones.php">
                        <button type="button" style="text-align: center;" 
                                class="btn-lg btn btn-primary">
                                <i class="fa fa-home" > Regresar</i>
                        </button>
                        </a></div>
                        
                    </div>
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
