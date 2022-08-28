<?php
 include('layouts/header.php');

  $mess =  " "; 
// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { // Form has been submitted.

  $email = trim($_POST['email']);
  $password = sha1(trim($_POST['password']));
  
  // Check database to see if username/password exist.
	$found_user = Shop::authenticate($email, $password);
	
  //check weathere confirmed or not
   /*     global $database;

	$shop = new Shop;

	$pop = $shop -> confirm_reg($email, $password);
	
		$selam = array();
	while ($row = $database -> fetch_array($pop)) {
		$selam[] = $row['confirmed'];

	}

	$confirm = $selam[0];
	if(($email != "") && ($password != "")){
  if ($found_user && ($confirm == 1)) {  */
	//log_action('Login', "{$found_user->$email} logged in.");
	 $_SESSION['email'] = $email;
	redirect_to("profile.php?");
  }else{

  $mess = "<h4 class=\"form-signin-heading\" id = \"form_heading\"></h4>";
  $mess .= "<h4 class=\"form-signin-heading\" id = \"form_heading\"></i>  </h4>";

  
     $password = "";
  }
//} 
//}
?>

	<div id="main">
	<div class="container">
		
		<div class="row">
			<div class="col-xs-1"></div>
			<div class = "col-xs-4" id = "form_border">
			
	    <div>
		
 <form class="form-group" action="login.php" method="post">
 	
 	  
        <h4 class="form-signin-heading" id = "about_heading">Log in</h4>
		    
 <label class = "labl">Email</label>
 <input autofocus required class="form-control" type="email" name="email" maxlength="30"  />
		    
		    
 <label class = "labl">Password</label>
 <input required  class="form-control" type="password" name="password" maxlength="30"  />

		      
		    
		     
        <button  id="post_font" class=" up btn btn-info" name="submit" type="submit">log in</button>
        <a  href="register_shop.php"><input id="post" class=" up btn btn-info" type="button" value="sign up"></a>

		      
		</form>
		<br />
		
		<div id= "log_eror">

<?php  echo($mess);  ?>
</div>
		

		    </div>

    </div>

<div class="col-xs-7">



<im id="infog" src="img/Infog.jpg" />


</div>
   
   

</div>	
</div>	
    
        </div> <!-- /container -->

<?php include('layouts/footer1.php'); ?>