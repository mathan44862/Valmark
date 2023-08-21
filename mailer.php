<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$Subject = $_POST["Subject"];
$Message = $_POST["Message"];

$conn = new mysqli("localhost","root","","valmark") or die("Unable to connect") ;

if ($conn -> connect_errno)
{
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
}

$sql = "select email from customerinfo";
    $result = ($conn->query($sql));
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    } 
    if(!empty($row)){
        foreach($row as $rows)
        { 
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'valmark194@gmail.com';
            $mail->Password = 'rtqeyowkyamepwne';
            $mail->SMTPSecure = 'ssl';
            $mail->Port =465;

            $mail->setFrom('valmark194@gmail.com');
            $mail->addAddress($rows['email']);
            $mail->isHTML(true);
            $mail->Subject = $Subject;
            $mail->Body = $Message;

            $mail->send();
            echo "successful";  
            header('Location:Message.html');
        }
    }
?>