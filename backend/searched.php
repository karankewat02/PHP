<?php
    include "connection.php";
?>

<?php 
    $code = $_POST['code'];
    $allTest = "SELECT * FROM `alltests` WHERE CODE = $code";
    $runAllTest = mysqli_query($connection,$allTest);   
    $tests = mysqli_fetch_array($runAllTest);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../img/logo-noBG.png" type="image/x-icon">

    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>quizHub</title>
</head>

<body>
    <nav>
        <img src="..\img\logo-noBG.png" alt="logo">

        <form action="backend/searched.php" method="post">
            <input type="search" name="" id="" placeholder="Enter the Test Id">
            <input class="fas" type="submit" value="&#xf002">
        </form>
    </nav>
    
    <div class="allTests">
        <h2>Search result </h2>



        <div class="test-grid">

            <div style="position: relative;">
                <i class="fas fa-question"></i>
                <h3><?php echo $tests['title']; ?></h3>
                <div>
                    <p>Organizer - <?php echo $tests['o_name']; ?></p>
                    <p>Starts At - <?php echo $tests['s_time']; ?></p>
                    <p>Ends At - <?php echo $tests['e_time']; ?></p>
                    <p>Date - <?php echo $tests['date']; ?></p>
                </div>
                <form action="../joinQuiz.php">
                    <input type="submit" value="">
                </form>
            </div>
            
    </div>
</div>

    <footer>
        <h3>Contact Developer</h3>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="mailto:karankewat2911@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
    </footer>
</body>

<script src="../script.js"></script>
</html>