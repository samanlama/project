

<?php

$companyname=$_POST['cname'];
$email=$_POST['email'];
$password=$_POST['pword'];
$phn=$_POST['phn'];
$address=$_POST['address'];




include "conn.php";

$sql="insert into socorg (companyname, email, password, phn, address) values ('$companyname','$email','$password','$phn','$address')";
// die("$password");
echo "$password";
// $res= mysqli_query( $conn, $sql);

// if(!$res){
//     die("failed insertion".mysqli_error($conn));
// }

// else{
//    header('location:login2front.php?success=true');
// //   echo'<script  type="text/javascript"> alert("Sign Up Succesfull")</script>';
  
// }


 ?>