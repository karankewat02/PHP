<?php 

    $code = $_POST['code'];
    $email = $_POST['email'];
    $operation = $_REQUEST['operation'];


    session_start();
    $_SESSION['code'] = $code;

    switch ($operation) {
        case "del":
          echo '<script>window.location.href = "adminOperations/delete.php";</script>';
          break;
        case "date":
          echo '<script>window.location.href = "adminOperations/date.html";</script>';
          break;
        case "dur":
          echo '<script>window.location.href = "adminOperations/duration.html";</script>';
          break;
        case "time":
          echo '<script>window.location.href = "adminOperations/time.html";</script>';
          break;
        case "contact":
          echo "<script>window.location.href = 'mailto:$email';</script>";
          break;
        case "delAllAttendee":
          echo '<script>window.location.href = "adminOperations/delAllAttendee.php";</script>';
          break;
        case "delAllTest":
          echo '<script>window.location.href = "adminOperations/delAllTests.php";</script>';
          break;
      }

?>