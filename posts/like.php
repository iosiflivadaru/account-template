<?php 
    require '../includes/db_connect.inc.php';

    // run query
$sql = "SELECT likes FROM tblposts WHERE postsId = {$_GET['id']}
";

    $result = $db->query($sql); 
    // set array
    $array = array();

    // look through query
    while($row = $result->fetch_assoc()){

    // add each row returned into an array
    $array[] = $row;

    // OR just echo the data:
    echo "this is your id: " . $row['likes'];
    

    }