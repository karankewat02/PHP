<?php
    
    include 'connection.php';

?>

<?php
    $delSQL = "truncate table thought";
    $insertThought = "INSERT INTO `thought` (`username`, `thought`, `date`) VALUES ('TEMP', 'TEMP', current_timestamp())";

    mysqli_query($connection,$delSQL);
    mysqli_query($connection,$insertThought);

    header('location:../admin.php')
?>