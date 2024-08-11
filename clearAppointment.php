<?php

include '_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    echo $id;
    $sql = "Delete FROM `appointment1` where id ='$id'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_affected_rows($conn);
    if ($count > 0){
        header("Location: expertDashboard.php");
    }
    else{
        echo "Couldnt be deleted";

    }
}
?>