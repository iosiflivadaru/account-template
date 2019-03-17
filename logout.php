<?php 
if (isset($_GET['logout']) == "true") {
	if(isset($_SESSION['loggedin'])){
		session_unset();
		session_destroy();
	}
}else if (basename($_SERVER['REQUEST_URI']) == "logout.php") {
	// header("location: {$_SERVER['DOCUMENT_ROOT']}");
}
?>