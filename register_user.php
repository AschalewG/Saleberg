<?php require_once('../../includes/initialize.php'); ?>
<?php

if(isset($_POST['submit'])){
	
	$user = new User();
	
$user->username = $_POST['username'];
$user->password = $_POST['password'];

if($user->save()){
	$session->message("congra....");
}else{
	$session->message("sorry....");
}


}else{
	$message = "Please register";
}



?>
<?php include('../layouts/header.php'); ?>

    <div class="container">


      <form class="form-signin" action="register_user.php" method="post" id="form">
        <h2 class="form-signin-heading">Register</h2>
        <input required="required" type="text" name = "username" class="input-block-level" placeholder="Username">
        <input required="required" type="password" name = "password" class="input-block-level" placeholder="Password">
        <input required="required" type="password" name = "rpassword" class="input-block-level" placeholder="retype Password">
        
        <button class="btn btn-large btn-primary" name="submit" type="submit">Sign up</button>
      </form>
      
     </div> <!-- /container -->
  <?php include('../layouts/footer.php'); ?>


