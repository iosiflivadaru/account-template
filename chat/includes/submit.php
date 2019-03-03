
<?php 

function main() {
    require '../../includes/db_connect.inc.php';

    session_start();

    $content = mysqli_real_escape_string($db, $_POST['name']);



    $sql = "INSERT INTO `tblnotes` (`content`, `User_ID`) VALUES 
    ('<div class=\'msgln\'>".$_SESSION['firstname']."<br></div>
    <div class=\'msg\'><span class=\'content\'>".$content."</span><span class=\'timeSent\'>".date("g:i A")."</span></div>
    
    ', '" . $_SESSION['id'] . "')";

    $result = $db->query($sql);
}

function check() {
    if (trim($_POST['name'], ' ') == '') {
        return "Please enter something";
    } else {
        main();
    }
}

check();


?>


