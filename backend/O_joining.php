<?php
    include "connection.php";
?> 
    
    
<?php
    $code = $_POST['code'];
    $o_email = $_POST['o_email'];


    $quizValidation = "SELECT * FROM `alltests` WHERE code = $code && o_email = '$o_email'";
    $runQuizValidation = mysqli_query($connection,$quizValidation);

    $num = mysqli_num_rows($runQuizValidation);
    
    if($num == 1){    
        
            session_start();
            $_SESSION['o_email'] = $o_email;
            $_SESSION['code'] = $code;

            echo '<script>window.location.href = "../organizerPage.php";</script>';
    }
    else{
            echo '<script>alert("Wrong Credentials ! ");</script>';
            echo '<script>window.location.href = "../main.php";</script>';
        }
 

?>