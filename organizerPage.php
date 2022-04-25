<?php
    include "backend/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/logo-noBG.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>quizHub</title>
</head>

<body>
    <nav>
        <img src="img/logo-noBG.png" alt="logo">

        <form action="" method="post">
            <input type="search" name="" id="" placeholder="Enter the Test Id">
            <input class="fas" type="submit" value="&#xf002">
        </form>
    </nav>

    <?php
    session_start();
    $code = $_SESSION['code'];
    $o_email = $_SESSION['o_email'];
    $testInfoSQL = "SELECT * FROM `alltests` WHERE CODE = '$code';";
    $runTestInfoSQL = mysqli_query($connection,$testInfoSQL);
    $TestInfo = mysqli_fetch_array($runTestInfoSQL);



    $i = 1;
    $allAttendeSQL = "SELECT * FROM `allattendies` WHERE `code` = $code;";
    $runAllAttendeSQL = mysqli_query($connection,$allAttendeSQL);
     
 

?>  
    <div class="organizer-page">
        <h1>Quiz Analization - <?php echo $TestInfo['title'] ?> </h1>

        <table id = "tblexportData">
            <th>Sno. </th>
            <th>Name</th>
            <th>Email</th>
            <th>Marks Obtained</th>
            <th>Starting Time</th>
            <th>Finishing Time</th>

<?php
    while($allAttende = mysqli_fetch_array($runAllAttendeSQL)){
?>

        <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $allAttende['name']; ?></td>
        <td><?php echo $allAttende['email']; ?></td>
        <td><?php echo $allAttende['marks']; ?></td>
        <td><?php echo $allAttende['s_time']; ?></td>
        <td><?php echo $allAttende['f_time']; ?></td>
        </tr>

<?php
$i++;
    }
?>

        </table>
        <div style="text-align: center;">
            <button onclick="exportToExcel('tblexportData', '<?php echo $TestInfo['title'] ?> result')" class="button">Download Result</button>
        </div>
    </div>

    <footer>
        <h3>Contact Developer</h3>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="mailto:karankewat2911@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
    </footer>
</body>

<script>
    function exportToExcel(tableID, filename = ''){
        var downloadurl;
        var dataFileType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');
        
        // Specify file name
        filename = filename?filename+'.xls':'export_excel_data.xls';
        
        // Create download link element
        downloadurl = document.createElement("a");
        
        document.body.appendChild(downloadurl);
        
        if(navigator.msSaveOrOpenBlob){
            var blob = new Blob(['\ufeff', tableHTMLData], {
                type: dataFileType
            });
            navigator.msSaveOrOpenBlob( blob, filename);
        }else{
            // Create a link to the file
            downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;
        
            // Setting the file name
            downloadurl.download = filename;
            
            //triggering the function
            downloadurl.click();
        }
    }
</script>


</html>