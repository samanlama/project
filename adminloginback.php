<?php
include "conn.php";
$phn=$_POST['phn'];
$pword=$_POST['pword'];
$sql="SELECT phn,pword FROM admin WHERE phn='$phn' and pword='$pword'";
$res= mysqli_query($conn,$sql);


    if(mysqli_num_rows($res)==1){
        echo'<script  type="text/javascript"> alert("Login Successful")</script>';
        header('location:admindboard.php?success=true');
    }
else{
    echo'<script  type="text/javascript"> alert("Login Unsuccessful")</script>';
   
}



?>