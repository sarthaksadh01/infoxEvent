<?php
$to = "jain2anki@gmail.com";
$subject = "Cryptx Otp!";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
  <h2>Hey! your <b>Otp</b> for Cryptx registration is : </h2>
  <h1>Cryptx-Rules!</h1>
  •	The contest comprises of 10 questions in total. The duration of the contest is 3 hours.<br><br>

  •	The participants can move to the next question only if they have answered the current question correctly.<br><br>

  •	The participant can use ‘Candy’ to skip any one question. Candy can be used only once during the whole contest.<br><br>

  •	Leaderboard rankings will be decided based on the time taken by the participants to complete the contest.
  <h2>For any queries</h2>
  <p>Sarthak Sadh : 8076911425</p>
  <p>Ankit Jain   : 8650605941</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <cryptx@infoxpression.in>' . "\r\n";

mail($to,$subject,$message,$headers);
?>
