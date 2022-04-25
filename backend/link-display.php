<?php
    
    include 'connection.php';

?>

<?php
    session_start();
    if(isset($_SESSION['username'])){

        $username = $_SESSION['username'];
        $category = $_POST['category'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../logo.svg" type="image/x-icon">

    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: #232526;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        a{
            text-decoration: none;
            color: #69ecf5;
        }
        a:hover{
            border-bottom: 2px solid #69ecf5;
        }

        .link-diplay{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Poppins', sans-serif;
        }


        .link-diplay h2{
            color: #69ecf5;
            font-family: 'Kanit', sans-serif;
        }

        .link-diplay table{
            width: 70%;
            text-align: center;
            border: 5px solid #232525a6;
            border-radius: 1rem;
        }
        .link-diplay table th{
            border-bottom: 5px solid #232525a6;
            color: #69ecf5;
        }

        .link-diplay table td{
            background-color: #b3b0b011;
            border-radius: 1rem;
            color: white;
            padding: .5rem 0;
        }
    </style>

    <title>Link-Box</title>
</head>

<body>
    <div id="particles-js"></div>

    <div class = "link-diplay">
        <h2>Your Saved Links : <?php echo $category?></h2>

        <table class="content">

                <thead>
                    <tr>
                        <th>Title</th>
                        <th>URL</th>     
                    </tr>
                </thead>
                <tbody>
 
<?php


        // echo $category;

        $sql = "SELECT * FROM `$username` WHERE `category` = '$category'";

        $query = mysqli_query($connection,$sql);

        $nums = mysqli_num_rows($query);

        $res = mysqli_fetch_array($query);

        while($res = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td><?php echo $res['title'];?></td>
            <td><a href="<?php echo $res['url'];?>" target="_blank" rel="noopener noreferrer"><?php echo $res['url'];?></a></td> 
        </tr>

    <?php

        }

        // echo $username;
    }
?>
        </tbody>

    </table>

    </div>
</body>

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<!-- <script src="script.js"></script> -->

</html>

