<?php

  use PHPMailer/PHPMailer/PHPMailer;

  if(isset($_POST['username']) && isset($_POST['email'] && isset($_POST['password'])){
      $name = $_POST['username'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $subject = $_POST['subject'];
      $body = $_POST['body'];


      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";
      
      $mail = new PHPMailer();


      //smtp setting

      $mail -> isSMTP();
      $mail -> Host = "smtp.gmail.com";
      $mail -> SMYPAuth = true;
      $mail -> Username = "supunakalanka2017@gmail.com";
      $mail -> Password = '4kanuwaakalanka';
      $mail -> Port = 465;
      $mail -> SMTPSecure = "ssl";

      //email setting
      $mail -> isHTML(true);
      $mail -> setForm($email,$name);
      $mail -> addAddress("supunakanka2017@gmail.com");
      $mail -> Subject = ("$email ($subject)");
      $mail -> Body = $body;

      if($mail -> send()){
          $status = "success";
          $response = "Email is sent!";  
      }else{
          $status = "failed";
          $response = "Something is wrong: <br>" .$mail->ErrorInfo;

          exit(json_encode(array("status" => $status, "response" => $response)));

      }






  } 

?>