<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <style>
        form{
            /* text-align: center; */
            width: 30vw;
        }
        .main{
            display: flex;
            /* align-items: center; */
            justify-content: center;
        }
    </style>
</head>
<body> 
    <div class="main">
<form action="save.php" method="post" >
        <fieldset  >
            <legend style="color:#00008B" >
                <b>Admission Form</b>
            </legend>
            
    <label for="name" style="color:#00008B" ><b>Name:</b></label>
    <input type="text" id="name" name="name" tabindex="1" ><br>
    <br>

    <label for="Roll"style="color: #00008B" ><b>Roll:</b></label>
    <input type="text" id="roll" name="roll"  tabindex="2"><br>
    <br>
    <label for="email"style="color: #00008B" ><b>Email:</b></label>
    <input type="text" id="roll" name="email"   tabindex="2"><br>
    <br>

    <label for="college" style="color:#00008B" ><b>College:</b></label>
    <select name="college" id="cou"   >
        <option value="Prime" >Prime</option>
        <option value="nccs">NCCS</option>
        <option value="ncit">NCIT</option>
      </select><br>
      <br>

    <label for="gender" style="color:#00008B"  ><b>Gender:</b></label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        <br>
        
        
        
        <label for="about" style="color:#00008B"   ><b>About me:</b></label><br>
        <textarea name="about" value="about id="" cols="30" rows="10"></textarea>
        <br>
        
        <label for="hoobies" style="color:#00008B"  ><b>Hobbies:</b></label>
            <input type="checkbox" id="" name="football" value="football">
            <label for="">Football</label>
            <input type="checkbox" id="" name="cricket" value="cricket">
            <label for="">cricket</label>
            <input type="checkbox" id="" name="swimming" value="swimming">
            <label for="">swimming</label><br>
            <br>
    <input type="submit" value="Submit">
    <input type="reset">
    <br>

    </fieldset>
    </form> 
</div>
</body>
</html>