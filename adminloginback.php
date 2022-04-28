<?php
session_start();
include "conn.php";
$phn=$_POST['phn'];
$pword=$_POST['pword'];
$sql="SELECT * FROM admin WHERE phn='$phn' and pword='$pword'";
$res= mysqli_query($conn,$sql);


    if(mysqli_num_rows($res)==1){
        while($row=mysqli_fetch_assoc($res)){
            print_r($row);
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];

        }
        // echo'<script  type="text/javascript"> alert("Login Successful")</script>';
        header('location:admindboard.php?success=true');
    }
else{
    echo'<script  type="text/javascript"> alert("Login Unsuccessful")</script>';
   
}



?>