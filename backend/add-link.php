<?php
    
    include 'connection.php';

?>



<?php
    session_start();
    if(isset($_SESSION['username'])){

        $username = $_SESSION['username'];
        $title = $_POST['title'];
        $url = $_POST['url'];
        $category = $_POST['category'];

        // echo $username;

        $adding = "INSERT INTO `$username` (`title`, `url`, `category`) VALUES ('$title', '$url', '$category');";
        mysqli_query($connection,$adding);
 
    
?>
        <script>
            alert("Added Successfully !!!");
        </script>
<?php
        header('location:../selection.html');     
    }
?>