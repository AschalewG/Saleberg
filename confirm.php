<?php
require_once ("layouts/header.php");
?>

      <!-- Begin page content -->
      
      <div id="main">
      <div class= "container">
      <div class="contain" id="about_all">
      	
      	
      	
      	

<div class = "row">
	
	<div id="about_side" class="col-xs-2" >
		

	</div>
	
	<div class="col-xs-7" id = "about_main">
		
		
			
			
        <h4 class="form-signin-heading" id = "form_heading">Thank you: verify your account by going to your email.</h4>
     <?php
     
     $mail = $_GET["email"];
     $code1 = $_GET["code"];
     $pass1 = $_GET["pass"];
     

	global $database;

	$shop = new Shop;

	
	$pop = $shop -> confirm($mail, $pass1);
	
		$selam = array();
	while ($row = $database -> fetch_array($pop)) {
		$selam[] = $row['confirmed_code'];

	}

	$p_code = $selam[0];
	
	
         if($p_code == $code1){
         
         global $database;


	$sql1 = "UPDATE shops SET confirmed = '1' ";
	$sql2 = "UPDATE shops SET confirmed_code = '0' ";
	
	mysql_query($sql1);
	mysql_query($sql2);
	
	redirect_to("login.php?");
	
	}
         
 ?>
			
			<div id="about_par">
				
				
				
				
			</div>
			
			
			
			
			
			
		
		
	
	</div>
	
	
	<div class="col-xs-3" >
		

	</div>
	
	
	

</div>
</div>
</div>
</div>


         
         
         
            
            
<?php include('layouts/footer1.php'); ?>