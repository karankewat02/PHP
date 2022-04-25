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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />


    <title>admin</title>
</head>

<body>

    <nav>
        <div class="icon">
            <img src="img/logo.svg" alt="">
            <p>thoughtOsphere</p>
        </div>
        <div style="display:flex">
            <button><a href="feedbackdisplay.php">Feedbacks</a></button>
            <button><a href="backend/logout.php">Log-out</a></button>
        </div>

    </nav>
    <div class="mainContainer">

    <?php

        $sql = "SELECT * FROM `user`";

        $query = mysqli_query($connection,$sql);

        $nums = mysqli_num_rows($query);

        $res = mysqli_fetch_array($query);
    ?>

        <h1>
            Total users : <?php echo $nums -1; ?>
        </h1>

        <h1>Users</h1>

        <div class="usertab">
            <table>
                <tr>
                    <th style="text-align: center;">Username</th>
                    <th colspan="2" style="text-align: center;">email</th>
                </tr>
        <?php
           
            while($res = mysqli_fetch_array($query)){
        ?>
                <tr>
                    <td><?php echo $res['username']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td>
                        <form action="backend/delUser.php" method = "post" style="text-align: center;">
                            <input type="hidden" name="delUsername"  value="<?php echo $res['username']; ?>">
                            <input type="submit" class="fas fa-trash" value="&#xf1f8;">
                        </form>
                    </td>

                </tr>
        <?php } ?>

            </table>
        </div>
    </div>
    <div class="danger" style="display:flex; justify-content:space-between;">

        <form action="backend/delAllUser.php">
            <button style="border-color: red;">Delete all Users</button>
        </form>

		<form action="backend/delAllThought.php">
            <button style="border-color: red;">Delete all thoughts</button>
        </form>
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


<script src="script.js"></script>

</html>