  
<!--php script to send email-->
<?php 

//variable declaration
$fname = $_POST['fname'];  //first name of sender 
$lname = $_POST['lname'];  //last name of sender
$email = $_POST['mail']; // email of sender
$phone = $_POST['number'];  //phone no. of 
$team_name = $_POST['team_name'];  //phone no. of sender

//form content
$formcontent="From: $fname.$lname \n Phone no.: $phone \n Team Name: $message";

$recipient = "2019bcs029@sggs.ac.in"; // recipient email
$subject = "Utsav-2K21, Registration";     //Email Subject
$mailheader = "From: $email \r\n";    //mail header   

mail($recipient, $subject, $formcontent, $mailheader) ;

//showing alert and redirected to contact page
echo "<script>
alert('Your Message Sent Successfully!');
window.location.href = 'register.html';
</script>";

?>