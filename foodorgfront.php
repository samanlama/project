<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Organization</title>
    <link rel="stylesheet" href="style/foodip.css">
</head>
<body>
    <br><br>
    <div class="logo">
        <a href="homepagefront.php">
            <img src="image/leftover.png" alt="Logo">
        </a>
    </div>
    <div class="entryform">
        
           <h1> Enter the food details </h1> 
           <form action="foodipback.php" method="post">
            <b>Food Title :</b><br> <textarea id="title" name="title" rows="2" cols="50" ></textarea><br><br><br>
            <!-- Food Details: <input type="textarea" id="fdetails" name="fdetails" rows="100" cols="50"><br><br> -->
            <b>Food Details:</b><br><br> <textarea id="details" name="details" rows="10" cols="50"></textarea><br><br>

                <input type="submit" value="OK" class="ok">  
                </form>
                </div>
    
</body>
</html>