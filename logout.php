<?php 
require 'includes/vars.inc.php';
require "includes/header.inc.php";
if(isset($_SESSION['loggedin'])){
	session_unset();
	session_destroy();
}
require 'includes/nav.inc.php';
?>
<div class="container">
<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
	<div class="alert alert-success mt-3"> <p class="text-center m-0"> You successfully signed out!<a class="nav-link d-inline p-0" href="index.php" title="login"> Sign in!</a></p></div>
</div>

<div class="col-lg-4"></div>
</div>
</div>

<?php 
			require 'includes/footer.inc.php';
			?>