<?php 

function post() {
    require '../includes/db_connect.inc.php';
    session_start();

    $content = mysqli_real_escape_string($db, $_POST['name']);

    $sql = "INSERT INTO `tblposts` (`post`, `User_ID`) ";

    $sql .= "VALUES ('
    <br>
    <div class=\"jumbotron p-3\">
    <h3 class=\"d-inline\">{$_SESSION['firstname']} {$_SESSION['lastname']}</h3>
    <i class=\"fas fa-ellipsis-h fa-lg pt-2 d-inline float-right\"></i>
    <hr class=\"my-3\">
    <h5>{$content}</h5>
    <hr class=\"my-3\">
        <div class=\"text-center\">
        <a href=\"posts/like.php\"><i class=\"far fa-heart fa-lg pr-2\"> Like</i></a> <b>|</b> 
            <i class=\"far fa-comment fa-lg pl-2\"> Comment</i>
        </div>
    </div>
    ', '" . $_SESSION['id'] . "')";

    $result = $db->query($sql);
    echo "<pre>";
    echo $sql;
    echo "</pre>";
    header("location: ../home.php");
}

function check() {
    if (trim($_POST['name'], ' ') == '') {
        return "Please enter something";
    } else {
        post();
    }
}

check();

