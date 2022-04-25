<?php
    
    include 'backend/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <title>thoughtOsphere</title>
</head>

<body>


<nav>
    <div class="icon">
        <img src="img/logo.svg" alt="">
        <p>thoughtOsphere</p>
    </div>

    <form class="log-out-button" action="backend/logout.php" method="post">
        <input type="submit" value="Log-out">
    </form>
</nav>

<div class="feedback" id="pop-up-feedback"><i class="fas fa-comment-alt"></i></div>
<div class="add-msg" id="pop-up-add"><i class="fas fa-plus"></i></div>


<div class="feedback-form centre"  id="pop-up-feedback-form">
    <form action="backend/feedback.php" method="post">
        <h2>FeedBack</h2>
        <textarea name="msg" id=""  rows="10" placeholder="Entre the FeedBack" required></textarea><br>
        <input onclick="call()" type="submit" value="Submit">
    </form>
</div>


<div class="add-msg-form centre" id="pop-up-add-form">
    <form action="backend/add.php" method="post">
        <h2>Thought down your mind</h2>
        <textarea name="msg" id=""  rows="10" placeholder="Entre the Thought" required></textarea><br>
        <input onclick="call()" type="submit" value="Post">
    </form>
</div>

<div class="main-msg-container">

<?php


        // echo $category;

        $sql = "SELECT * FROM `thought`";

        $query = mysqli_query($connection,$sql);

        $nums = mysqli_num_rows($query);

        $res = mysqli_fetch_array($query);

        while($res = mysqli_fetch_array($query)){
?>

    <div class="main-msg">
        <p>@<?php echo $res['username'];?></p>
        <hr>
        <p><?php echo $res['thought'];?></p>       
        <hr>
        <p><?php echo $res['date'];?></p>
    </div>
    
<?php } ?>

</div>

<hr>
<footer>
    <p>Contact Developer</p>
    <div class="social-links">
        <a href="mailto:Aashutiwari66@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
        <a href="https://www.instagram.com/anuj.tiwari.photography/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
    </div>
</footer>


</body>

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="script.js"></script>
</html>