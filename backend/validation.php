<?php
    include 'connection.php';
?>
<?php
 
    session_start();

    $username = $_POST['username']; 
    $password = $_POST['password']; 

    if($username == "admin" && $password == "0000"){
        header('location:../admin.php');
    }

    $sql = "SELECT `username`,`password` FROM user WHERE `username` = '$username' && `password` = '$password' ";

    $result = mysqli_query($connection,$sql); 
    
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        $_SESSION['username']=$username;
        
        header('location:../public.php');
    }

    
    else{ 

?>

        <script>
            alert("Invalid Credentials");
        </script>

<?php
        // header('location:error.html');
    }

?>