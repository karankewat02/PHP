<?php
    include "backend/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/logo-noBG.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>quizHub</title>
</head>

<body>
<?php
    
    session_start();
    $A_name =$_SESSION['a_name'];
    $A_email =$_SESSION['a_email'];
    $code =$_SESSION['code'];
    $startTime =$_SESSION['s_time'];
    $testInfoSQL = "SELECT * FROM `alltests` WHERE CODE = '$code';";
    $runTestInfoSQL = mysqli_query($connection,$testInfoSQL);
    $TestInfo = mysqli_fetch_array($runTestInfoSQL);
        
    
?>
    <nav style = "box-sizing:border-box; position:fixed; top:0; width :100%;">
        <img src="img/logo-noBG.png" alt="logo">

        <p style ="font-size:1.5rem;" id="timeLeft">time</p>
    </nav>
    

    <h1 style="text-align: center; padding: 1rem; margin-top:20vh;"><?php echo $TestInfo['title'] ?></h1>
    
    
    <form  action="backend/evaluation.php" method="post">

    
<?php 

    $questionsSQL = "SELECT * FROM `$code`";
    $runQuestionsSQL = mysqli_query($connection,$questionsSQL);
    $totalQuestion =  mysqli_num_rows($runQuestionsSQL);
    $i =1;    


    while($allQuestions = mysqli_fetch_array($runQuestionsSQL))
    { ?>
    

        
    <div class="addquestion">
        <h2>Quesion No. <?php echo ($i);?></h2>

        <h3><?php echo htmlspecialchars($allQuestions['question'],ENT_QUOTES) ?></h3>            
        
            <div class="options">
                <div>
                    <label for="option1"><?php echo htmlspecialchars($allQuestions['o1'],ENT_QUOTES) ?></label>
                    <input type="radio" name="<?php echo ($i);?>" value="1" id="option1" > 
                </div>

                <div>
                    <label for="option2"><?php echo htmlspecialchars($allQuestions['o2'],ENT_QUOTES) ?></label>
                    <input type="radio" name="<?php echo ($i);?>" value="2" id="option2" > 
                </div>

                <div>
                    <label for="option3"><?php echo htmlspecialchars($allQuestions['o3'],ENT_QUOTES) ?></label>
                    <input type="radio" name="<?php echo ($i);?>" value="3" id="option3" >
                </div>

                <div>
                    <label for="option4"><?php echo htmlspecialchars($allQuestions['o4'],ENT_QUOTES) ?></label>
                    <input type="radio" name="<?php echo ($i);?>" value="4" id="option4" >
                </div>

            </div>

        
    </div>
    
    
    <?php 
        $i++;
        }
    ?>

   
            <input type="hidden" name="totalQ" value="<?php echo ($i);?>">

            <input class="button" id="submitBtn" type="submit" value="Submit"  style="position:absolute; left:50%; transform:translateX(-50%); margin-bottom:10vh;">

    </form>

    <script>
    const startingTime = <?php echo $TestInfo['duration'] ?>;

    let time = startingTime * 60;

    const counter = document.getElementById("timeLeft");
    const submitBtn = document.getElementById("submitBtn");

    setInterval(updateTime,1000);

    function updateTime(){

        const minutes = Math.floor(time/60);
        let seconds = time % 60;

        seconds = seconds<10 ? '0' + seconds : seconds;

        counter.innerHTML = `${minutes} : ${seconds}`;
        
        if(time < 300){
            counter.style.color = "red";
        }

        time--;

        if(time == 0){
            submitBtn.click();
        }   
    }

    

    </script>

</body>

<script src="script.js"></script>

</html>