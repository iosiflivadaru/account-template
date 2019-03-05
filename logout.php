<?php 
if (isset($_GET['logout']) == "true") {
	if(isset($_SESSION['loggedin'])){
		session_unset();
		session_destroy();
	}
}
?>