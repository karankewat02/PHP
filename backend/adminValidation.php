<?php
    include "connection.php";
?> 
    
    
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $myusername = "admin";
    $mypassword = "12345";
    
    if($username == $myusername && $password == $mypassword){ 
        echo '<script>window.location.href = "../backend/admin.php";</script>';
    }
    else{
            echo '<script>alert("Wrong Credentials ! ");</script>';
            echo '<script>window.location.href = "../index.html";</script>';
    }
 
?>