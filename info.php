
  <?php
$pdo = new PDO ('mysql:host=localhost;dbname=base_gc;charset=utf8', 'root', '');
    $code=$_GET['code'];
       $reponse2 =$pdo->query("SELECT * FROM conference WHERE id_conf=$code");
$data2=$reponse2->fetchAll();
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
            
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="footer, address, phone, icons" />

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/lato-webfont.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css">


        <link rel="stylesheet" href="assets/css/demo.css">
        <link rel="stylesheet" href="assets/css/footer-distributed-with-address-and-phones.css">

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logopn.png" alt="" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  <ul class="nav navbar-nav navbar-right">
                        <li class="active">
						<a href="home.php">Home</a></li>
                        <li><a href="home.php#conference">Conference</a></li>
                        <li><a href="Log.php">Sign in</a></li>
                        <li><a href="Log.php">Sign up</a></li>
                        <li><a href="home.php#contact">Contact</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

 

        <!-- END ITEM -->
<section id="gallery" class="sections">
            <div class="container text-center">

                <div class="heading-content">
                    <h3>Informations de la Conference</h3>                
                </div>
                    </div>
<?php  foreach ($data2 as $data2) {
    ?>
<div class="row">

            <div class="col-lg-3 ">
                <a href="#">
                    <img class="img-responsive" src="assets\images\<?php echo $data2['photo_conf'] ?>" >
                </a>
            </div>

            <div class="col-lg-7 col-md-7">
                <h3><?php echo($data2['nom_conf']) ?></h3>
                <h4></h4>
                <p><b>NOM ET PRENOM DU PRISIDENT : </b><?php echo($data2['nom_president']) ?></p>
                <p><b>DETAIL DE LA CONFERENCE : </b><?php echo($data2['rapport_conf']) ?></p>
                <p><b>DUREE DE CONFERENCE(h) : </b><?php echo($data2['duree_conf']) ?></p>
                <a href="index.php?code=<?php echo($data2['id_conf']) ?>">Return to Menu</a>

            </div>

        </div><br><br><br><br>





                   <?php
   }
   ?>
		</section>   <!-- END ITEM -->


   
        <!-- Sections -->
        <section id="contact" >

            <div id="fcontact" class="fcontact"></div>

            <div class="container text-center">

                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
                        <div class="contact-form-area">
                            <form>
                                <h3>Contact</h3>	
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Subject">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="7" placeholder="Message"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary contact-btn">SEND</button>
                            </form>
                        </div>	
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <div class="scroll-top">

            <div class="scrollup">
				<a href="#home"><i class="fa fa-angle-double-up"></i></a>
                
            </div>

        </div>


        <!--Footer-->
      
       
		<footer class="footer-distributed">

			<div class="footer-left">

				<p class="footer-links">
					<a href="#home">Home</a>
					·
					<a href="#">Conference</a>
					·
					<a href="#">Sign in</a>
					·
					<a href="#">Sign up</a>
					·
					<a href="#contact">Contact</a>
				</p>

				<p class="footer-company-name">Leadership conference &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>20 ASFI Street</span> Marrakesh, Morocco</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+212 5 24 78 41 30</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">leadership@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the leadership Conference</span>
					leadership company one of the best and famous unit which is set up by the most talented developer team . our website allows you to organize many conferences with deferent themes.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>


        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
