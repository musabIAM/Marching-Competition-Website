<?php
session_start();
$_SESSION['salaakun'];
if ($_SESSION['salaakun'] == true) {
  echo "<script> alert(\"UserName atau Password salah\");</script>";
  $_SESSION['salaakun']=null;
}

if ($_SESSION['cek'] == true) {
  echo "<script> alert(\"Password dengan Confrimasi tidak cocok\");</script>"; 
  $_SESSION['cek']=null; 
}

  
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<div style="padding: 25%; padding-top: 10%;">
  <div class="grid">
  <div class="cube">
    <div class="item">
      <ul class="tabs">
        <li>
          <input type="radio" name="tabs" id="tab1" checked="checked"/>
          <label class="nav" for="tab1">Login</label>
          <div class="tab-content" id="loginTabContent">
           <form method="post" id="loginForm" action="log.php">
              <label class="frm" for="email">UserName</label>
              <input type="text" name="login" required="required"/>
              <label class="frm" for="password">Password</label>
              <input type="password" name="password" required="required"/>
              <button id="loginBtn" type="submit">Login</button><span>Forgot your password?</span>
            </form>
  



          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2"/>
          <label class="nav" for="tab2">Register</label>
          <div class="tab-content" id="signupTabContent">
            <form action="reg.php" method="post">
              <label class="frm" for="email">User Name</label>
              <input type="text" name="regus" required="required"/>
              <label class="frm" for="email">Email Address</label>
              <input type="email" name="regem" required="required"/>
              <label class="frm" for="password">Password</label>
              <input type="password" name="regpass" required="required"/>
              <label class="frm" for="password">Confirm Password</label>
              <input type="password" name="regconpass" required="required"/>
              <button id="loginBtn" type="submit">Register</button>
            </form>
            
          </div>
        </li>
      </ul>
    </div>
    <div class="done">
      <canvas id="canvas"></canvas>
      <div id="fill"></div>
      <div class="success"><span>Login Successful</span><i class="fa fa-check"></i></div>
    </div>
  </div>
</div>
</div>

 <!--  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
 -->
</body>
</html>
