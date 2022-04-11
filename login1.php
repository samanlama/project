<?php
include "conn.php";
$phn=$_POST['phn'];
$password=$_POST['pword'];
$sql="SELECT phn,password FROM foodorg WHERE phn='$phn' and password='$password'";
$res= mysqli_query($conn,$sql);


    if(mysqli_num_rows($res)==1){
        echo'<script  type="text/javascript"> alert("Login Successful")</script>';
        header('location:foodorgfront.php?success=true');
    }
else{
    echo'<script  type="text/javascript"> alert("Login Unsuccessful")</script>';
   
}



?>