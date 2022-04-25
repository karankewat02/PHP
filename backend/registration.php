<?php
    
    include 'connection.php';

?>
<?php

 
   
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $name = $_POST['name']; 
    $email = $_POST['email']; 


    // echo $email;

    $sql = "SELECT `username` FROM `user` WHERE username = '$username'";

    $result = mysqli_query($connection,$sql); 
    
    $num = mysqli_num_rows($result);
    
    if($num == 1){
?>
        <!-- echo"username already taken"; -->
        <script>
            alert("Username Alreay Taken");
        </script>
        
        <?php
        
        header('location:error.html');
    }

        

    else{

        $reg = "INSERT INTO `user` (`name`, `username`, `password`, `email`) VALUES ('$name', '$username', '$password', '$email')";

        ?>
        <script>
            alert("Resitration Done !");
        </script>
        <?php
        mysqli_query($connection,$reg);

        header('location:../login.html');
       
    }
 
  


?>