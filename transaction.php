<?php
    $senderid = $_POST['c_id'];


    
    
    // $sql = "SELECT `c_id` FROM `users` WHERE `c_id` = '$senderid';";
    
    // $rundisplayfinal = mysqli_query($connection,$sql);

    // $displayfinal = mysqli_fetch_array($rundisplayfinal);

    // $senderidsql = $displayfinal[0];
    

    // echo $senderid;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin: 0%;">
<div class="transaction">

    <h1>Make The Transaction</h1>

<form action="transfer.php" method="POST">



<div>
<input type="number" name="ammount" id="ammount" require placeholder="Enter The Amount $">
</div>


<p>Select User to Make Payment :</p>


<div class ="user_selctor">
    <label for="user0">Levi Hart</label>
<input type="radio" value="9201"  name="user" id="user0"  class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user1">Felecia Morrison
    </label>
<input type="radio" value="9202" name="user" id="user1" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user2">Justin Bennett
    </label>
<input type="radio" value="9203" name="user" id="user2" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user3">Darren Brown
    </label>
<input type="radio" value="9204" name="user" id="user3" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user4">Dustin Gordon
    </label>
<input type="radio" value="9205" name="user" value="" id="user4" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user5">Ruby Jackson
    </label>
<input type="radio" value="9206" name="user" id="user5" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user6">Herminia Ramos
    </label>
 <input type="radio" value="9207" name="user" id="user6" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user7">Clayton Bryant
    </label>
 <input type="radio" value="9208" name="user" id="user7" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user8">Floyd West
    </label>
<input type="radio" value="9209" name="user" id="user8" class="radio_user"><br>
</div>

<div class ="user_selctor">
    <label for="user9">Alfred Bailey
    </label>
<input type="radio" value="9210" name="user" id="user9" class="radio_user"><br>
</div>


<input type="hidden" name="senderid" value="<?php echo $senderid; ?>">

<input id="transactionbtn" name="transactionbtn" type="submit" value="Make Payment">

</form>
</div> 

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/myjQuery.js"></script>
</body>
</html>




