<nav class="navbar navbar-dark bg-dark navbar-expand-lg position-sticky sticky-top">

<?php 
        if (isset($_SESSION['loggedin'])) {
          $loggedIn = 1;
        } else {
          $loggedIn = 0;
        }

        if ($loggedIn == 0) {
          ?>
  <a class="navbar-brand" href="index.php"><h3 class="text-light-blue"><?php echo $appVars['appName']; ?></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Sign In <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Sign Up</a>
      </li>
      </ul>
 
<?php } ?>    


<?php 
 if ($loggedIn == 1) { ?>
        <a class="navbar-brand " href="home.php"><h3 class="text-light-blue"><?php echo $appVars['appName']; ?></h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">   
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="profile.php">View Profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php">Sign Out</a>
        </li>
<?php } ?>  

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn-outline-light-blue mt-3 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
