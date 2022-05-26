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
        <h1> Sign Up Form</h1>
        <p>(Food organization)</p>
        <form action="signup1.php" method="post">
            <div> Company Name: <input type="text" id="cname" name="cname"><br><br></div>
            <div> <label> Email:</label> <input type="text" id="email" name="email"><br><br></div>
            <div> Password: <input type="password" id="pword" name="pass"><br><br></div>
            <div> Contact Number: <input type="text" id="phn" name="phn"><br><br></div>
            <div> Address:<input type="text" id="address" name="address"><br><br></div>
                <input type="submit" value="OK" class="ok">  
                
               
            
           

    
        </form>
        <script>
        let name=document.getElementById("cname");
        let email=document.getElementById("email");
        let phone=document.getElementById("phn");
        let pass=document.getElementById("pass");

        let form=document.getElementsByTagName("form")[0];
        form.addEventListener("submit",function(e){
            
            console.log(email.value);
            if(name.value==""||email.value==""||phone.value==""||pass.value==""){
                alert("all field should be filled");
                e.preventDefault();
            }
            if(phone.value.length!==10){
                alert("Phone number should be 10 digits");
                e.preventDefault();
            }
            if(!phone.value.match("^[98][0-9]*$")){
                alert("Phone number is not valid(should start with 98)");
                e.preventDefault();
            }
            if(!email.value.match("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/")){
                alert("E-mail is not valid");
                e.preventDefault();
            }
            // else{
            //     alert("Signed up succesfully");
            // }
        });
</script>

    </div>
</body>
</html>