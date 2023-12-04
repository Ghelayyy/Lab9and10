<?php
session_start();
include('configure.php');
include('global.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contacts WHERE id='$id'";
    $result = $conn->query($sql);
   

    

        if ($result == TRUE) {
            $_SESSION['message'] = $name . "'s info updated successfully.";
            header("Location: read.php");
            exit();
        }
   
}
?>