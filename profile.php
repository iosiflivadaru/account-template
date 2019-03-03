<?php
/* profile.php */
require 'includes/vars.inc.php';
$pageTitle = "Profile - " . $appVars['appName'];
require "includes/header.inc.php";
require "includes/nav.inc.php";

if ($loggedIn == 0) {
    echo "
	<div class='container'>
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
		</div>
	</div>

	<div class='form-div-footer fixed-bottom'>
		<div class='forms p-0'>";

    require 'includes/footer.inc.php';

    echo " </div></div> ";
}

if ($loggedIn == 1) {

    $id = $_SESSION['id'];

    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        // first query the database and get info for the user id supplied in URL
        $sql = "SELECT * FROM users WHERE id=" . $_SESSION['id'];

        $result = $db->query($sql);

        $row = $result->fetch_assoc();

        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $phone = $row['phone'];
    }
    ?>
	<div class="container">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4 mt-3">
	<div class="form-div">
	<?php

    $success = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Required field names
        $required = array('firstname', 'lastname', 'email', 'phone');

        // Loop over field names, make sure each one exists and is not empty
        $error = false;
        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                $error = true;
            }
        }

        if ($error) {
            echo '<div class="alert alert-warning">All fields are required.</div>';
        } else {

            $sql = "UPDATE users SET first_name='" . $_POST['firstname'] .
                "',last_name='" . $_POST['lastname'] .
                "',email='" . $_POST['email'] .
                "',phone='" . $_POST['phone'] .
                "' WHERE id=" . $id;

            $result = $db->query($sql);

            if ($db->error) {
                echo '<div class="alert alert-failure">' . $db->error . '</div>';
            } else {
                // reset the session variables
                $_SESSION['firstname'] = $_POST['firstname'];
                $_SESSION['lastname'] = $_POST['lastname'];
                echo '<div class="alert alert-success">Your ' . $appVars["appName"] . ' Profile has been updated.</div>';
                $success = true;
            }
        }
    }

    $db->close();

    if (!$success) {?>

		<form class="forms" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
		<h4>My <?php echo $appVars['appName']; ?> Profile</h4>

		<label for="firstname">First Name</label>

			<input class="form-control" type="text" id="firstname" name="firstname" size="30" maxlength="20" value="<?php echo $first_name; ?>">

			<label for="lastname">Last Name</label>

			<input class="form-control" type="text" id="lastname" autocomplete="off" name="lastname" size="20" maxlength="20" value="<?php echo $last_name; ?>">


			<label for="email">Email</label>

			<input class="form-control" type="email" id="email" name="email" size="40" maxlength="60" value="<?php echo $email; ?>">


			<label for="email">Phone</label>

			<input class="form-control" type="text" id="phone" name="phone" size="40" maxlength="60" value="<?php echo $phone; ?>">



				<input class="button font-weight-bold" type="submit" value="Save Changes">

	</form>
	<?php
}
    ?>
	</div>
	<div class="col-lg-4"></div>
	</div>

<?php
}
?>


</div>
<?php require_once 'includes/footer.inc.php'?>