<?php
session_start();
include "conn.php";
$phn=$_POST['phn'];
$password=$_POST['pword'];
$sql="SELECT * FROM foodorg WHERE phn='$phn' and password='$password'";
$res= mysqli_query($conn,$sql);


    if(mysqli_num_rows($res)==1){
        while($row=mysqli_fetch_assoc($res)){
            // print_r($row);
        $_SESSION['fid']=$row['id'];
        $_SESSION['name']=$row['companyname'];

        }
        echo $_SESSION['fid'];
        echo $_SESSION['name'];
        echo'<script  type="text/javascript"> alert("Login Successful")</script>';
        header('location:foodorgfront.php?success=true');
    }
else{
    echo'<script  type="text/javascript"> alert("Login Unsuccessful")</script>';
   
}



?>