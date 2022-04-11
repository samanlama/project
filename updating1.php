<?php

include "conn.php";

$id=$_GET['id'];
$companyname=$_POST['cname'];
$email=$_POST['email'];
$password=$_POST['pword'];
$phn=$_POST['phn'];
$address=$_POST['address'];


$sql= "UPDATE foodorg SET companyname='$companyname', email='$email', password='$password', phn='$phn', address='$address' WHERE id=$id ";

$res= mysqli_query( $conn, $sql);

if($res){
    header('location:table1.php?update=true');
}
else{
    die('error'.mysqli_error($conn));
}


?>