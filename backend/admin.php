<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../img/logo-noBG.png" type="image/x-icon">

    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>quizHub</title>
</head>

<body>
    <nav>
        <img src="../img/logo-noBG.png" alt="logo">

        <form action="searched.php" method="post">
            <input type="search" name="code"  placeholder="Enter the Test Id">
            <input class="fas" type="submit" value="&#xf002">
        </form>
    </nav>

    
<?php 
    $allTest = "SELECT * FROM `alltests`";
    $runAllTest = mysqli_query($connection,$allTest);
    $totalTest = mysqli_num_rows($runAllTest);
    
    $allAttendees = "SELECT * FROM `allattendies`";
    $runAllAttendees = mysqli_query($connection,$allAttendees);
    $totalAttendees = mysqli_num_rows($runAllAttendees);
?>
    
    <div class="allTests">
        <h2>Admin Page</h2>


        <div class="statistics">
            <div>
                <h1><?php echo $totalTest ?></h1>
                <p>Total Tests</p>
            </div>

            <div>
                <h1><?php echo $totalAttendees ?></h1>
                <p>Total Attendees</p>
            </div>
        </div>


        <div class="test-grid">



    

<?php
    while($tests = mysqli_fetch_array($runAllTest)){ 
?>

            <div style="position: relative;">
                <i class="fas fa-question"></i>
                <h3><?php echo $tests['title']; ?></h3>
                <div>
                    <p>Organizer - <?php echo $tests['o_name']; ?></p>
                    <p>Starts At - <?php echo $tests['s_time']; ?></p>
                    <p>Ends At - <?php echo $tests['e_time']; ?></p>
                    <p>Duration - <?php echo $tests['duration']; ?></p>
                    <p>Date - <?php echo $tests['date']; ?></p>
                    <p>Code - <?php echo $tests['code']; ?></p>
                </div>


                <form action="adminOperationRediretor.php" method="post">
                    <div class="admin-operations">
                    

                        <input type="hidden" name="code" value="<?php echo $tests['code']; ?>">
                        <div title="Delete">
                            <i class="fas fa-trash"></i>
                            <input type="submit" name="operation" value="del">
                        </div>

                        <div title="Change Date">
                            <i class="fas fa-calendar"></i>
                            <input type="submit" name="operation" value="date">
                        </div>

                        <div title="Change Duration">
                            <i class="fas fa-hourglass-half"></i>
                            <input type="submit" name="operation" value="dur">     
                        </div>

                        <div title="Change Timing">
                            <i class="fas fa-clock"></i>
                            <input type="submit" name="operation" value="time">                           
                        </div>

                        <div title="Contact Organizer">
                            <i class="fas fa-envelope"></i>
                            <input type="submit" name="operation" value="contact">  
                            <input type="hidden" name="email" value="<?php echo $tests['o_email']; ?>">  
                        </div>

                    </div>
                </form>
            </div>
<?php 
        }
?>
            
    </div>
</div>

<h1 id = "bulk-heading">Bulk Operations</h1>
<div class="bulk-operation">

    <div>
        <i class="fas fa-users-slash"></i>
        <p>Delete All Attendies Info</p>
        <form action="adminOperationRediretor.php" method="post">
            <input type="submit" name="operation" value="delAllAttendee">
        </form>
    </div>
    
    <div>
        <i class="fas fa-trash-alt"></i>
        <p>Delete all Tests Info</p>
        <form action="backend/adminOperationRediretor.php" method="post">
            <input type="submit" name="operation" value="delAllTest">
        </form>
    </div>

</div>


    <footer>
        <h3>Contact Developer</h3>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="mailto:karankewat2911@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
    </footer>
</body>

<script src="script.js"></script>
</html>