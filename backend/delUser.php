<?php
    
    include 'connection.php';

?>
<script>
    alert("User Deleted !");
</script>
<?php
    $delUser = $_POST['delUsername'];

    $delSQL = "DELETE FROM user WHERE username = '$delUser'";
    mysqli_query($connection,$delSQL);
    header('location:../admin.php');
?>





