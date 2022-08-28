<div id="foo"  class="container">
	<footer id="footer"  class="row">
		<nav class="col-sm-4"></nav>
		<nav   class="col-sm-7">
			<ul id="fo">
				<li>
					<p class="copy" id="foot">
											&copy saleberg 2014
					</p>
				</li>
				<li  class="ho">
					<a class="home" id="foot" href="index.php"> home</a>
				</li>

				<li id="mob_footer" class="about">
					<a id="foot" href="about.php"> about</a>
				</li>
				<li id="mob_footer" class="about">
					<a  id ="foot" href="bug.php"> contact</a>
				</li>
				<?php

					if($session->nav()){ ?>
						<li class="foot_log">
							<a  id="nav_link" href = "logout.php">logout</a>

						</li>
						<li class="foot_log">
							<a id="nav_link" href = "profile.php">my profile</a>

						</li>

					<?php	}else{ ?>

						<li class="foot_log">
							<a  id="nav_link" href="register_shop.php">register</a>
						</li>
						<li class="foot_log">
							<a id="nav_link" href="login.php">login</a>
						</li>
						


					<?php	} ?>

			</ul>
			
		</nav>
		<!-- Start of Amazon Publisher Studio Loader -->
		    <script>  window.amznpubstudioTag = "saleberg-20";  </script>    <!-- Do not modify the following code ! -->  <script async="true" type="text/javascript" src="http://ps-us.amazon-adsystem.com/domains/saleberg-20_f71f651f-7d94-41ec-b431-4797c9b66fb6.js" charset="UTF-8"></script>  
		<!-- End of Amazon Publisher Studio Loader -->  

	</footer>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
<script src="js/textarea.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>
<?php
if (isset($database)) { $database -> close_connection();
}
 ob_end_flush();
?>