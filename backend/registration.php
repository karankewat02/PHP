<?php
    
    include 'connection.php';

?>
<?php

 
   
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $name = $_POST['name']; 


    $sql = "SELECT `username` FROM user WHERE username = '$username'";

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

        $reg = "INSERT INTO `user` (`username`,`password`,`name`) VALUES('$username','$password','$name');";
        $dataTable = "CREATE TABLE `link-box`.`$username` ( `title` VARCHAR(250) NOT NULL , `url` VARCHAR(1000) NOT NULL , `category` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;";
        $tempValueFav = "INSERT INTO `$username` (`title`, `url`, `category`) VALUES ('TEMP', 'TEMP', 'fav')";
        $tempValueYt = "INSERT INTO `$username` (`title`, `url`, `category`) VALUES ('TEMP', 'TEMP', 'yt')";
        $tempValueLinkedIn = "INSERT INTO `$username` (`title`, `url`, `category`) VALUES ('TEMP', 'TEMP', 'linkedin')";
        $tempValueInsta = "INSERT INTO `$username` (`title`, `url`, `category`) VALUES ('TEMP', 'TEMP', 'insta')";
        $tempValueMisc = "INSERT INTO `$username` (`title`, `url`, `category`) VALUES ('TEMP', 'TEMP', 'misc')";
        ?>
        <script>
            alert("Resitration Done !");
        </script>
        <?php
        mysqli_query($connection,$reg);
        mysqli_query($connection,$dataTable);
        mysqli_query($connection,$tempValueFav);
        mysqli_query($connection,$tempValueYt);
        mysqli_query($connection,$tempValueLinkedIn);
        mysqli_query($connection,$tempValueInsta);
        mysqli_query($connection,$tempValueMisc);
        header('location:../login.html');
       
    }
 
  


?>