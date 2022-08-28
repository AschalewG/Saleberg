<?php
require_once ("includes/initialize.php");

$semu = $_GET['name'];
$ketema = $_GET['ketema'];
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Great offer from <?php echo($semu); ?>, check it out!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- CSS -->
		<link rel="icon" type="image/png" href="/img/viva.png" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

		<link href="css/lightbox.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>   

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA-i6izr-fGP1a7_3Z3Fpo74ct-pNpKMV0&sensor=false"></script>
    
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<![endif]-->

	</head>

  
    <body onload="initialize()">
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
				<a class="col-xs-2 navbar-brand" href="index.php"><img id="logo" src="img/berg2.png" /></a>

				<div id="search_box" class="col-xs-6 nav_2">
					<form name="myForm" id="search" class="navbar-form" action="mall_4.php" onsubmit="return validateForm()"  method="post">
							<div class="input-group input-group" >

								

<input   id="enter_city" name="city" placeholder="Enter city" type="text" class="form-control enter_mob" >
                         
  
  								<span class="input-group-btn goo">
    <button id="go" type="submit" name="submit" class="btn btn-default go">GO</button>

									 </span>
													</div>
						</form>
								</div>


				<div class="col-xs-4 nav_3">

					
				</div>

			</div>
			</div>
			</div>      	
  	
      <!-- Begin page content -->
      <div id="main">

      <div class="container">
     <?php
	global $database;

	$shop = new Shop;

	$hop = $_GET["name"];

	$hop;
	$pop = $shop -> find_by_sname($hop);
	$selam = array();
	while ($row = $database -> fetch_array($pop)) {
		$selam[] = $row['shop_id'];

	}

	$p_key = $selam[0];
  ?>
<div  class="row ">
	<div class="col-sm-1"></div>
	
	<div class="col-sm-3">
		
		<?php
		//logoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo

		global $database;

		$que = "SELECT logo FROM shops WHERE shop_id = '{$p_key}'";

		$result = mysql_query($que);

		$log;

		while ($row = mysql_fetch_array($result)) {
			$log = $row['logo'];

		}

		$key = $log;

		//logooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
		   ?>
		
			<img id = "profile" src="img/
			<?php
			if (!($key === "")) {
				echo $key;
			} else {
				echo "add.png";
			}
			  ?>"  /> <br />

		
		
		
	</div>
		
	<div id="p_info" class="col-sm-4">
		
		<h4 id="c_name"> <?php echo $_GET['name']; ?></h4><br /> 
		
		<div >
			<p id="c_disc">
		<?php
	    global $database;
	   $nun =   Shop::find_by($p_key);
	    while($row = $database->fetch_array($nun))
            {
                $prof = $row['profile'];
				$mail = $row['email'];
				$phon = $row['phone'];
				$site = $row['website'];
				
				echo $prof; ?>
       
					</p>
			
		</div>
		
<div id="p_ifo2">
		<i class="glyphicon glyphicon-arrow-right p_icon"></i>  <?php echo $mail; ?> <br />
		<i class="glyphicon glyphicon-arrow-right p_icon"></i>  <?php echo $phon; ?> <br /> 
		<i class="glyphicon glyphicon-arrow-right p_icon"></i> <a id = "site_link" target="_blank" href="<?php echo $site; ?>">website</a>
		
	<?php	     } ?> 
</div>
	</div>

	<div id="canvas" class="col-sm-2">

	</div>

		
	</div>	
	
	<div class="col-sm-2">
		
		
  
</div>
	</div>
<?php

	$hop;
	$pop = $shop -> find_by_sname($hop);
	$selam = array();
	while ($row = $database -> fetch_array($pop)) {
		$selam[] = $row['shop_id'];

	}

	$p_key = $selam[0];
	?>
	<div class="container">
	<div class="row">
	
	<div class = "col-sm-3">
	
   </div>
		
		

  <div class = "vertical col-sm-7" >
  	 <?php
	$off = new Offer;
	$dal = $off -> find_by_shop($p_key);

	$r_deals = array_reverse($dal);
?>
 <div>
    <input id="address" type="textbox" value="<?php
  	 $m_deal = $r_deals[0];
	 
	 echo $m_deal->city . " ".$m_deal->street_add
  	 
  	 ?>">
    
  </div>
 <?php foreach($r_deals as $deal):?>
	   

    <div class="box row">
	<div class="col-md-3">
		
	<img  id="thumb" class="thumbnail"  src="<?php echo $deal -> image_path(); ?> "/><br />
	
		 
	</div>
		<div class="col-md-1" >
	</div>

	
	<div class="col-md-7 info">
		<div id="shop">
				<a href="p_profile.php?name=<?php echo $deal -> shopp_name; ?> "><?php  ?></a>

	 </div>
	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://saleberg.com/p_profile.php?name=
<?php
echo $deal -> shopp_name;
	  ?>&amp;t=this+is+title">
	  <img class = "share_pic_pp" id="share_pic_pp" src="img/share1.png"  />
</a>	
    	<div id="disc">
    	    <?php  echo $deal -> info; ?>  
    	 </div>
    	 <div>
      


     </div>
          </div>


    	
    
	<div class="col-md-1 sahre" >

	
	  
	    	
    </div>
    
  
        	 
    
    
    	</div>

	<?php endforeach; ?>

  	
  </div>

<div class = "col-sm-2">
	
</div>

</div>
</div>








<script>

	var geocoder;
	var map;
	function initialize() {
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(-34.397, 150.644);
		var mapOptions = {
			zoom : 14,
			center : latlng,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		}
		map = new google.maps.Map(document.getElementById("canvas"), mapOptions);

		var address = document.getElementById("address").value;
		geocoder.geocode({
			'address' : address
		}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map : map,
					position : results[0].geometry.location
				});
			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
	}

</script>










</div>

<?php
include ('layouts/footer1.php');
?>