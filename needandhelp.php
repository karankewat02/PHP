
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/Untitled_design__3_-removebg-preview.png" type="image/x-icon">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <style>
        p{
            font-size:20px ;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        }
        h1{
            font-family: 'Lobster', cursive
        }
        table{
            width: 100%;
        }
        .content{
            border-collapse: collapse;
            min-width: 400px;
            margin: 25PX 0px;
            font-size: 30px;
            border-radius: 5px 5px 0px 0px;
            overflow: hidden;
            box-shadow: 5px 2px 5px grey;
        }

        .content th, .content th {
        padding: 12px 15px;
        width: 11%;
        }

        .content thead tr{
        background-color: #009879;
        color: #FFF;
        text-align: left;
        font-weight: bold;
        overflow: scroll;
        }

        .content th,
        .content th{
            padding-top:12px;
            padding-bottom:15px;
        }

        .content tbody tr{
            border-bottom: 1px solid #dddddddd;
            width: 100%;
            overflow:hidden;
        }

        .content tbody tr:nth-of-type(even){
            background-color: #f3f3f3f3;
            color: #009879;
        }

        .content tbody tr:last-of-type{
            border-bottom: 2px solid #009879 ;
        }
        .help{
            max-width: 300px;
            overflow: auto;    
        }

    </style>
</head>
<body>
    <p><a href="index.html">| Home</a></p>
    <h1 style=" text-align: center;" id="tableheading">CHECK FOR YOUR NEED</h1>
    <br><br>
    <table class="content">

        <thead>
            <tr>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Email</th>
                <th>Address</th>
                <th >Helps & Needs</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            <?php

                include 'connection.php'

            ?>
            <?php
                $sql = "SELECT * FROM `form`;";

                $query = mysqli_query($connection,$sql);

                $nums = mysqli_num_rows($query);

                $res = mysqli_fetch_array($query);

                while($res = mysqli_fetch_array($query)){
                    ?>
                    
                    <tr>
                        <td><?php echo $res['name'];  ?></td>
                        <td><?php echo $res['phone'];  ?></td>
                        <td><?php echo $res['email'];  ?></td>
                        <td><?php echo $res['Address'];  ?></td>
                        <td><?php echo $res['Discription'];  ?></td>
                        <td><?php echo $res['date'];  ?></td>
                        
                    </tr>
            <?php
                }
             ?> 
        </tbody>

    </table>
</body>

</html>