<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="dist/css/bootstrap-select.css">
<title>Add Article</title>
	<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Modish Appointment Form Widget Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- Meta tags -->
		<!-- font-awesome icons -->
		   <link rel="stylesheet" href="css/font-awesome.min.css" />
		<!-- //font-awesome icons -->
		<!--stylesheets-->
		<link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
		<!--//style sheet end here-->
		<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" /><!--time-->
		<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Muli:300,400,600,600i,700" rel="stylesheet">

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
        <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


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
    
		<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <script type = "text/javascript">
         $(document).ready(function(){
				$('.selectpicker').selectpicker();
				});
      </script> 
</head>
<body>
	
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
						<a href="FormArticle.php">my profile</a>
						</li>
						<li><a href="home.php">Home</a></li>
                        <li><a href="home.php#conference">My Conference</a></li>
                        <li><a href='#'><span>My articles</span></a></li>
                        <li><a href="home.php#contact">Contact</a></li>
						<li ><a href="home.php"><span>Log Out</span></a></li>
		<!--<li> <a href='#'><span>User</span></a>
			<ul>
				<li><a href='#'><span>Profile</span></a> </li>
				<li><a href='#'><span>My articles</span></a></li>
				<li ><a href='#'><span>Create Conference</span></a></li>
				<li ><a href="home.php"><span>Log Out</span></a></li>
			 </ul>
		 </li>-->
				

               </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

	
    <div> &nbsp; </div>
 <div class="appointment-w3" id="confForm">
     <form action="" method="post" enctype="multipart/form-data">

         <div class="form-control-w3l">
         
               <input type="text" id="name" name="nameConference" placeholder="Conference's name" required="">
         </div>

		 <div class="form-control-w3l">	
			
				<input type="text" id="email" name="duree" placeholder="Duration" title="The duration of the conference" required="" onkeypress="return isNumberKey(event)">
		 </div>
		 <div> &nbsp; </div>
		 <p> &copy; Image of your conference: </p>
		 <div class="form-control-w3l">	
			
				<input type="file" id="imagefile" name="imagefile" accept="image/*" >
		 </div>
		 <div> &nbsp; </div>
		 <p> &copy; Description of your article: </p>
		 
		 <div class="form-control-w3l">
               <textarea id="message" name="confDescription" placeholder="Conference description..." required=""></textarea>
         </div>
         <div> &nbsp; </div>
		 <p> &copy; Repport of your conference : </p>
		 <div class="form-control-w3l">
               <textarea id="message" name="confRepport" placeholder="Conference repport..." required=""></textarea>
         </div> 

		<div> &nbsp; </div>
		<select name="select1[]" id="" multiple="multiple">
		<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "base_gs";
			$conn = new mysqli($servername, $username, $password,$dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$req="SELECT userID,name,last_name FROM users";
			$result = $conn->query($req);
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				{
					echo '<option value="'.$row["userID"].'">'.$row["name"]. ' ' . $row["last_name"].'</option>';
				}
			}
			$conn->close();
		?>
		</select>
	  
		
 <input type="submit" name ="request" value="SEND REQUEST ">
 <?php

	if( isset($_POST['request']))
	{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "base_gs";
			$conn = new mysqli($servername, $username, $password,$dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			

			$target_dir = "assets/images/";
			$target_file = $target_dir . basename($_FILES["imagefile"]["name"]);
			$imagename=time() . basename($_FILES["imagefile"]["name"]);
			$uploadOk = 1;
			if(isset($_POST["submit"])) 
			{
				$check = getimagesize($_FILES["imagefile"]["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} 
				else 
				{
					echo "File is not an image.";
					$uploadOk = 0;
				}

			}
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} 
			else 
			{
				if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file)) 
				{
					rename($target_file, $target_dir.$imagename);
				} 
			}

			

			$duree=$_POST['duree'];
			$title=$_POST['nameConference'];
			$description=$_POST['confDescription'];
			$repport=$_POST['confRepport'];
			$sql = "INSERT INTO conference(nom_conf, desc_conf, duree_conf,statue,rapport_conf,photo_conf,id_president)
			VALUES ('$title', '$description', $duree,0,'
			$repport','$imagename',".time().")";
			
			if ($conn->query($sql) === TRUE) {
			} 
			$confidreq="SELECT max(id_conf) FROM conference";
			$result = $conn->query($confidreq);
			$idconfarray = $result->fetch_array(MYSQLI_NUM);
			$idconf=$idconfarray[0];
			foreach ($_POST['select1'] as $selectedOption)
			{
				$req="INSERT INTO relecteur VALUES ($idconf,$selectedOption)";
				mysqli_query($conn,$req);
				$updateReq = "UPDATE table user SET user_relecteur = 1 WHERE userID=$selectedOption";
				mysqli_query($conn,$updateReq);
			}
			
			$conn->close();
	}
 ?>
</form>

   </div>
   
    <div class="copy">
    <p>&copy;2018 Leadrship Conference</p>
</div>

			<script>
			function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : event.keyCode
				if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
				return true;
			}
			</script>
			<script>
					$(function() {
					$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
					});
			</script>
		<!-- js -->
  		<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
		<!-- //js -->
		<!-- Calendar -->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			
			<!-- //Calendar -->
			<!-- Time -->
			<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- // Time -->
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