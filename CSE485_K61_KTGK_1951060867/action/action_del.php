<?php
    $id = $_GET['id'];

    include "../form/config.php";

    $sql = "DELETE FROM cars WHERE vehice_id = $id";
    $result = mysqli_query($conn, $sql);
    echo $sql;
    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok'. $conn -> error;
    }

    mysqli_close($conn);
    header("location:../index.php") ;  
?>