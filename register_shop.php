<?php include('layouts/header.php'); ?>

<?php

if(isset($_POST['submit'])){
	
	
	$shop = new Shop();
	
  $shop->business_name = $_POST['name'];
  $shop->sector = $_POST['sector'];
  
  $email = $_POST['mail'];
  $shop->email = $email;
  
 
  
  $pass = sha1($_POST['password']);
  $shop->password = $pass;
  
  $web_x = "http://";
  $web_y = $_POST['website'];
  $shop->website = $web_x.$web_y;
  
  
  $shop->phone =$_POST['phone'];
  $shop->profile = $_POST['profile'];
  
  
  //$code = rand();	
  //$shop->confirmed_code =  $code;

if($shop->save()){
	
/*	$message = "
	           click the link below to verify your account
	           http://www.saleberg.com/confirm.php?email=$email&code=$code&pass=$pass
	           ";
	mail($email, "saleberg confirmation", $message, "From: saleberg@saleberg.com");
	
	echo("you completed the registration go to your email and verify your account");
	*/
	redirect_to("profile.php?");
	

	 
	            } else {
	            	echo("There is problem in the Registeration"); 
	            }
	 
	        } 
	
?>


<div id="main">
<div class="container">

    <div  class="row">
    	<div class ="col-xs-1"></div>
    	
    	<div id  = "form_border" class="col-xs-5">

      <form  class="form-group" action="register_shop.php" method="post"  id = "register">
      

        <h4 class="form-signin-heading" id = "about_heading">Register  business</h4>
        <label class="labl" for="name">business name</label>
        <input autofocus  type="text" name = "name" class="form-control" >
        <label class="labl" for="name">type of business</label>
        
                         <select   class="form-control"  name="sector" >
                         <option  value="">category</option>
                         <option  value="cafe and restaurant">cafe and restaurant</option>
                         <option  value="bar and night life">bar and night life</option>
                         <option value="cinema and theatre">cinema and theatre</option>
                         <option value="clothing and shoes">clothing and shoes</option>
                         <option value="health and beauty">health and beauty</option>
                         <option value="life style and gym">life style and gym</option>
                         <option  value="computer and electronics">computer and electronics</option>
                         <option  value="movies, music and game">movies, music and game</option>
                         <option  value="video and photography">video and photography</option>
                         <option  value="books and Stationery">books and Stationery</option>
                         <option value="design and gift">design and gift</option>
                         <option value="accessories and jewelry">accessories and jewelry</option>
                         <option value="hotel and travel">hotel and travel</option>
                         <option value="department store">department store</option>
                         <option value="supermarket">supermarket</option>
                         <option value="ethnic shop">ethnic shop</option>
                         <option value="other">other</option>

                         
                         </select>

        
        
         <label class="labl" for="website">website</label>
         <b></b></label>
         <input  type="text" name = "website" id="website" class="form-control"  placeholder="www.website.com" >
                
         <label class="labl" for="phone">phone number</label>
         <input type="tel" name = "phone" id="phone" class="form-control">
       
        <label class="labl" for="mail">email</label>
        <input type="email" name = "mail" class="form-control" >
        
        <label class="labl"   for="password">password</label>
        <input   type="password" name = "password" id = "password" class="form-control" pattern="^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,20}$" >
       
        <label class="labl"  for="rpassword">retype password</label>
		<input  type="password" name = "rpassword" id = "rpassword" class="form-control" >
        
        <label class="labl"  for="profile">company description</label>
        <textarea  rows="4" type="text" name = "profile" class="form-control"> </textarea> <br />
        
        <button  class=" up btn btn-info" name="submit" type="submit">Sign up</button>
      </form>
</div>

    	<div class ="col-xs-6">
    		

    	<div id="bus_use">
    	    					<div class="jumbotron">


		<h3><div class="about_use">	<i class="icon-chec"></i> <span >We believe saleberg will ..  </span>  </div></h3> 

	<div class="about_par">	<p class="register_use"><i class="glyphicon glyphicon-arrow-down"></i> <span >save cost of advertising</p>  </span>  </div> 
			
	   <div class="about_par"> <p class="register_use"><i class="glyphicon glyphicon-thumbs-up"></i> <span> attract new customers</span> </p> </div>  
			
		 <div class="about_par"><p class="register_use">	<i class="glyphicon glyphicon-repeat"></i> <span> connect with your customers </span> </div>  
			
	<div class="about_par"><p class="register_use">	<i class="glyphicon glyphicon-eye-open"></i> <span> boost social media visibility </span> </div> 
			
			
		</div>
    				</div>

    		
    		
    		
    		
    	</div>

    </div> <!-- /container -->
    
    
    
     </div>
    
    </div>
<?php include('layouts/footer1.php'); ?>