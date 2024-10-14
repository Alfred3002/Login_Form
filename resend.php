<?php
session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function resend_email_verify($name,$email,$verify_token){
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 2;//SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->SMTPAuth   = true;  //Enable SMTP authentication

    $mail->Host       = "smtp.gmail.com"; //Set the SMTP server to send through
    $mail->Username   = "shinayang41@gmail.com";  //SMTP username
    $mail->Password   = "evygxuefcflxstti"; //SMTP password

    $mail->SMTPSecure = "ssl"; //Enable implicit TLS encryption
    $mail->Port       = 465;  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("shinayang41@gmail.com", $name);
    $mail->addAddress($email);     //Add a recipient
    
    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = "Resend-Email verification from Alfred Orapa";

    $email_template = "
        <h2>You have Registered with Login Form of Alfred Orapa.</h2>
        <h5>Verify your email to Login with the given link below.</h5>
        <br/><br/>
        <a href = 'http://localhost/AlfredOrapaIS21/Login_Form_with_Email_Verification/verify_email.php?token=$verify_token'>Click Me?</a>
    ";

    $mail ->Body =$email_template;
    $mail->send();
}

if(isset($_POST['resend_email_verify_btn'])){ //check if the button is click

    if(!empty(trim($_POST['email']))){

        $email = mysqli_real_escape_string($con, $_POST['email']);

        $checkemail_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $checkemail_query_run = mysqli_query($con, $checkemail_query);

        if(mysqli_num_rows($checkemail_query_run) > 0){

            $row = mysqli_fetch_array($checkemail_query_run);

            if($row['verify_status'] == "0"){

                $name = $row['name'];
                $email = $row['email'];
                $verify_token = $row['verify_token'];

                resend_email_verify($name,$email,$verify_token);


                $_SESSION['status'] = "Verification Email Link has been sent to your email address.";
                header("Location: login.php");
                exit(0);
    

            } 
            else{

                $_SESSION['status'] = "Email is already verified. Please login now.";
                header("Location: resend-email.php");
                exit(0);
    

            }

        } 
        else{

            $_SESSION['status'] = "Email is not registered. Please register now.";
            header("Location: register.php");
            exit(0);

        }
    }
    else{
        $_SESSION['status'] = "Enter your valid email";
        header("Location: resend-email.php");
        exit(0);
    }
}
?>