<?php
include_once 'db-inc.php';

if(isset($_POST['submit']) && $_POST['email']) {
     
        $email = $_POST['email'];
     
        $result = mysqli_query($dbConnection,"SELECT * FROM register WHERE email='" . $email . "'");
     
        if(mysqli_num_rows($result) > 0) {
         
            $token = md5($email);
         
            $expiry_time = mktime(date("H", time()+3600), date("i"), date("s"), date("m"), date("d"), date("Y"));
         
            $expiry_date = date("Y-m-d H:i:s", $expiry_time);
         
            $query = mysqli_query($dbConnection, "UPDATE register set  reset_link_token='" . $token . "', expiry_date='" . $expiry_date . "' WHERE email='" . $email . "'");
         
      

            //Email send code

            $to_email = $email;

            $mail_subject = "Reset Password";
           
            
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // More headers
            $headers .= "From: no-reply@test.com" . "\r\n";

            // Send email
            if(@mail($to_email, $mail_subject, $mail_content, $headers)) {
                echo "Check your email and click on the link to reset the password.";
            } else {
              echo "Something wrong to send an email. Please try again.";
            }

        } else {


        	      echo "Invalid Email Address. Go back";
        }

    }
?>