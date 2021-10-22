<?php
    $upvehice = $_POST['vehice'];
    $uplisence = $_POST['lisence'];
    $upmodel = $_POST['model'];
    $update = $_POST['date'];
    $upctype = $_POST['ctype'];
    $updrate = $_POST['drate'];
    $upwrate = $_POST['wrate'];
    $upstatus = $_POST['status'];
    $STT = $_POST['id'];
    include "../form/config.php";      
    $sql = "UPDATE cars SET vehice_id = '$upvehice', license_no = '$uplisence', model = '$upmodel', year = '$update', ctype = '$upctype', drate = '$updrate', wrate = '$upwrate', status = '$upstatus' WHERE vehice_id='$STT'";
    $result = mysqli_query($conn, $sql);
    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok';
    }   
    mysqli_close($conn);
    header("location: ../index.php");
?>