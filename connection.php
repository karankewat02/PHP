<?php
$host = 'localhost';
$username = 'root';
$password ='';
$db = 'test';
$connection = mysqli_connect($host,$username,$password,$db);

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