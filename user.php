<?php

   include 'connection.php';

?>
<?php

if(array_key_exists('user0', $_POST)) {

 $sql = "SELECT * FROM `users` WHERE `c_id` = '9201' ";

 $id = '9201';

 $rundisplayfinal = mysqli_query($connection,$sql);

 $displayfinal = mysqli_fetch_array($rundisplayfinal);

}
if(array_key_exists('user1', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9202' ";
    $id = '9202';   
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user2', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9203' ";
    $id = '9203';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user3', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9204' ";
    $id = '9204';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user4', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9205' ";
    $id = '9205';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user5', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9206' ";
    $id = '9206';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user6', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9207' ";
    $id = '9207';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user7', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9208' ";
    $id = '9208';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user8', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9209' ";
    $id = '9209';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   if(array_key_exists('user9', $_POST)) {

    $sql = "SELECT * FROM `users` WHERE `c_id` = '9210' ";
    $id = '9210';
    $rundisplayfinal = mysqli_query($connection,$sql);
   
    $displayfinal = mysqli_fetch_array($rundisplayfinal);
   
   }

   

   


?>
  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title><?php         if(array_key_exists('user0', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user1', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user2', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user3', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user4', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user5', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user6', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user7', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user8', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user9', $_POST)) {echo $displayfinal[1];} ?> Detail</title>
    </head>
    <body>
    <body>

<nav>
    <!-- logo -->
    <a href=" index.html">
    <img id="logo" src="img/logo.png" alt="LOGO"></a>

    <!-- Navbar Icon -->    
    <img id="menu" src="img/menuicon.png" alt="Menu">
</nav>

<div class="sidebar">

    <ul>
        <a href=" index.html"><li>Home</li></a>
        <a href="customer.html"><li>View All Customers</li></a>
        <a href="https://www.thesparksfoundationsingapore.org/contact-us/"><li>Contact</li></a>
        <a href="help.html"><li>Help</li></a>

         <a href="https://www.thesparksfoundationsingapore.org/about/vision-mission-and-values/" target="_blank" ><li>About</li></a>

    </ul>

</div>

<div class="homepage">

    <div class="singleuser_content">
       
        
    <h1><?php                     
                    if(array_key_exists('user0', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user1', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user2', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user3', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user4', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user5', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user6', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user7', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user8', $_POST)) {echo $displayfinal[1];}
                    if(array_key_exists('user9', $_POST)) {echo $displayfinal[1];}?></h1>

    <p></p>

        <p>Age -  <?php                     
                    if(array_key_exists('user0', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user1', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user2', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user3', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user4', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user5', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user6', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user7', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user8', $_POST)) {echo $displayfinal[6];}
                    if(array_key_exists('user9', $_POST)) {echo $displayfinal[6];}?></p>
        
        <p>Occupation - <?php 
                    if(array_key_exists('user0', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user1', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user2', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user3', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user4', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user5', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user6', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user7', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user8', $_POST)) {echo $displayfinal[4];}
                    if(array_key_exists('user9', $_POST)) {echo $displayfinal[4];} ?></p>
        
        
        <p id="button">Contact Details</p>
        
        <ul>
        
            <li><?php 
                    if(array_key_exists('user0', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user1', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user2', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user3', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user4', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user5', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user6', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user7', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user8', $_POST)) {echo $displayfinal[2];}
                    if(array_key_exists('user9', $_POST)) {echo $displayfinal[2];}
                    ?></li>
            <li><?php
                    if(array_key_exists('user0', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user1', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user2', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user3', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user4', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user5', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user6', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user7', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user8', $_POST)) {echo $displayfinal[3];}
                    if(array_key_exists('user9', $_POST)) {echo $displayfinal[3];} ?></li>
        
        </ul>
        <h2 id="button">Current Balance - $<?php 
                    if(array_key_exists('user0', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user1', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user2', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user3', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user4', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user5', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user6', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user7', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user8', $_POST)) {echo $displayfinal[5];}
                    if(array_key_exists('user9', $_POST)) {echo $displayfinal[5];}
                    ?></h2>

            <form action="transaction.php" method="POST"><?php
                    if(array_key_exists('user0', $_POST)) {?><input type="hidden" name="c_id" value="9201"><?php }
                    if(array_key_exists('user1', $_POST)) {?><input type="hidden" name="c_id" value="9202"><?php }
                    if(array_key_exists('user2', $_POST)) {?><input type="hidden" name="c_id" value="9203"><?php }
                    if(array_key_exists('user3', $_POST)) {?><input type="hidden" name="c_id" value="9204"><?php }
                    if(array_key_exists('user4', $_POST)) {?><input type="hidden" name="c_id" value="9205"><?php }
                    if(array_key_exists('user5', $_POST)) {?><input type="hidden" name="c_id" value="9206"><?php }
                    if(array_key_exists('user6', $_POST)) {?><input type="hidden" name="c_id" value="9207"><?php }
                    if(array_key_exists('user7', $_POST)) {?><input type="hidden" name="c_id" value="9208"><?php }
                    if(array_key_exists('user8', $_POST)) {?><input type="hidden" name="c_id" value="9209"><?php }
                    if(array_key_exists('user9', $_POST)) {?><input type="hidden" name="c_id" value="9210"><?php }
                    ?>
                <input id="transactionbtn" type="submit" value="Make Transaction" >
            </form>

</div>



    <div class="transaction_history">
        
    
        <div id="backcolor">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="transaction">

            <h1>TRANSACTION DETAILS</h1>

            
<!-- 
    <style>
        p{
            font-size:20px ;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        }
        h1{
            font-family: 'Lobster', cursive
        }



    </style> -->


    <table class="content">

        <thead>
            <tr>
                <th>Date-Time</th>
                <th>Sender</th>
                <th>Amount $</th>
                <th>Receiver</th>
                
            </tr>
        </thead>
        <tbody>
            
            <?php

                include 'connection.php';

                $sql = "SELECT * FROM `$id`";

                $query = mysqli_query($connection,$sql);

                $nums = mysqli_num_rows($query);

                $res = mysqli_fetch_array($query);

                while($res = mysqli_fetch_array($query)){
                    ?>
                    
                    <tr>
                        <td><?php echo $res['dt'];  ?></td>
                        <td><?php echo $res['sender'];  ?></td>
                        <td><?php echo $res['amount'];  ?></td>
                        <td><?php echo $res['receiver'];  ?></td>
                        
                    </tr>
            <?php
                }
             ?> 
        </tbody>

    </table>




        </div>
        
    </div>

</div>
<footer>
    
    <p>Contact Developer :</p>
    <!-- social media icons -->
    <div class="socialicon">

        <a href="https://www.instagram.com/karan_____kewat/" target="_blank" rel="noopener noreferrer"><img src="img/instagram.jpg" alt="instagram" title="instagram"></a>
        <a href="https://www.facebook.com/karan.kewat.58" target="_blank" rel="noopener noreferrer"><img src="img/fb.jpg" alt="facebook" title="facebook"></a>
        <a href="https://www.linkedin.com/in/karankewat/" target="_blank" rel="noopener noreferrer"><img src="img/linkedin.jpg" alt="linkedin" title="linkedin"></a>
       <a href="https://twitter.com/karan_____kewat" target="_blank" rel="noopener noreferrer"><img src="img/tweeter.jpg" alt="tweeter" title="tweeter"></a>
        <a href="https://github.com/karankewat02" target="_blank" rel="noopener noreferrer"><img id="git" src="img/github.jpg" alt="github" title="github"></a>

    </div>
    <p>© The Spark Foundation</p>


</footer>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/myjQuery.js"></script>
    </body>
    </html>