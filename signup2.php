

<?php

$com=$_POST['cname'];
$mail=$_POST['email'];
$pass=$_POST['pword'];
$phn=$_POST['phn'];
$add=$_POST['address'];




include "conn.php";

$sql="INSERT INTO `socorg`(`companyname`, `email`, `password`, `phn`, `address`) VALUES ('$com','$mail','$pass','$phn','$add')";
// die("$password");
// echo "$password";
$res= mysqli_query( $conn, $sql);

if(!$res){
    die("failed insertion".mysqli_error($conn));
}

else{
   header('location:login2front.php?success=true');
//   echo'<script  type="text/javascript"> alert("Sign Up Succesfull")</script>';
  
}


 ?>