<?php

    $senderid = $_POST['senderid'];

    $reciverid = $_POST['user'];

    $ammount = $_POST['ammount'];


    include 'connection.php';


    $sendernamesql="SELECT `name` FROM `users` WHERE `c_id`='$senderid';";
    $sendernamesqlrun = mysqli_query($connection,$sendernamesql);
    $sendernamefetch = mysqli_fetch_array($sendernamesqlrun);
    $sendername= $sendernamefetch[0];

    $senderbalsql="SELECT `bal` FROM `users` WHERE `c_id` = '$senderid';";
    $senderbalsqlrun = mysqli_query($connection,$senderbalsql);
    $senderbalfetch = mysqli_fetch_array($senderbalsqlrun);
    $senderbal= $senderbalfetch[0];

    $recivernamesql="SELECT `name` FROM `users` WHERE `c_id`='$reciverid';";
    $recivernamesqlrun = mysqli_query($connection,$recivernamesql);
    $recivernamefetch = mysqli_fetch_array($recivernamesqlrun);
    $recivername= $recivernamefetch[0];
    
    $reciverbalsql="SELECT `bal` FROM `users` WHERE `c_id` = '$reciverid';";
    $reciverbalsqlrun = mysqli_query($connection,$reciverbalsql);
    $reciverbalfetch = mysqli_fetch_array($reciverbalsqlrun);
    $reciverbal= $reciverbalfetch[0];

    // $moneyadd = $reciverbal; + $ammount;
    if($senderbal < $ammount){
        ?>
        <script>
            alert("Insufficient Balance");
        </script>
        <?php
        echo "<a href=' index.html'>home</a>";
    }else{

    $moneyaddedsql="UPDATE `users` SET `bal`= '$reciverbal'+'$ammount' WHERE c_id = '$reciverid';";
    $moneyaddedsqlrun = mysqli_query($connection,$moneyaddedsql);


    $moneydeduced = "UPDATE `users` SET `bal`= '$senderbal'-'$ammount' WHERE c_id = '$senderid';";
    $moneydeducedrun = mysqli_query($connection,$moneydeduced);


        
    $senderentrysql="INSERT INTO `$senderid`( `sender`, `amount`, `receiver`) VALUES ('$sendername','$ammount','$recivername');";
    $senderentrysqlrun= mysqli_query($connection,$senderentrysql);

    $reciverentrysql="INSERT INTO `$reciverid`( `sender`, `amount`, `receiver`) VALUES ('$sendername','$ammount','$recivername');";
    $reciverentrysqlrun= mysqli_query($connection,$reciverentrysql);


?>

        <script>
            alert("PAYMENT SUCESSFULL !!!");
        </script>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>playment sucess</title>
        </head>
        <style>

            a{
                font-family:Arial, Helvetica, sans-serif;
                font-size: larger;
            }
            div img{
                width: 10%;
                margin-left: 45%;
            }
            p{
                font-size: larger;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                text-align: center;
            }

        </style>
        <body>
            <a href=" index.html">Home</a><br>
            <div>
            <img src="img/green_tick.png" alt="tick"> 
            </div> 
            <p>Payment Sucessfull</p>
            <a href=" index.html"><p>Return</p></a>
        </body>
        </html>

<?php

    
}

    
    // echo $moneyadd."<br>";
    // echo $senderbal."<br>";
    // echo $reciverbal."<br>";
    // echo $senderid."<br>";
    // echo $reciverid."<br>";
    // echo $ammount;

?>