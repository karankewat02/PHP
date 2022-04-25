<?php
    include "../connection.php";
?>

<?php 

    session_start();
    $code = $_SESSION['code'];




    $allTest = "SELECT * FROM `alltests`";
    $runAllTest = mysqli_query($connection,$allTest);
  
    
    while($tests = mysqli_fetch_array($runAllTest)){ 

        $deleteRecordSQL = "DELETE FROM `alltests` WHERE code = '$code'";
        $dropTable = "DROP TABLE `$code`";
    
       mysqli_query($connection,$deleteRecordSQL);
       mysqli_query($connection,$dropTable);

    }



    // echo '<script>window.location.href = "../admin.php";</script>';

?>