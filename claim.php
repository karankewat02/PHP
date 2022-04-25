<?php
    include 'connection.php';
?>

<?php  
    $feedback = $_POST['feedback']; 
    $sql = "INSERT into `feedback`(`feedback`)  VALUE('$feedback')";
    $result = mysqli_query($connection,$sql); 
    header('location:index.html')
?>



