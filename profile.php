<?php include('layouts/header.php'); 

if (!$session->is_logged_in()) { redirect_to("login.php"); } 




$shop = new Shop;

//retiviing session value that was stored when login
$mail = $_SESSION['email'];


$p = Shop::find_by_email($mail);

$p->profile;
$b_name = $p->business_name;
$_SESSION['cat'] = $p->sector;


$_SESSION['b_name'] = $b_name;

$_SESSION['id'] = $p->shop_id;

//assigning the shop id from the shop to the sho_id of the FK in the offer object

$off = new Offer;
$f_id = $off->sho_id = $_SESSION['id'];

$deals = Offer::find_by_shop($f_id);
$r_deals = array_reverse($deals);

?>
<div id="main">
<div class="container">
<div  class="row">
	<div class="col-sm-1"></div>
	
	<div class="col-sm-3">
		
		<?php
		//logoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
		
		global $database;
		
		$que = "SELECT logo FROM shops WHERE shop_id = '{$p->shop_id}'";
		
		$result = mysql_query($que);
		
		
		
		$log;
		

  while($row = mysql_fetch_array($result))
            {
               $log = $row['logo'];
				
				
            }
	
	
	  $key =  $log;
		
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
		
	<div id="p_info" class="col-sm-5">
		
		<h4 id="c_name"> <?php echo$b_name;   ?></h4><br /> 
		
		<div >
			<p id="c_disc">
				<?php echo$p->profile;   ?>
			</p>
			
		</div>
		
		<i class="glyphicon glyphicon-arrow-right"></i>  <?php echo$p->email;   ?> <br />
		<i class="glyphicon glyphicon-arrow-right"></i>  <?php echo$p->phone;   ?> <br />
		<i class="glyphicon glyphicon-arrow-right"></i>  <a href="<?php echo$p->website;   ?>"><?php echo$p->website;   ?></a>
		
		
	</div>

	<div class="col-sm-2 zema">

		<a href="manage.php"><button class="btn-group btn-group-lg upp"  id="add_logo" type="submit">add logo</button></a><br />
		<a href="add_offer.php"><button class="btn-group btn-group-lg upp" id="add_sale" name="" type="submit">add sale</button></a><br />
		<a href="edit_profile.php"><button class="btn-group btn-group-lg upp" id="edit" name="" type="submit">edit profile</button></a><br />
		<a href = "logout.php"><button class="btn-group btn-group-lg upp"  id="log_out" type="submit">logout</button></a>


	</div>	
	
	<div class="col-sm-1">
		</div>
	</div>

<div class="row">
	
	<div class = "col-sm-3">
		
		
	
		
	</div>

  <div class = "vertical col-sm-7">
 <?php foreach($r_deals as $deal):?>
	   

    <div id="p_box" class="box row">
	<div class="col-sm-3">
		
	<img  id="thumb" class="thumbnail"  src="<?php echo $deal -> image_path(); ?> "/><br />

	  	
	</div>
		<div class="col-sm-1" >
	</div>

	
	<div class="col-sm-7 info">
		<div id="shop">
	 </div>
    	<div id="disc">
    	    <?php  echo $deal -> info; ?> 
    	    <br />
    	    <div class="delete" >
    	   <i class="glyphicon glyphicon-remove"></i><a  href="delete_offer.php?id=<?php echo $deal->id; ?>">remove</a> 
            </div>

    	 </div>
  
     </div>

    	
    
	<div class="col-sm-1" >
<a href="https://www.facebook.com/sharer/sharer.php?u=http://users.metropolia.fi/~aschalg/mesh/public/admin/p_profile.php?name=
<?php
echo $deal -> shopp_name;
	  ?>&amp;t=this+is+title">
</a>	  

	
	  
	    	
    </div>
    
  
        	 
    
    
    	</div>


	<?php endforeach; ?>

  	
  </div>

  	
  </div>

<div class = "col-sm-2">
	
</div>

</div>
</div>




<?php include('layouts/footer1.php'); ?>