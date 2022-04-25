<?php
    include "../connection.php";
?>

<?php

    session_start();
    $code = $_SESSION['code'];

    $s_time = $_POST['s_time'];
    $e_time = $_POST['e_time'];



    $query = " UPDATE `alltests` SET `s_time`= '$s_time' , `e_time`= '$e_time' WHERE code = $code ";

    mysqli_query($connection,$query);


    echo '<script>window.location.href = "../admin.php";</script>';

?>