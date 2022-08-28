<?php
require_once ("includes/initialize.php");
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>saleberg &middot; Discover Value </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- CSS -->
		<link rel="icon" type="image/png" href="/img/viva.png" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

		<link href="../css/lightbox.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>   
        <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<![endif]-->

	</head>

	<body>

<?php


function show_allcity() {

	$x = Offer::find_allcity();

	$y = array_unique($x);

	for ($i = 0; $i <= count($x); $i++) {

		if (isset($y[$i])) {

			echo " <option  value = " . $y[$i] . ">" . $y[$i] . "</option>";

		}

	}

}
 ?>  
 
 
 
 
 


		<!-- Part 1: Wrap all page content here -->
		<div id="wrap">

			<!-- Fixed navbar -->
			<div class = "container">
				<div class="row">
			    <div id="header" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<a class="col-xs-2 navbar-brand" href="index.php"><img id="lgo" src="img/berg2.png" /></a>

				<div class="col-xs-8">

				</div>

				<div class="col-xs-2">

					
				</div>

			</div>
			</div>
			</div>
			<!-- navbar ends here -->

			<!-- Begin page content -->
			<div id="main">
         <div class="container-fluid">
				<div class="row">

					<div class="col-sm-4">
					
					</div>

					<div class="col-sm-6">
						<div class="consumer" >
						Enter city<span id="SALE"> for local deals
						</div>

					</div>
					<div class="col-sm-2"></div>

				</div>

				<div class="row">
					<div class="col-sm-3"></div>

					<div class = "col-sm-6 h_form" id="home_input">
						<form name="myForm" id="search" class="navbar-form" action="mall_4.php" onsubmit="return validateForm()"  method="post">
							<div class="input-group input-group" >

								

<input autofocus   id="enter_city" name="city" placeholder="Enter city" type="text" class="form-control enter_mob" >
                                    
                         
								<span class="input-group-btn goo">
    <button id="go" type="submit" name="submit" class="btn btn-default go">GO</button>

									 </span>
						</form>
					</div>

				</div>
			</div>

				<div class="col-sm-3">

				</div>

				<div class = "row">
<div class="container-fluid">
					<div class="col-sm-2">

					</div>

					<div class="col-sm-6 business ">
					
					
					
					
				<a  href="login.php"><input class="btn-info btn"  type="button" value = "For business"></a>

					
					
					
					
					
					





					</div>

					<div class="col-sm-2">

					</div>
</div>
				</div>

				

					<div  class="col-sm-2 ">

											</div>
	 
						<br />
						


				</div>

				<div class="row">

					<div class="col-sm-4">

					</div>
					<div calss = "col-sm-5">

					</div>

					<div class = "col-sm-3" >

					</div>

				</div>
</div>
		</div>

		<div id="foo"  class="container">
	<footer id="footer"  class="row">
		<nav class="col-sm-4"></nav>
		<nav   class="col-sm-7">
			<ul id="fo">
				<li>
					<p class="copy" id="foot">
										&copy saleberg 2014
					</p>
				</li>
				<li  class="ho">
					<a class="home" id="foot" href="index.php"> home</a>
				</li>

				<li id="mob_footer" class="about">
					<a id="foot" href="about.php"> about</a>
				</li>
				<li id="mob_footer" class="about">
					<a  id ="foot" href="bug.php"> contact</a>
				</li>
				<?php

					if($session->nav()){ ?>
						<li class="foot_log">
							<a  id="nav_link" href = "logout.php">logout</a>

						</li>
						<li class="foot_log">
							<a id="nav_link" href = "profile.php">my profile</a>

						</li>

					<?php	}else{ ?>

						<li class="foot_log">
							<a  id="nav_link" href="register_shop.php">register</a>
						</li>
						<li class="foot_log">
							<a id="nav_link" href="login.php">login</a>
						</li>
						


					<?php	} ?>

			</ul>
			
		</nav>

	</footer>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
<script src="js/ajax.js"></script>
<?php
if (isset($database)) { $database -> close_connection();
}
?>
</body>
</html>