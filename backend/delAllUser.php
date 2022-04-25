<?php
    
    include 'connection.php';

?>

<?php
    $delSQL = "truncate table user";
    $insertUser = "INSERT INTO `user` (`name`, `username`, `password`, `email`) VALUES ('TEMP', 'TEMP', 'TEMP', 'TEMP')";

    mysqli_query($connection,$delSQL);
    mysqli_query($connection,$insertUser);

    header('location:../admin.php')
?>