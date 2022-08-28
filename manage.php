<?php
require_once ('includes/initialize.php');

if (!$session -> is_logged_in()) { redirect_to("login.php");
}
?>
<?php

if (isset($_POST['submit'])) {

	$tmp_file = $_FILES['file']['tmp_name'];
	$target = basename($_FILES['file']['name']);
	$upload_dir = "img/" . $target;
	if (move_uploaded_file($tmp_file, $upload_dir)) {
		$message = "File uploaded successfully.";
	} else {
		$error = $_FILES['file']['error'];
		$message = $upload_errors[$error];

	}

	global $database;

	$id_1 = $_SESSION['id'];

	$sqll = "UPDATE shops SET logo = '{$target}' WHERE shop_id = '{$id_1}'";

	if (mysql_query($sqll)) {
		redirect_to('profile.php');

	} else {

		echo "There is still problem";
	}

} else {

}
?>
<?php
	include ('layouts/header.php');
?>

<div id = "main">
	<div class="container">
		<div class="row">

			<form class="form-group" action="manage.php" method="post" name="upload" id="register" enctype="multipart/form-data">
				<h3 class="form-signin-heading" id = "form_heading">upload logo</h3>

				<p>
					<input class="form-control" type="file" id="file" name="file"   accept="image/*"  required="required"/>
				</p>

				<button class=" up btn-info" name="submit" type="submit">
					add
				</button>
			</form>

		</div>
		<!-- /container -->

	</div>
</div>

<?php
	include ('layouts/footer1.php');
?>