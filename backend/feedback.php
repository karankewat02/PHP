<?php
    
    include 'connection.php';

?>
<?php
 session_start();
    if(isset($_SESSION['username'])){

        $username = $_SESSION['username'];
        $msg = $_POST['msg'];
        $date = date('Y-m-d H:i:s');

        $feedback = "INSERT INTO `feedback` (`username`, `review`, `date`) VALUES ('$username', '$msg', '$date')";
        mysqli_query($connection,$feedback);
?>
<?php
    header('location:../public.php');
    }
?>