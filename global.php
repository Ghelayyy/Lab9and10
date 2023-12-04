<?php
function errorCheck($sql,$conn,$result){
    if (!($result == TRUE)) {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>