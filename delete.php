<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $pid = $_GET['deleteid'];
    $sql = "DELETE FROM `products` WHERE pid = $pid";
    $result = mysqli_query($con, $sql);
    if($result){
        // echo "delete successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
