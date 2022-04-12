<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/signup.css">
    
</head>
<body>

    <div class="logo">
        <a href="homepagefront.php">
            <img src="image/leftover.png" alt="Logo">
        </a>
    </div>
    <div class="suform">
    <h1> Sign Up Form </h1>
    <p>(Social organization)</p>
        <form action="signup2.php" method="post">
            
            <div>Company Name: <input type="text" id="cname" name="cname"><br><br></div>
            <div><label>Email: <input type="text" id="email" name="email"><br><br></div>
           <div> Password: <input type="password" id="pword" name="pword"><br><br></div>
            <div>Contact Number: <input type="text" id="phn" name="phn"><br><br></div>
            <div>Address:<input type="text" id="address" name="address"><br><br></div>
                <input type="submit" value="OK" class="ok">  
                
            
           

    
        </form>

    </div>
</body>
</html>