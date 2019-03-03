<?php 

function post() {
    require '../includes/db_connect.inc.php';

    $sql = "SELECT post FROM tblposts ORDER BY postsId DESC";
    $result = $db->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo $row['post'];                 
    }  
    
}
post();