<?php
    include "connection.php";
?>

<?php

    $name = $_POST['name_o'];
    $email = $_POST['email_o'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $Stime= $_POST['s_time'];
    $Etime= $_POST['e_time'];
    $code = rand(0,9999);


    $codeChecker = "SELECT `code` FROM `alltests` where `code` = '$code';";

    $runCodeChecker = mysqli_query($connection,$codeChecker);

    $num = mysqli_num_rows($runCodeChecker);
    
    if($num == 1){    

            header("HTTP/1.0 500 Internal Server Error");

    }

    else{
        $createQuizSQL = "INSERT INTO `alltests` (`o_name`, `o_email`, `title`, `date`,`duration`, `s_time`, `e_time`, `code`) VALUES ('$name', '$email', '$title', '$date','$duration', '$Stime', '$Etime', '$code')";

        $runCreateQuizSQL = mysqli_query($connection,$createQuizSQL);

        $quizTableSQL = "CREATE TABLE `quizhub`.`$code` ( `code` INT(10) NOT NULL , `question` VARCHAR(500) NOT NULL , `o1` VARCHAR(250) NOT NULL , `o2` VARCHAR(250) NOT NULL , `o3` VARCHAR(250) NOT NULL , `o4` VARCHAR(250) NOT NULL , `correct` INT(2) NOT NULL ) ENGINE = InnoDB;";

        $runTableSQL = mysqli_query($connection,$quizTableSQL);

        session_start();
        $_SESSION['code'] = $code;

        echo '<script>window.location.href = "../addQuestion.html";</script>';
    }
    
?>