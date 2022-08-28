<?php
require_once ("layouts/header.php");

?>





 
 <?php

 $_SESSION['cty'] = strtolower($_POST['city']);
 


function show_catag() {

	$cit = $_POST['city'];
	$x = Offer::find_cata($cit);

	$y = array_unique($x);

	for ($i = 0; $i <= count($x); $i++) {

		if (isset($y[$i])) {

			echo " <option  value = " . $y[$i] . ">" . $y[$i] . "</option>";

		}

	}

}
 ?>  
 
<?php

function show_mall() {

	$cit = $_SESSION['cty'];
	$x = Offer::find_mall($cit);

	$y = array_unique($x);

	for ($i = 0; $i <= count($x); $i++) {

		if (isset($y[$i])) {

			echo " <option  value = " . $y[$i] . ">" . $y[$i] . "</option>";

		}

	}

}
 ?> 

<!-- Example row of columns -->
<div id="main">
<div class="container">
<div class="row">
	 
	
<div class="col-lg-6" id="sale_nav">
	<?php	echo ucfirst($_SESSION['cty'])  ?> <i class="glyphicon glyphicon-arrow-right"></i> <span id = "wana"> all deals</span>
		
	</div>
	<div class="col-lg-6"></div>


</div>
</div>
<div class="container">

	
<div class="row" id = "nav_fea">
	
<div class="col-xs-6">
<select class="form-control"  id="mesh" onchange="showOffer(this.value)"> 
	    <option>by type</option>

    <?php

	show_catag();
    ?> 
  
</select> 






</div>
<div class="col-xs-6">

		<select class="form-control" id="meh" onchange="showformall(this.value)"> 
	    <option>by mall</option>

    <?php

	show_mall();
    ?> 
  
</select>


			
</div>
		
	
</div>
<div>
		
		</div>

		</div>
		
		<div class="container">
        <div class="row">
        	<div class="col-sm-3"> 
				</div>

	
		
	   <div class = "vertical col-sm-7" id="abi">
			
			

 <?php

 	$asch = Offer::find_by_city($_SESSION['cty']);
			
			   $r_asch = array_reverse($asch)
			
			
			 ?>  
    	
<?php foreach($r_asch as $deal): ?>

    <div class="box row">
	<div class="col-md-3">
		
	<a href = "p_profile.php?name=<?php echo $deal -> shopp_name; ?> "><img  id="thumb" class="thumbnail"  src="<?php echo $deal -> image_path(); ?> "/> </a><br />
	
		 
	</div>
		<div class="col-md-1" >
	</div>
	
	
		<div class="col-md-7 info">

		<div id="shop">
		<a class="bus_name" href="p_profile.php?name=<?php echo $deal -> shopp_name; ?> "><?php echo $deal -> shopp_name; ?></a>
	 </div>
	 
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://saleberg.com/p_profile.php?name=
<?php
echo $deal -> shopp_name;
	  ?>&ketema=<?php
      echo $_SESSION['cty'];
	  ?>&amp;t=this+is+title">
	  <img id="share_pic" src="img/share1.png"  />
</a>		
	 
    	<div id="disc">
    	    <?php  echo $deal -> info; ?>  
    	 </div>
    	
    	 </div>

    


    	
    
	<div class="col-md-1 sahre" >

	
	  
	    	
    </div>
    
  
        	 
    
    
    	</div>

<?php endforeach; ?>
    	

   </div>

			
	  <div class="col-sm-2">
	
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
		<!-- Start of Amazon Publisher Studio Loader -->    <script>  window.amznpubstudioTag = "saleberg-20";  </script>    <!-- Do not modify the following code ! -->  <script async="true" type="text/javascript" src="http://ps-us.amazon-adsystem.com/domains/saleberg-20_f71f651f-7d94-41ec-b431-4797c9b66fb6.js" charset="UTF-8"></script>    <!-- End of Amazon Publisher Studio Loader -->  

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