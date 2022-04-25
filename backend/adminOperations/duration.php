<?php
    include "../connection.php";
?>

<?php

    session_start();
    $code = $_SESSION['code'];

    $duration = $_POST['duration'];



    $query = " UPDATE `alltests` SET `duration`= '$duration' WHERE code = $code ";

    mysqli_query($connection,$query);


    echo '<script>window.location.href = "../admin.php";</script>';

?>