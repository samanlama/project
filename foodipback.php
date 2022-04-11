<?php

$title=$_POST['title'];
$details=$_POST['details'];

include "conn.php";

$sql="insert into foodip (title, details) VALUES ('$title','$details')";
$res= mysqli_query( $conn, $sql);

if(!$res){
    die("failed insertion".mysqli_error($conn));
}

else{
   //header('location:login1front.php?success=true');
  echo'<script  type="text/javascript"> alert("Input Successfull")</script>';
  
}

?>