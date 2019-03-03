<?php
require 'includes/vars.inc.php';
$pageTitle = $appVars['appName'];
require 'includes/header.inc.php';
require 'includes/nav.inc.php';

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
} else {
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-2"><h1>first</h1></div>
        <div class="col-8">
        
            <?php include 'posts/post.php'; ?>

        </div>
        <div class="col-2"><h1>second</h1></div>
    </div>
</div>














<?php
}
include 'chat/chat.php';
require 'includes/footer.inc.php';
?>
