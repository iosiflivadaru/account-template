<?php 

function content() {
    require '../../includes/db_connect.inc.php';

    $sql = "SELECT content FROM tblnotes";
    $result = $db->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo $row['content'];                 
    }  
    
}
content();