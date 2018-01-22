<?php

if(isset($_POST['email'])) {

    $email_to = "astrosolutionsasia@gmail.com";
 
    $email_subject = "from contact us";

 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
 
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";

 
	// create email headers
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $email_subject, $email_message, $headers);  


?>
 
 
 
<!-- include your own success html here -->
 
 
 
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Thank you</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
   

 </head>

<body>
                        
<div class="jumbotron">
    <h1 class="h1-responsive text-center">Thank your for being Touch With us</h1>
    <p class="lead text-center">We will be in touch with you soon!</p>
    <hr class="my-2 ">
    <p class="text-center">We ensure a great and valuable customer support for greater experiance    </p>
    <a href="../index.html" class="btn btn-primary btn-lg align-content-center " role="button"> <i class="fa fa-arrow-left"></i> Back to Home page</a>
</div>
  
  
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>

</body>
</html>

 
 
 
<?php
 
}
 
?>
