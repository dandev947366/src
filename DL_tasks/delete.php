<?php

if (isset($_GET['sid'])) {
   
    $id = intval($_GET['sid']); 

    include 'dbshell.php';

    $del = "DELETE FROM studentsinfo WHERE id=$id";

    if (mysqli_query($conn, $del)) {
        header("Location: ex7.php");
        exit(); 
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Delete unsuccessfully";
}
?>
