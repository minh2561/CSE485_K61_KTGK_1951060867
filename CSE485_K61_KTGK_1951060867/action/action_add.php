<?php
    $upvehice = $_POST['vehice'];
    $uplisence = $_POST['lisence'];
    $upmodel = $_POST['model'];
    $update = $_POST['date'];
    $upctype = $_POST['ctype'];
    $updrate = $_POST['drate'];
    $upwrate = $_POST['wrate'];
    $upstatus = $_POST['status'];

    include "../form/config.php";   
    
    $sql = "INSERT INTO cars (vehice_id, license_no, model, year, ctype, drate, wrate, status) 
    VALUES ('$upvehice', '$uplisence', '$upmodel', '$update', '$upctype', '$updrate', '$upwrate', '$upstatus')";
    
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok'. $conn->error;
    }   
    mysqli_close($conn);
    header("location: ../index.php");
?>