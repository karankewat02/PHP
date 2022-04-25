<?php
    include "connection.php";
?>

<?php

    session_start();
    if(isset($_SESSION['code'])){
        $code = $_SESSION['code'];
    }
    $question = $_POST['q'];
    $option1 = $_POST['o1'];
    $option2 = $_POST['o2'];
    $option3 = $_POST['o3'];
    $option4 = $_POST['o4'];
    $correct = $_POST['correct'];
    $submit = $_REQUEST['submit'];

    $addQuestionSQL = "INSERT INTO `$code` (`code`, `question`, `o1`, `o2`, `o3`, `o4`, `correct`) VALUES ('$code', '$question', '$option1', '$option2', '$option3', '$option4', '$correct');";

    $runAddQuestionSQL = mysqli_query($connection,$addQuestionSQL);

    

    if($submit == 'Add more'){
 
        if($runAddQuestionSQL){
            echo '<script>window.location.href = "../addQuestion.html";</script>';
        }
    }

    if($submit == 'Submit'){

        // $addQuestionSQL = "INSERT INTO `$code` (`code`, `question`, `o1`, `o2`, `o3`, `o4`, `correct`) VALUES ('$code', '$question', '$option1', '$option2', '$option3', '$option4', '$correct');";

        // $runAddQuestionSQL = mysqli_query($connection,$addQuestionSQL);
        
        if($runAddQuestionSQL){
            echo '<script>window.location.href = "quizSubmit.php";</script>';
        }

    }


?>