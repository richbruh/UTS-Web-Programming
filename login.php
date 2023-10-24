

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Menu Restoran</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" media="screen">
    
</head>
<body class="bg">
    <div id="container"> 

    <div class="background">
        <img class="image" src="image/liyue.jpg"></img>
    </div> 
    <div class="navbar">
        <h1 class="h1">Food Impact</h1> 
    </div>

    
        <div class="form">
        <form action="backend/prosesLogin.php" method="post">
            <h3 class="login">Login</h3>

            <label for="username">Username</label>
            <input type="text" placeholder="Email" name="username"  class="input" id="username" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password"  class="input" id="password" required>

            <button type="submit">Log In</button> <br/>
        </form> <br/>

        <form action ="register.php">
            <button type="submit">Register</button> 
        </form> 
        </div>
        
        
    </div>
</body>
</html>
