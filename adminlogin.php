<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Log In</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <br><br><br><br>
    <div class="logo">
        <a href="homepagefront.php">
            <img src="image/leftover.png" alt="Logo">
        </a>
    </div>
    <div class="linform">
        
        <h1>Admin Log In  </h1>
        <form action="adminloginback.php" method="post">
        Phone Number: <input type="text" id="phn" name="phn"><br><br>
        Password: <input type="password" id="pword" name="pword"><br><br>
        <input type="submit" value="OK" class="ok">  
        
    </form>

    </div>
</body>
</html>