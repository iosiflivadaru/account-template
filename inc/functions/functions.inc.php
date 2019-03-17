<?php

function login($db){
	$email = $db->real_escape_string($_POST['email']);
	$password = hash('sha512', $_POST['password']);

	$sql = "SELECT * FROM users WHERE email='" . $_POST["email"] . "'" . " AND password=" . "'" . $password . "' LIMIT 1";
	
	$result = $db->query($sql);

	if ($result->num_rows == 1){
		// return true;
		$row = $result->fetch_assoc();
		$_SESSION['firstname'] = $row['first_name'];
		$_SESSION['lastname'] = $row['last_name'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['loggedin'] = 1;
		$_SESSION['role'] = $row['role'];
		header("location: index.php");
	} else {
		return false;
	}
}

function checkLogin() {
	echo "
		<div class='row'>
			<div class='col-lg-3'></div>
			<div class='col-lg-6 mt-3'>
				<div class='alert alert-danger' role='alert'>
					<h4 class='alert-heading'>404 Page Not Found!!!</h4>
					<p>Looks like you can't access this page :'(</p>
					<hr>
					<p class='mb-0'>In order to visit this page you need to<a class='nav-link d-inline p-0' href='index.php' title='login'> Sign in!</a></p>
				</div>
			</div>
			<div class='col-lg-3'></div>
		</div>";
}

function echoActiveClassIfRequestMatches($requestUri){
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	$current_file_name_get = basename($_SERVER['REQUEST_URI'], ".php?logout=true");
	$root = basename($_SERVER['REQUEST_URI'], " ");
	
	if ($current_file_name == $requestUri) {
		echo ' active';
	} else if ($current_file_name_get == $requestUri) {
		echo ' active';
	} else if ($root == $requestUri) {
		echo " active";
	}
}
