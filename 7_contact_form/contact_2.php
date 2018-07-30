<?php
 
if(isset($_POST['email'])) {
 
    $email_to = "info@mail.gr.";
 
    $email_subject = "Contact Msg";

    function failed($error) {
        echo "We are very sorry, but there were error(s) found in the form you submitted. ";
        echo "Details appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Fix the error(s) to procede.<br /><br />";
        include('contact.php');
		die();
 
    }
 
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
		!isset($_POST['termsofuse']) ||
        failed('We are sorry, but there appears to be a problem with the form you submitted.');      
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered isnt valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name must be consist only by letters.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name must be consist only by letters.<br />';
 
  }
  
  if(!is_numeric($telephone)) {
 
    $error_message .= 'The Telephone number must be numeric.<br />';
 
  }
  
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered are too sort.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    failed($error_message);
 
  }
 
    $email_message = "Form details:\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 

$headers = 'From: '.$email_from;
 
mail($email_to, $email_subject, $email_message, $headers); 



 
echo"Thank you for contacting us. We will be in touch with you very soon.";
 
echo"<br><br>";
include('contact.php'); 
 
}
 
?>