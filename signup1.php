

<?php


 $cname=$_POST['cname'];
$email=$_POST['email'];
$pword=$_POST['pass'];
$phn=$_POST['phn'];
$address=$_POST['address'];


$phnlen= strlen($phn);
$passlen= strlen($pword);


if($cname==""||$email==""||$pword==""||$phn==""||$address==""){
    echo'<script type="text/javascript"> alert("All Fields must be filled")</script>';
    // header('location:signup1front.php');
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
include "conn.php";

// $cname=$_POST['cname'];
// $email=$_POST['email'];
// $pword=$_POST['pass'];
// $phn=$_POST['phn'];
// $address=$_POST['address'];

// print_r($_POST);
// echo $_POST['pword'];

// die("$password");


$sql="INSERT INTO `foodorg`(`companyname`, `email`, `password`, `phn`, `address`) VALUES ('$cname','$email','$pword','$phn','$address')";
$res= mysqli_query( $conn, $sql);

if(!$res){
    die("failed insertion".mysqli_error($conn));
}

else{
   header('location:login1front.php?success=true');
  // echo'<script  type="text/javascript"> alert("Sign Up Succesfull")</script>';
  
}

}
 ?>