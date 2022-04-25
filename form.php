
<?php
    include 'connection.php';
?>
<?php

$name = $_POST['name'];
$pno = $_POST['phone'];
$email = $_POST['email'];
$addr = $_POST['addr'];
$description = $_POST['discription'];
$data = "INSERT INTO `form` (`name`, `phone`, `email`, `Address`, `Discription`, `date`) VALUES ('$name', '$pno', '$email', '$addr', '$description', current_timestamp());";

mysqli_query($connection,$data);
header('location:thanks.html');

?>