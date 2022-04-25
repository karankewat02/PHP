<?php

    include 'connection.php';

?>
<?php
$username = $_POST['username'];

$namesql = "SELECT `name` FROM `user` WHERE `username` = '$username';";
$namesqlrun = mysqli_query($connection,$namesql);
$namefetch = mysqli_fetch_array($namesqlrun);
$name = $namefetch[0];

$emailsql ="SELECT `email` FROM `user` WHERE `username` = '$username'; ";
$emailsqlrun = mysqli_query($connection,$emailsql);
$emailfetch = mysqli_fetch_array($emailsqlrun);
$email = $emailfetch[0];

$scoresql = "SELECT `score` FROM `user` WHERE `username` = '$username';";
$scoresqlrun=mysqli_query($connection,$scoresql);
$scorefetch=mysqli_fetch_array($scoresqlrun);
$score = $scorefetch[0];
$scoreadd = $score + 10;
$updatesql = "UPDATE `user` SET `score` = '$scoreadd' WHERE `username` = '$username' ";
$updated = mysqli_query($connection,$updatesql);

?>
<?php

    $row = mysqli_num_rows($namesqlrun);
    if($row  == 1){

    

?>


<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="img/Untitled_design__3_-removebg-preview.png" type="image/x-icon">
            <script src="js/jquery-3.6.0.min.js"></script>
            <link rel="stylesheet" href="confirmation.css">            
        </head>
        
        <body>
        
        <a href="index.html">Home |</a>

        <h1>CLAIM YOUR BENIFIT</h1><br><br><br><br><br><br>
        <h3>Your Current Score :&nbsp;&nbsp;&nbsp;<?php echo $score?> </h3>
        <br>
        <p>Note&nbsp; :&nbsp;&nbsp;You Need to Have atleast 300 points to claim the Benifit .....</p><br><br>

        <form action="certificate.php" id="claimbtn" method="POST">
            <input type="hidden" name= "username" value="<?php echo $username?>">
            <input type="hidden" name= "email" value="<?php echo $email?>">
            <input type="hidden" name= "name" value="<?php echo $name?>">
            <input type="hidden" name= "score" value="<?php echo $score?>">
	        <input class="btn" name="certifiacte" type="submit" value="Claim"/>
        </form>
        <br><br>
        <form action="claim.html"  id="finish" method="POST">
    
            <input type="submit" id="btn" value="Continue">

            </form>


        
        
        </body>
        <?php 
                if($score< 300){
                    ?><script>
                        alert("Not Enough Points");
                        const notclaim = document.getElementById("claimbtn");
                        notclaim.style.display="none";
                        const not = document.getElementById("finish");
                        not.style.display="none";
                    </script>
                    <?php
                }else{

                    ?><script>
                        const claim = document.getElementById("claimbtn");
                        claim.style.display="block";
                        const finish = document.getElementById("finish");
                        finish.style.display="block";
                    </script>
                <?php

                }
            
            
            ?>

        </html>
<?php    

        

            }else{
        

        ?>
        <script>
            alert("Invalid Credentials");
        </script>
        <?php
        header('location:error.html');

    }
 
  


?>