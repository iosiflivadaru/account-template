<?php
require 'includes/vars.inc.php';
$pageTitle = "Register " . $appVars['appName'];
require 'includes/header.inc.php';
require 'includes/nav.inc.php';
?>
<div class="container">
<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4 mt-3">
<div class="form-div">
<?php 
$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	// Required field names
	$required = array('firstname', 'lastname', 'email', 'password', 'phone');

	// Loop over field names, make sure each one exists and is not empty
	$error = false;
	foreach($required as $field) {
		if (empty($_POST[$field])) {
			$error = true;
		}
	}

	if ($error) {
		echo '<div class="alert alert-warning">All fields are required.</div>';
	} else {
		$first_name = $db->real_escape_string($_POST['firstname']);
		$last_name = $db->real_escape_string($_POST['lastname']);
		$email = $db->real_escape_string($_POST['email']);
		$phone = $db->real_escape_string($_POST['phone']);
		$password = hash('sha512', $_POST['password']);
		$sql = "INSERT INTO users (first_name,last_name,email,password,phone) VALUES ('$first_name' ,'$last_name','$email','$password','$phone')";
			// echo $sql;
		$result = $db->query($sql);

		if($db->error){
			echo '<div class="alert alert-danger">' . $db->error . '</div>';
		} else {
			echo '<div class="alert alert-success m-0">Your registration has been successfully processed. You can now <a class="nav-link d-inline p-0" href="index.php" title="login">login!</a></div>';
			$success = true;
		}
	}


}

if (!$success) { ?>
	<form class="forms" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
	<h5>Sign Up NOW!</h5>


		<label for="firstname">First Name</label>
				
		<input class="form-control" type="text" id="firstname" name="firstname" placeholder="First Name" size="30" maxlength="30" value="<?php if(isset($_POST["firstname"])){echo $_POST["firstname"];} ?>">
	
		<label for="lastname">Last Name</label>
	
		<input class="form-control" type="text" id="lastname" autocomplete="off" placeholder="Last Name" name="lastname" size="30" maxlength="30" value="<?php if(isset($_POST["lastname"])){echo $_POST["lastname"];} ?>">

		<label for="phone">Cell Phone</label>
	
		<input class="form-control" type="text" id="phone" autocomplete="off" placeholder="Phone Number" name="phone" size="30" maxlength="30" value="<?php if(isset($_POST["phone"])){echo $_POST["phone"];} ?>">
	
		<label for="email">Email</label>
		
		<input class="form-control" type="email" id="email" placeholder="Email" name="email" size="30" maxlength="40" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>">
	
		<label for="password">Password</label>
	
		<input class="form-control" type="password" id="password" placeholder="Password" name="password" size="30" maxlength="30" value="<?php if(isset($_POST["password"])){echo $_POST["password"];} ?>">
		
		<input class="button font-weight-bold mb-0" type="submit" value="Register">
	
		</form>
	</div>
</div>	
<div class="col-lg-4"></div>
</div>
<?php } ?>
</div>


<?php $db->close(); ?>

<?php require 'includes/footer.inc.php'; ?>
