<?php
    
    include 'connection.php';

?>
<?php
 session_start();
    if(isset($_SESSION['username'])){

        $username = $_SESSION['username'];
        $msg = $_POST['msg'];
        $date = date('Y-m-d H:i:s');
    

        $add = "INSERT INTO `thought` (`username`, `thought`, `date`) VALUES ('$username', '$msg', '$date')";
        mysqli_query($connection,$add);

?>
<script>
    alert("Added !!");
</script>
<?php
    header('location:../public.php');
    }
?>