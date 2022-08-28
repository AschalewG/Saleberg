<?php include('layouts/header.php'); ?>
if (!$session->is_logged_in()) { redirect_to("login.php");}

$_SESSION['username'];

?>
<?php
	$max_file_size = 1048576;   // expressed in bytes
	                            //     10240 =  10 KB
	                            //    102400 = 100 KB
	                            //   1048576 =   1 MB
	                            //  10485760 =  10 MB

	if(isset($_POST['submit'])) {
		
		$offer = new Offer();
		$offer->attach_file($_FILES['file_upload']);
		$offer->country = strtolower($_POST['country']);
		$offer->city = strtolower($_POST['city']);
		$offer->shoping_mall = strtolower($_POST['shop_mall']);
		$offer->street_add = strtolower($_POST['street_add']);
		
	    $offer->info = $_POST['disc'];
		
		
		$offer->sho_id = $_SESSION['id'];
		$offer->shopp_name = $_SESSION['b_name']; 
		$offer->cata = $_SESSION['cat']; 
		
		
		if($offer->save()) {
			// Success
	  redirect_to("profile.php?");
		} else {
			// Failure
      $message = join("<br />", $offer->errors);
		}
	}
	
?>


<div id="main">
	<div class="container">
<div class = "row"> 
    <div class="col-xs-1"></div>	
<div class = "col-xs-4" id = "form_border">
      <form class="form-group" action="add_offer.php" method="post" name="upload" id="register" enctype="multipart/form-data">
        <h3 class="form-signin-heading" id = "form_heading">Add sale</h3>
        <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>">
        <input type = "hidden" name = "name" />
        <input type = "hidden" name = "type" />
        
 
         <span id = "formerror" class = "error"></span>
        <label class="labl" for="country">country</label>
        <input  autofocus list="countries" type="text" name = "country" id="country" class="form-control" >
               
        <label class="labl" for="city">city</label>
        <input type="text" name = "city" id="city" class="form-control"  >
        
        
        
        
        
        
        
      
        
    
        
        <label  class="labl" for="street_add">street Address </label>  
        <input type="text" value="" name = "street_add" id="street_add" class="form-control" ><br />
        
         <label  class="labl" for="street_add">image about the discount </label>  <br />
     <p><input class="upload form-control" type="file" id="file_up" name="file_upload"   accept="image/*"  required="required"/></p> <br />

         <label class="labl" for="disc">description<spam id="chars">100</spam> words left</label>         
         
         <textarea rows="4"  type="text"  name = "disc" class="form-control" id = "area1" ></textarea> <br />

        
      
       
       
         
         <label class="labl" for="shop_mall">are you located in shopping mall</label> <br />
        <label class="radio">
       <input class="labeel" type="radio" name="optionsRadios" id="mall" value="option1" onclick="javascript:Check();" required>
yes
</label>
<label class="radio">
<input  class="labeel" type="radio" name="optionsRadios" id="local" value="option2" onclick="javascript:Check();" required>
no         </label>

        <div id="if_mall" style="display:none">
        <label class="labl" for="shop_mall">Shopping Mall</label>
        <input type="text" value="" name = "shop_mall" id="shop_mall" class="form-control" placeholder="eg. sello not (sello mall)">
        </div>
       
       
       
       
      
        <button class="btn up btn-info" name="submit" type="submit">add</button>
      </form>
 </div>
 

 <div class = "col-xs-7"></div>
    </div> <!-- /container -->
    
  </div>
  </div>  
    
    
    
    
<script src="js/lazy_sb.js"></script>


<script type="text/javascript">

function Check() {
    if (document.getElementById('mall').checked) {
        document.getElementById('if_mall').style.display = 'block';
        document.getElementById('if_local').style.display = 'none';
    }
    if (document.getElementById('local').checked) {
        document.getElementById('if_mall').style.display = 'none';
    }
    

}

document.getElementById('register').addEventListener('submit', estimateTotal);

function estimateTotal(event) {
	
	var name1 = document.getElementById('shop_mall').value;
	var name2 = document.getElementById('street_add').value;
	
	if ((name1 === '') && (name2 === '')) {
		alert('Please choose your business location.');
		
	}
}



 </script>
 


<?php include('layouts/footer1.php'); ?>