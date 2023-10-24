<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" media="screen">

    <style>
        .navbarRegister {
            position: fixed;
            z-index: 1;
            width: 100%;
            overflow: hidden;
            margin-bottom: 100px;
            
        }

        .navbarButton{
            width:200px;
            justify-content:left;
            margin-left:20px;
        }
    </style>
</head>
<body>
    <div id="container"> 
    <div class="background">|
        <img class="image" src="image/liyue.jpg"></img>
    </div> 
    <div class="navbarRegister">
    <form action="login.php" class="navbarButton">
            <button type="submit" class="backToHome">Back to Home ?</form>
        </form>
    </div>
    <br><br><br>
        <form action="backend/prosesRegister.php" enctype="multipart/form-data" method="post" class="formRegister">
            <h3 class="login">Register</h3>

            <input type="hidden" name="user_role" class="labelRegister" value="user">

            <label for="firstName" class="labelRegister">First Name</label>
            <input type="text" placeholder="First Name" value="" name="firstName" class="input" id="firstName" required>
            
            <label for="lastName" class="labelRegister">Last Name</label>
            <input type="text" placeholder="Last Name" value="" name="lastName"  class="input" id="lastName" required> 

            <label for="birthDate" class="labelRegister">Birth Date</label>
            <input type="date" placeholder="Birth Date" value="" name="birthDate"  class="input" id="birthDate" required>
            
            <label for="gender" class="labelRegister">Gender</label>

            <label for="male" class="labelRegister">Male</label> 
            <input type="radio" name="gender" value="male" class="gender">

            <label for="male" class="labelRegister">Female</label>
            <input type="radio" name="gender" value="female" class="gender">

            <label for="email" class="labelRegister">Email</label>
            <input type="email" placeholder="Email" value="" name="email"  class="input" id="email" required>

            <label for="username" class="labelRegister">Username</label>
            <input type="text" placeholder="username" value="" name="username"  class="input" id="username" required>

            <label for="password" class="labelRegister">Password</label>
            <input type="password" placeholder="Password" value="" name="password"  class="input" id="password" required>

            <label for="password" class="labelRegister">Captcha</label>
          <input type="text" id="captcha-code" placeholder="Enter Captcha" class="input">
            <span id="captcha-error" class="error"></span>

            <div class="captcha-wrap">
                <div id="CaptchaImageCode">
                    <canvas id="CapCode" class="capcode" width="300" height="80"></canvas>
                </div>
                <input type="button" class="ReloadBtn" onclick="CreateCaptcha()">
                <button type="submit" onclick="CheckCaptcha(); Submit()">Register</button>
            </div> 
        </form>
        <br><br>
    </div>
    <script src="js/jquery.js"></script>
<script src="js/captcha.js"></script>
</body>
</html>