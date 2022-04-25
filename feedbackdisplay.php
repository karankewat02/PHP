<?php
    
    include 'backend/connection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
    <title>Feedbacks</title>
</head>

<body>
    <nav>
        <div class="icon">
            <img src="img/logo.svg" alt="">
            <p>thoughtOsphere</p>
        </div>
        <div style="display:flex">
            <button><a href="./admin.php">Back To admin</a></button>
            <button><a href="backend/logout.php">Log-out</a></button>
        </div>

    </nav>
    <div class="mainContainer" style="display: flex;">
	<?php

$sql = "SELECT * FROM `feedback`";

$query = mysqli_query($connection,$sql);

$nums = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);
?>

        <h1>Total Feedbacks : <?php echo $nums -1; ?></h1>
        <table class="usertab" style="min-width:80vw" ;>
            <tr>
                <th>username</th>
                <th>feedback</th>
				<th>date</th>
            </tr>
			<?php
           
		   while($res = mysqli_fetch_array($query)){
	   ?>
            <tr>
			<td><?php echo $res['username']; ?></td>
			<td><?php echo $res['review']; ?></td>
			<td><?php echo $res['date']; ?></td>
            </tr>
	<?php } ?>


        </table>
    </div>
</body>

</html>