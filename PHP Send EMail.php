<?php
$to = 'pritamundhe@gmail.com';
$subject = 'Recruitment Proposal';
$message = 'Hi, I am Going to Recruit You';
$headers = 'From: pritammundhe00@gmail.com';

if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else {
    echo 'Unable to send email. Please try again.';
}
?>
