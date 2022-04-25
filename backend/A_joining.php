<?php
    include "connection.php";
?>

<?php

    $A_name = $_POST['a_name'];
    $A_email = $_POST['a_email'];
    $code = $_POST['code'];
    $startTime = $_POST['s_time'];

    $quizValidation = "SELECT * FROM `alltests` WHERE code = '$code'";
    $runQuizValidation = mysqli_query($connection,$quizValidation);
    $quizValidationResult = mysqli_fetch_array($runQuizValidation);
    $num = mysqli_num_rows($runQuizValidation);

    
    
// DATE AND TIME VALIDATION
    $curDate = date("Y-m-d");
    $curtime = date("h:i:s");
    $testDate = date("Y-m-d", strtotime($quizValidationResult['date'])); 
    $testStart = date("h:i:s", strtotime($quizValidationResult['s_time']));
    $testEnd = date("h:i:s", strtotime($quizValidationResult['e_time']));


    // DATE VALIDATION 
    if(strtotime($curDate) == strtotime($testDate)){
        
        // STARTING TIME VALIDATION
        if(strtotime($curtime) > strtotime($testStart)){

            // ENDING TIME VALIDATION

            if(strtotime($curtime) < strtotime($testEnd)){
               
                // CODE VALIDATION
                if($num == 1){    
                                
                    session_start();
                    $_SESSION['a_name'] = $A_name;
                    $_SESSION['a_email'] = $A_email;
                    $_SESSION['code'] = $code;
                    $_SESSION['s_time'] = $startTime;
                    echo '<script>window.location.href = "../quiz.php";</script>';
                }
                else{
                    echo '<script>alert("Wrong Code ! ");</script>';
                    echo '<script>window.location.href = "../main.php";</script>';
                }
            }else{
                echo '<script>alert("Test Ended");</script>';
                echo '<script>window.location.href = "../main.php";</script>';
            }

                


        }else{
            echo '<script>alert("Test Not Started");</script>';
            echo '<script>window.location.href = "../main.php";</script>';
        }

        

    }else{
        echo '<script>alert("Today is not the day of test. ");</script>';
        echo '<script>window.location.href = "../main.php";</script>';
    }




?>
