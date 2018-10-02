<?php
    session_start();
    function connect_to_database()
    {
        $link = mysqli_connect("localhost","navtradi_sadh","sarthak01","navtradi_freelancer");
        if(mysqli_error($link))
        {
            die("Failed connecting to databse.. Please try again!");
        }
        else return $link;
    }
    
    function check_if_login(){
        if(isset($_SESSION['email'])){
            return 1;
        }
        else return 0;
    }
    
    function send_otp($email,$name)
    
    {
        
        $otp = mt_rand(111111, 999999);
        $msg = "hello $name otp for Solve to Unlock registration: $otp";
        if(mail($email,"Otp for registration",$msg))
        {
            return $otp;
        }
        
        else return 0;
        
        
        
        
    }
    
    function get_current_q(){
        $email = $_SESSION['email'];
        $link = connect_to_database();
        $query = "SELECT prob FROM `users` WHERE email = '$email'";
        $result =mysqli_query($link,$query);
        if($result){
            $row = mysqli_fetch_assoc($result);
            return $row['prob'];
        }
        else return 0;
        
        
    }
    
    function get_candy(){
        
        $link = connect_to_database();
        $query = "SELECT prob FROM `users` WHERE email = '$email'";
        $result =mysqli_query($link,$query);
        if($result){
            $row = mysqli_fetch_assoc($result);
            return $row['candy'];
        }
        else return -1;
        
        
    }
    
    function load_q(){
        
        $q_no =get_current_q();
        $link = connect_to_database();
        $query = "SELECT * FROM `questions` WHERE id = '$q_no'";
        $result = mysqli_query($link,$query);
        if($result){
            $row = mysqli_fetch_assoc($result);
            $question = array(
                              "qno"=>$row['id'],
                              "qtext"=>$row['text'],
                              "qtype"=>$row['qtype'],
                              "qcontent"=>$row['qcontent']
                              );
            header('Content-type: application/json');
            echo json_encode($question);
            
        }
        else echo "Error Loading QUESTION: ";
        
        
    }
    
    
    if(isset($_POST['otp_sent']))
    
    {
        $link =connect_to_database();
        $_SESSION['name'] =     $_POST['name'];
        $_SESSION['email'] =    $_POST['email'];
        $_SESSION['password'] =     $_POST['password'];
        $_SESSION['colg'] =     $_POST['colg'];
        $e = $_SESSION['email'];
        $query2 = "SELECT * FROM `users` WHERE email = '$e'";
        $result2 = mysqli_query($link,$query2);
        if($result2){
            if(mysqli_num_rows($result2)>0){
                echo "User Already Exist";
            }
            
            else{
                
                $otp = send_otp($_POST['email'],$_POST['name']);
                if($otp!=0)
                {
                    $_SESSION['otp'] = $otp;
                    $_SESSION['name'] =     $_POST['name'];
                    $_SESSION['email'] =    $_POST['email'];
                    $_SESSION['password'] =     $_POST['password'];
                    $_SESSION['colg'] =     $_POST['colg'];
                    echo "otp sent successfully!";
                    
                }
                else echo "Error sending otp please try again";
                
                
            }
            
        }
        
        
        else die("Error!");
        
    }
    
    
    if(isset($_POST['otp_r']))
    
    {
        
        if(isset($_SESSION['otp']))
        {
            if($_POST['otp_ans']==$_SESSION['otp'])
            {
                
                $link = connect_to_database();
                $name = $_SESSION['name'];
                $email = $_SESSION['email'];
                $password = $_SESSION['password'];
                $colg = $_SESSION['colg'];
                $prob =0;
                $query = "INSERT INTO `users` (name,email,password,colg,prob)
                VALUES('$name','$email','$password','$colg','$prob')";
                $result = mysqli_query($link,$query);
                if($result)
                {
                    session_destroy();
                    echo "Success!";
                }
                else echo "no database connect";
                
            }
            else echo "not correct";
            
        }
        
        else echo 'otp Expired!';
        
    }
    
    
    
    if(isset($_POST['show_leaderboard']))
    
    {
        
        $link = connect_to_database();
        $query = "SELECT * FROM `users`
        ORDER BY prob DESC ";
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
        
        if(isset($_SESSION['email'])){
            
            $ans = $_POST['ans'];
            $email = $_SESSION['email'];
            $link = connect_to_database();
            $qno = get_current_q();
            $query2 = "SELECT * FROM `questions` WHERE id = '$qno'";
            $result2 = mysqli_query($link,$query2);
            if($result2) {
                $row2 = mysqli_fetch_assoc($result2);
                if($row2['answer']==$ans)
                {
                    if($qno!=10)
                        $query3 = "UPDATE `users` SET prob = prob+1 WHERE email ='$email'";
                    else
                        $query3 = "UPDATE `users` SET completed = 'yes' WHERE email ='$email'";
                    $result3 = mysqli_query($link,$query3);
                    if($result3){
                        if($qno==10){
                            echo "Completed";
                        }
                        
                        else echo "Correct Answer!";
                    }
                    else echo "Error occured try again!";
                    
                }
                
                else echo "Wrong Answer1";
                
            }
            
            else echo $qno;
            
        }
        
        else echo "User Not Logged in!";
        
        
        
        
    }
    
    if(isset($_POST['skip']))
    
    {
        
        $email = $_SESSION['email'];
        $link = connect_to_database();
        $qno = get_current_q();
        $candy =get_candy();
        if($candy>0){
            if($qno!=10)
                $query = "UPDATE `users` SET prob = prob+1,candy=candy-1 WHERE email ='$email'";
            else
                $query = "UPDATE `users` SET completed = 'yes',candy=candy-1 WHERE email ='$email'";
            $result = mysqli_query($link,$query);
            if($result){
                if($qno==10)echo "Completed!";
                else echo "Correct Answer!";
            }
            else echo "Error occured try again!";
            
        }
        else echo "No Candy Left!";
        
        
        
    }
    
    
    
    
    ?>

