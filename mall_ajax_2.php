<?php require_once("includes/initialize.php"); ?>


<?php                                        
                                             
$mal = $_GET['q'];  

 
$mash = Offer::find_by_mall($mal);

   $r_mash = array_reverse($mash)

 ?>

   
    	
<?php foreach($r_mash as $deal): ?>
	

   
    <div class="box row">
	<div class="col-md-3">
		
	<a href = "p_profile.php?name=<?php echo $deal -> shopp_name; ?> "><img  id="thumb" class="thumbnail"  src="<?php echo $deal -> image_path(); ?> "/></a><br />
	
		 
	</div>
		<div class="col-md-1" >
	</div>

	<div id = "alll">
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
    	 <div>
    	     	 <div>

      


     </div>
          </div>


    	
    
	<div class="col-md-1 sahre" >

	
	  
	    	
    </div>
    
  
        	 
    
    
    	</div>
<?php endforeach; ?>
    	

    	