<?php
    include "workerCon.php";

    $client = $_GET['client'];
    if(!isset($client)){
        header("location: ../worker.php");
    }
    $delete = mysqli_query($conn, "DELETE FROM `worker` WHERE `crud_id` = '$client'");

    
    if($delete){
        header("location: ../worker.php");
    }

?>