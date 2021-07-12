<?php

	

    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "info@vkidstrust.org";

    $email_subject = "Get in touch";

    $email_message=""; 

     

  



     

    $name = $_POST['Cname']; // required

    $email_from = $_POST['Cemail']; // required

    $email_subject = $_POST['Csubject']; // required

	  $comments = $_POST['Cmessage']; // required

     

  

     

    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }

     

    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Message: ".clean_string($comments)."\n\n\n\n";

     

     

  // create email headers

  $headers = 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from."\r\n" .

  'X-Mailer: PHP/' . phpversion();



  @mail($email_to, $email_subject, $email_message, $headers);  



  echo "<META HTTP-EQUIV=\"refresh\" CONTENT=0;URL=http://www.ligomarc.com/>";

	exit;



 ?>

  