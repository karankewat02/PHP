<?php
    include "../connection.php";
?>

<?php

    session_start();
    $code = $_SESSION['code'];

    $date = $_POST['date'];



    $query = " UPDATE `alltests` SET `date`= '$date' WHERE code = $code ";

    mysqli_query($connection,$query);

    echo '<script>window.location.href = "../admin.php";</script>';

?>