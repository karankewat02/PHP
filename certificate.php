<?php
 $lb = "<br>";
 $font = realpath('AGENCYB.TTF');
 $font2 = realpath('Lobster-Regular.TTF');
 $font3 = realpath('LobsterTwo-Regular.ttf');
 $image = imagecreatefromjpeg('certificate.jpg');
 $color = imagecolorallocate($image,230, 127, 127);
 $color2 = imagecolorallocate($image,225, 225, 232);
 $color3 = imagecolorallocate($image,255, 222, 89);
 $color4 = imagecolorallocate($image,230, 230, 230);
 $date = date('d F, Y');
 $name=$_POST['name'];
 $email =$_POST['email'];
 imagettftext($image,60,0,500,700,$color,$font,$name);
 imagettftext($image,40,0,200,950,$color2,$font,$date);
 imagettftext($image,40,0,520,1400,$color3,$font2,$name);
 imagettftext($image,17,342,490,1700,$color4,$font3,$date);
 $file=time();
    $file_path="certificate/".$file.".jpeg";
    $file_path_pdf="certificate/".$file.".pdf";
    imagejpeg($image,$file_path);
    imagedestroy($image);
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image($file_path,5,0,200,300);
$pdf->Output($file_path_pdf,"f");

$sentform = "Team-TyoTech";
$subject = "Thank You from Team Tryo-Tech";
    include('smtp/PHPMailerAutoload.php');
    $mail=new PHPMailer();
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPSecure="tls";
    $mail->SMTPAuth=true;
    $mail->Username="tryotech123@gmail.com";
    $mail->Password="tryo@123";
    $mail->setFrom("$sentform");
    $mail->addAddress("$email");
    $mail->isHTML(true);
    $mail->Subjet="$subject";

    $mail->Body="Hi $name, $lb $lb 

   

I just wanted to thank you all for the hard work you've contributed to the initiative made by our team. $lb
As you all know India is a developing country. So in country like ours health and cleanliness is not so good.
So our team decided to make a change in this, we developed the website which you used and made an extraordinary performance.$lb
This certificate is provided to you as a appecation and along with certificate is a badge which will provide various benifits. $lb$lb
Benifits are :- $lb $lb

1. Less charge in public transport. $lb
2. Free access to public parks. $lb
3. Your garbage collection charges will be exempted (if any). $lb
 $lb

further we'll add more benifits..... $lb $lb

Thank you again for your incredible work. We are impressed with your vision towards a Great Nation. Keep it up!  $lb $lb

Many thanks, $lb
Team Tryo-Tech ";
    $mail->addAttachment($file_path_pdf);
    $mail->SMTPOptions=array("ssl"=>array(
    "verify_peer"=>false,
    "verify_peer_name"=>false,
    "allow_self_signed"=>false,
));

if($mail->send()){
    header("location:claim.html");
}
else{
    echo $mail->ErrorInfo;
}

?>

<?php include 'connection.php'; ?>

<?php 

   $name =$_POST['name']; 
   $username =$_POST['username']; 
   $email =$_POST['email'];
   $score = $_POST['score'];

   $scoredecriment = $score - 300;
   $updatesql = "UPDATE `user` SET `score` = '$scoredecriment' WHERE `username` = '$username';";
   $updated = mysqli_query($connection,$updatesql);
   
?>

