<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "PaulDJoachim@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;
  if (($name=="")||($mailFrom=="")||($message==""))
  { echo "All fields are required, please fill the form again.";
  } else {        
    mail($mailTo, $subject, $txt);
    header("Location: index.php?mailsend");
  }
}