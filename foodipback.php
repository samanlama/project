<?php
session_start();
$title=$_POST['title'];
$details=$_POST['details'];
$id=$_SESSION['fid'];
include "conn.php";

$sql="insert into foodip (title, details, fid,status) VALUES ('$title','$details',$id,'pending')";
$res= mysqli_query( $conn, $sql);

if(!$res){
    die("failed insertion".mysqli_error($conn));
}

else{
   header('location:foodorgfront.php?success=true');
  echo'<script  type="text/javascript"> alert("Input Successfull")</script>';
  
}

?>