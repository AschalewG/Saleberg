<?php require_once('includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php");}

$_SESSION['username'];
global $database;
$id_1 = $_SESSION['id'];


$query = $database->query("SELECT * FROM shops WHERE shop_id = '$id_1'");
$data =  $database->fetch_array($query);

 ?>

<?php

if(isset($_POST['submit'])){
	
	
	
  $name = $_POST['name'];
  $sector = $_POST['sector'];
  $email = $_POST['mail'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $website = $_POST['website'];
  $phone =$_POST['phone'];
  $profile = $_POST['profile'];
  
  $id_1 = $_SESSION['id'];
  
  
  $database->query("UPDATE shops SET business_name = '$name', sector = '$sector',
	email = '$email', website = '$website', phone = '$phone', profile = '$profile'
	   WHERE shop_id = '$id_1'") or die(mysql_error());
	   
	   	redirect_to("profile.php?");
	   
  
		

}
	
	
	
	
	






?>

<?php include('layouts/header.php'); ?>

<div id = "main">
	<div class = "container">

    <div  class="row">
    	
    	<div id  = "form_border" class="col-xs-6">

      <form class="form-group" action="edit_profile.php" method="post"  id = "">
        <h3 class="form-signin-heading" id = "form_heading">Edit info.</h3>
        <label class="labl" for="name">Business Name</label>
        <input value="<?php echo $data['business_name']  ?>" type="text" name = "name" class="form-control" >
        <label class="labl" for="name">Type of Bussiness</label>
        
                        <select   class="form-control" name="sector" >
                         <option  value="<?php echo $data['sector']  ?>">category</option>
                         <option  value="cafe and restaurant">cafe and restaurant</option>
                         <option  value="bar and night life">bar and night life</option>
                         <option value="cinima and theatre">cinima and theatre</option>
                         <option value="clothing and shoes">clothing and shoes</option>
                         <option value="health and beauty">health and beauty</option>
                         <option value="life style and gym">life style and gym</option>
                         <option  value="computer and electronics">computer and electronics</option>
                         <option  value="movies, music and game">movies, music and game</option>
                         <option  value="books and Stationery">books and Stationery</option>
                         <option value="design and gift">design and gift</option>
                         <option value="accessories and jewelry">accessories and jewelry</option>
                         <option value="department store">department store</option>
                         <option value="supermarket">supermarket</option>
                         <option value="other">other</option>

                         
                         </select>

        <label class="labl" for="mail">Email</label>
        <input value="<?php echo $data['email']  ?>" type="email" name = "mail" class="form-control" >
        
         <label class="labl" for="website">Website*</label>
         </label>
         <input value="<?php echo $data['website']  ?>"  type="text" name = "website" id="website" class="form-control"  >
                
         <label class="labl" for="phone">Phone number</label>
         <input value="<?php echo $data['phone']  ?>" type="text" name = "phone" id="phone" class="form-control">
        
                
         <label class="labl"  for="profile">Company description</label>
<textarea value = "<?php echo $data['profile']  ?> "  rows="4" type="text" name = "profile" class="form-control"><?php echo $data['profile']  ?></textarea> <br />
        
        
        
        
       
        <button class=" up btn btn-info" name="submit" type="submit">update</button>
      </form>
</div>
<div class="confirm col-xs-6">
	
	
	
</div>
    </div> <!-- /container -->
    
    
    
    </div>
    </div>
    
<?php include('layouts/footer1.php'); ?>