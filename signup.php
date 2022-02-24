<?php
$cname=$_POST['cname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pword=$_POST['pword'];
$phn=$_POST['phn'];
$address=$_POST['address'];
$org=$_POST['foodorg'];

$phnlen= strlen($phn);
$passlen= strlen($pword);


if($cname==""||$uname==""||$email==""||$pword==""||$phn==""||$address==""||$org==""){
    echo'<script type="text/javascript"> alert("All Fields must be filled")</script>';
}

else if($phn[0]!='9'||$phn[1]!='8'){
    echo'<script type="text/javascript"> alert("Invalid Phone Number")</script>';
}

else if($phnlen!==10){
    echo'<script type="text/javascript"> alert("Invalid Phone Number")</script>';
}

else if($passlen>8){
    echo'<script type="text/javascript"> alert(" Password must be less than 8 characters")</script>';
}

else{
    echo'<script  type="text/javascript"> alert("Sign Up Succesfull")</script>';
}

?>