<?php
    include "../connection.php";
?>

<?php

    session_start();
    $code = $_SESSION['code'];

    $deleteRecordSQL = "TRUNCATE `allattendies`";
    mysqli_query($connection,$deleteRecordSQL);


    echo '<script>window.location.href = "../admin.php";</script>';
    
?>