<?php
    include "../connection.php";
?>

<?php

    session_start();
    $code = $_SESSION['code'];

    $deleteRecordSQL = "DELETE FROM `alltests` WHERE code = '$code'";
    $deleteAttendeeRecordSQL = "DELETE FROM `allattendies` WHERE code = '$code'";
    $dropTable = "DROP TABLE `$code`";

    $runDeleteRecordSQL = mysqli_query($connection,$deleteRecordSQL);
    $runDeleteRecordSQL = mysqli_query($connection,$deleteAttendeeRecordSQL);
    $runDropTable = mysqli_query($connection,$dropTable);

    echo '<script>window.location.href = "../admin.php";</script>';

?>