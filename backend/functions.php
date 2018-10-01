<?php
// connect to data base function......


function connect_to_database()
{


    $link = mysqli_connect("localhost","root","","solve-to-unlock");
    if(mysqli_error($link))
    {
      die("Failed connecting to databse.. Please try again!");
    }
    else return $link;


}

// generating random otp ---- and sending otp to given email

function send_otp($email,$name)

{

  $otp = mt_rand(100000, 999999);
  $msg = "hello $name otp for Solve to Unlock registration: $otp";
  if(mail($email,"Otp for registration",$msg))
  {
    return $otp;
  }

  else return 0;

}


function go_to_next_q(){

  




}

// Sending otp once user fills all the details.....

if(isset($_POST['otp_sent']))

{
   $link =connect_to_database();
   $_SESSION['name'] =     $_POST['name'];
   $_SESSION['email'] =    $_POST['email'];
   $_SESSION['password'] =     $_POST['password'];
   $_SESSION['colg'] =     $_POST['colg'];
   $_SESSION['year'] = $_POST['year'];
   $e = $_SESSION['email'];
  $query2 = "SELECT * FROM `users` WHERE email = '$e'";
  $result2 = mysqli_query($link,$query2);
  if($result2){
    if(mysqli_count_rows($result2)>0){
      echo "User Already Exist";

    }

    else{

      $otp = send_otp($_POST['email'],$_POST['name']);
      if($otp!=0)
      {
        $_SESSION['otp'] = $otp;
        echo "otp sent successfully!";

      }
      else echo "Error sending otp please try again";


      }

    }


  else die("Error!");

}

// Validating otp--------

if(isset($_POST['otp_received']))

{

if(isset($_SESSION['otp']))
{
  if($_POST['otp_ans']==$_SESSION['otp'])
  {

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $colg = $_SESSION['colg'];
    $year = $_SESSION['year'];
    $prob =0;
    $query = "INSERT INTO `users` (name,email,password,colg,year,prob)
    VALUES('$name','$email','$password','$colg','$year','$prob')";
    $result = mysqli_query($link,$query);
    if($result)
    {
      session_destroy();
      echo "Success!";
    }
    else echo 'Unkown error occured please try again!';
  }
  else echo "invalid otp!";

}

else echo 'otp Expired!';

}

// Showing  leaderboard based on number of questions solved and who solved first

if(isset($_POST['show_leaderboard']))

{

  $link = connect_to_database();
  $query = "SELECT * FROM `users`
            ORDER BY prob DESC";
  $result = mysqli_query($link,$query);
  if($result){

    $rank =1;

    while($row = mysqli_fetch_assoc($result))

    {
      echo $row['name'];
      $rank++;

    }

  }

  else echo "Connection failed..";


}

// login function to check if user exist or not

if(isset($_POST['login']))
{

  $email = $_POST['email'];
  $password = $_POST['password'];

  $link = connect_to_database();
  $query ="SELECT id FROM `users` WHERE email = '$email'";
  $result =mysqli_query($link,$query);
  if($result){
    if(mysqli_num_rows($result)>0)

    {
      echo 'success';
      $_SESSION['email']=$email;

    }

    else {
      echo 'Invalid credentials!';
    }
  }
  else echo 'Connection Error!';

}

// submit  question and verify..!

if(isset($_POST['attempt']))

{
  $ans = $_POST['ans'];
  $email = $_SESSION['email'];
  $link = connect_to_database();
  $query = "SELECT prob FROM `users` WHERE email = '$email'";
  $result = mysqli_query($link,$query);
  if($result)

  {

    $row = mysqli_fetch_assoc($result);
    $qno = $row['prob'];
    $query2 = "SELECT ans FROM `questions` WHERE id = '$qno'";
    $result2 = mysqli_query($link,$query2);
    if($result2) {
      $row2 = mysqli_fetch_assoc($result2);
      if($row2['ans']==$ans)
      {
        if($qno!=10)
        $query3 = "UPDATE `users` SET prob = 'prob'+1 WHERE email ='$email'";
        else
        $query3 = "UPDATE `users` SET completed = 'yes' WHERE email ='$email'";
        $result3 = mysqli_query($link,$query3);
        if($result3){
          if($qno==10)echo "Completed!";
          else echo "Correct Ans!";
        }
        else echo "Error occured try again!";

      }

      else echo "Incorrect Ans!";

    }

    else echo "Error occured try again!";

  }

  else echo "Error occured try again!";

}

if(isset($_POST['skip']))

{

  $email = $_SESSION['email'];
  $link = connect_to_database();
  $query = "SELECT * FROM `users` WHERE email = '$email'";
  $result =mysqli_query($link,$query);
  if($result){
    $row = mysqli_fetch_assoc($result);
    $qno = $row['prob'];
    if($row['candy']>0){
      if($qno!=10)
      $query3 = "UPDATE `users` SET prob = 'prob'+1,candy='candy'-1 WHERE email ='$email'";
      else
      $query3 = "UPDATE `users` SET completed = 'yes',candy='candy'-1 WHERE email ='$email'";
      $result3 = mysqli_query($link,$query3);
      if($result3){
        if($qno==10)echo "Completed!";
        else echo "Correct Ans!";
      }
      else echo "Error occured try again!";

    }
    else echo "No Candy Left!";

  }

  else echo "Error occured try again!";


}

?>
