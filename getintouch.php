<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$name = $_POST["name"];
$mail = $_POST["email"];
$contact_no = $_POST["ContactNo"];
$conn = new mysqli("localhost","root","","valmark") or die("Unable to connect") ;

$sql = "insert into customerinfo() values('$name','$mail','$contact_no')";
if($conn->query($sql)==TRUE){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'valmark194@gmail.com';
    $mail->Password = 'rtqeyowkyamepwne';
    $mail->SMTPSecure = 'ssl';
    $mail->Port =465;

    $mail->setFrom('valmark194@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = "Welcome";
    $mail->Body = "Welcome to Valmark ";

    $mail->send();

    echo "successful";
    header('Location:ThankyouValmark.html');
}
else
    echo "Error".$sql."<br>".$conn->error;
?>