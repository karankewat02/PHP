<?php
$host = 'localhost';
$db= 'quizhub';
$password = '';
$username = 'root';
$connection = mysqli_connect($host, $username,$password,$db);
date_default_timezone_set("Asia/Kolkata");
if ($connection) {
    // echo "connection is eastablished";
    ?>
    <script>
        console.log("connected TO SERVER")
    </script>
    <?php
}
else {
    ?>
     <script>
        console.log("Not connected TO SERVER")
    </script>
    <?php
    // echo "error connection failed";
    die("no connection" . mysqli_connect_errno());
}
?>