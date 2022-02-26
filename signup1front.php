<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    
</head>
<body>

    <div class="logo">
        <a href="homepagefront.php">
            <img src="leftover.png" alt="Logo">
        </a>
    </div>
    <div class="suform">
        <form action="signup.php" method="post">
           <h1> Sign Up Form Food Organization </h1> 
            Company Name: <input type="text" id="cname" name="cname"><br><br>
            Email: <input type="text" id="email" name="email"><br><br>
            Password: <input type="password" id="pword" name="pword"><br><br>
            Contact Number: <input type="text" id="phn" name="phn"><br><br>
            Address:<input type="text" id="address" name="address"><br><br>
                <input type="submit" value="OK" class="ok">  
                <u>or</u>
                <a href="loginfront.php">
                    <input type="button" value="Log In " class="lin">
                </a>
               
            
           

    
        </form>

    </div>
</body>
</html>