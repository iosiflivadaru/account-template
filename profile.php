<?php
/* profile.php */
require "inc/layout/header.inc.php";

if ($loggedIn == 0) {
   checkLogin();
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
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4 mt-3">
	
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

            $sql = "UPDATE users SET 
                first_name='{$_POST['firstname']}'
                ,last_name='{$_POST['lastname']}' 
                ,email='{$_POST['email']}'
                ,phone='{$_POST['phone']}'
                 WHERE id=$id";

            $result = $db->query($sql);

            if ($db->error) {
                echo '<div class="alert alert-failure">' . $db->error . '</div>';
            } else {
                // reset the session variables
                $_SESSION['firstname'] = $_POST['firstname'];
                $_SESSION['lastname'] = $_POST['lastname'];
                echo '<div class="alert alert-success mb-0">Your ' . $config["appName"] . ' Profile has been updated.</div>';
                $success = true;
            }
        }
    }

    $db->close();

    if (!$success) {?>

		<form class="forms" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
		<h4>My <?php echo $config['appName']; ?> Profile</h4>

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
	</div> <!-- end row -->

<?php
}
?>

<?php require 'inc/layout/footer.inc.php'?>