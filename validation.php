<?php

/* * ************************************* EMAIL SENDING STARTS ******************************************** */

if (isset($_POST['send_mail'])) {

    if (empty($_POST["sender_name"])) {
        $nameErr = "Name is required";
    } else {
        $name = trim($_POST["sender_name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["sender_mail"])) {
        $emailErr = "Email is required";
    } else {
        $email = trim($_POST["sender_mail"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["sender_subject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = trim($_POST["sender_subject"]);
    }

    if (empty($_POST["sender_msg"])) {
        $messageErr = "Message is required";
    } else {
        $message = trim($_POST["sender_msg"]);
    }


    if (($nameErr == '') && ($emailErr == '') && ($subjectErr == '') && ($messageErr == '')) {
        $to = 'info@elohimmedia.in';
        $headers .= "From: " . $name . "<" . $email . ">\r\n";
        $headers .= "Reply-To: " . $name . "<" . $email . ">\r\n";
		$headers .= "Cc: support@elohimmedia.in \r\n";
        if (mail($to, $subject, $message, $headers)) {
            $success = 'Email sent successfully!';
        } else {
            $error = 'Message not sent';
        }
    }
}
/* * ************************************* EMAIL SENDING ENDS ******************************************** */
?>

