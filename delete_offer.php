<?php require_once("includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
	// must have an ID
  if(empty($_GET['id'])) {
  	$session->message("No offer ID was provided.");
    redirect_to('index.php');
  }

  $offer = Offer::find_by_id($_GET['id']);
  if($offer && $offer->destroy()) {
    $session->message("The photo {$photo->filename} was deleted.");
    redirect_to('profile.php');
  } else {
    $session->message("The offer could not be deleted.");
    redirect_to('profile.php');
  }
  
  
  
?>
<?php if(isset($database)) { $database->close_connection(); } ?>
