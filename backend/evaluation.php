<?php
    include "connection.php";
?>

<?php

    session_start();
    $A_name =$_SESSION['a_name'];
    $A_email =$_SESSION['a_email'];
    $code =$_SESSION['code'];
    $startTime =$_SESSION['s_time'];
    $endTime = date("h:i:s");
    $totalQuestions = $_POST['totalQ'];
    $marks = 0;
    $i = 1;
    $correctAnsSQL = "SELECT * FROM `$code`;";
    $runCorrectAnsSQL = mysqli_query($connection,$correctAnsSQL);

    while($allCorrectAns = mysqli_fetch_array($runCorrectAnsSQL)){
        $ans = $_POST[$i];
        $correctAns =$allCorrectAns['correct'];
        
        if($ans == $correctAns){
            $marks++;
        }
        $i++;
    }
 

    $attendeInfoSQL = "INSERT INTO `allattendies`(`name`, `email`, `code`, `marks`, `s_time`, `f_time`) VALUES ('$A_name','$A_email','$code','$marks','$startTime','$endTime');";
    $runAttendeInfoSQL = mysqli_query($connection,$attendeInfoSQL);
   
    echo '<script>window.location.replace("../exitQuiz.html");</script>';
    
?>