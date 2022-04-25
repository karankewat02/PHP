<?php
    include "connection.php";
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

        <form action="" method="post">
            <input type="search" name="" id="" placeholder="Enter the Test Id">
            <input class="fas" type="submit" value="&#xf002">
        </form>
    </nav>

    <div class= "display-code">
        <h2>Your Quiz Code</h2>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quasi architecto praesentium, recusandae saepe provident pariatur quis rem aliquid, omnis autem dolores dolorum. Voluptatum ex dolores quos maiores facere tenetur modi doloribus perspiciatis debitis officia aut eveniet saepe obcaecati quibusdam fugiat quia, cumque earum quas. Assumenda excepturi iusto incidunt minus.</p>

        <h1 onclick = "copy()" id="copyBtn">
            <?php
                session_start();
                if(isset($_SESSION['code'])){
                    $code = $_SESSION['code'];

                }
                echo $code;

                session_destroy();
            ?>
        </h1>

        <p style = "text-align: center;">Click the code to copy</p>

        <form action="../index.html" style = "text-align: center;">
            <button onclick = "copy()" class="button">Done</button>
        </form>
    </div>

    
    <footer>
        <h3>Contact Developer</h3>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="mailto:karankewat2911@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
    </footer>
</body>

<script>
    function copy(){
        console.log("copy called");
        navigator.clipboard.writeText(<?php echo $code; ?>);
        alert("Copied");
    }
</script>
<script src="../script.js"></script>
</html>