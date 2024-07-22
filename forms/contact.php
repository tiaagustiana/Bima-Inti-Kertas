<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';


  $mail = new PHPMailer(true);

  // SMTP Configuration
  $mail->isSMTP();
  $mail->Host = 'sandbox.smtp.mailtrap.io'; // Your SMTP server
  $mail->SMTPAuth = true;
  $mail->Username = 'b19715466aa674'; // Your Mailtrap username
  $mail->Password = '1778c6a24e43b4'; // Your Mailtrap password
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  // Sender and receipt settings
  $mail->setFrom('bimapaper@gmail.com', 'Bima Inti Kertas');
  $mail->addAddress('satriaonly@gmail.com', 'Tia Agustiana');

  // Sending plain text email
  $mail->isHTML(false); // Set email format to plain text
  $mail->Subject = 'Pemberitahuan';
  $mail->Body    = 'Terimakasih Sudah Belanja disini Ya:)';

  // Send the email
  if(!$mail->send()){
      echo 'Pesan tidak bisa dikirim. Pesan Error: ' . $mail->ErrorInfo;
  } else {
      echo 'Pesan telah dikirim';
  }
  

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

