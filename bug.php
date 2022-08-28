<?php
require_once ("layouts/header.php");
?>

      <!-- Begin page content -->
      
      <div id="main">
      <div class= "container">
      <div class="contain" id="about_all">
    <?php 
    if(isset($_POST['submit'])){ 
    
          
    $mail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    
    	mail("shemuma07@gmail.com", $subject, $message, $mail);
       }
    
    ?>  	
      	
      	
      	

<div class = "row">
	
	<div id="about_side" class="col-xs-2" >
		

	</div>
	
	<div class="col-xs-7" id = "about_main">
		
		
						<div class="jumbotron">

			
        <h4 class="form-signin-heading" id = "about_heading">Contact Us</h4>

			
			<div id="about_par">
				
				<form class="form-signin"  id = "register"  action= "bug.php" method="post">
			
			<label class="labl"> email</label> 
			 <input required name="email" type="email" /> <br />
			 <label class="labl"> subject</label> 
			 <input required name="subject" type="text" /> <br />
			 
			 <label class="labl"> message</label> 
			<textarea required name="message" class="form-control" rows="3"></textarea> <br />
			<input id="send" type="submit" class = "btn btn-info" name="submit" value="send" />
		</form>
				
				
			</div>
						</div>

			
			
			
			
			
			
		
		
	
	</div>
	
	
	<div class="col-xs-3" >
		

	</div>
	
	
	

</div>
</div>
</div>
</div>


         
         
         
            
            
<?php include('layouts/footer1.php'); ?>

        