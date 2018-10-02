<html>
<head>

<link rel="stylesheet" href="login.css">
<script src="jquery.js"></script>
<script src = "login.js"></script>

</head>

<body>

<div class="signupSection" id="signup">
  <div class="info">
    <h2>Solve to Unlock</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Infox is here</p>
  </div>
  <form  class="signupForm" name="signupform">
    <h2>Sign Up</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="name" name="username" placeholder="Name" value="" />
      </li>
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>

     
<li>
        <label for="college"></label>
        <input type="text" class="inputFields" id="colg" name="college" placeholder="Your Collage name" value="" required/>
      </li>
      

      <li>
        <label for="Course Year"></label>
        <input type="text" class="inputFields" id="year" name="year" placeholder="Course" value=""/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value=""/>
      </li>
      <li  id="otp" style="display:none;">
        <label for="otp"></label>
        <input type="password" class="inputFields" id="otp2" name="otp" placeholder="OTP" value=""/>
      </li>
      
      
      
      <li id="center-btn" class="otps">
        <button class="snd" type=""  id="join-btn" name="join" alt="Join" value="">join</button>
      </li>
      <li id="center-btn" class="otpr" style="display:none;">
        <button type="submit" class="rotp" id="join-btn" name="join" alt="Join" value="">join</button>
      </li>
    </ul>
    <h4 id="al" onclick="login();">Already joined! login here</h4>

  </form>
</div>



<div class="signupSection"  style="display:none" id="login">

<div class="info">
<h2>Thanks for joining!</h2>
    <h2>Solve to Unlock</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Infox is here</p>
  </div>
  
<form action="#" method="POST" class="signupForm" name="signupform">
    <h2>Login here</h2>
    <ul class="noBullet">
    <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email1" name="email" placeholder="Email" value="" required/>
      </li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password1" name="password" placeholder="Password" value=""  required/>
      </li>
      <li id="center-btn">
        <button type="submit" class="log" id="join-btn" name="join" alt="Join" value="">Log in</button>
      </li>
    </ul>
    <h4 id="al" onclick="signup()">Wants to join! Click here</h4>
  </form>
</div>
</body>
</html>
