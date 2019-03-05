<?php
require 'inc/layout/header.inc.php';
?>

<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4 mt-3">
        <div>

<?php
    $success = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Required field names
        $required = array('email', 'password');

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
            $status = login($db);

            if ($status) {
                $success = true;
            } else {
                echo '<div class="alert alert-warning mb-3 text-center">Could not log you in. Please try again.</div>';
            }
        }
    }
    $db->close();
?>
            <form class="forms" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <h1 class="h5 mb-3 font-weight-normal">Sign In To <?=$config['appName'] ?></h1>
                <label for="inputEmail">Your Email Address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <br>
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

                <button class="button font-weight-bold mb-0" type="submit">Sign in</button>
            </form>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div><!-- end row -->


<?php
require 'inc/layout/footer.inc.php';
?>