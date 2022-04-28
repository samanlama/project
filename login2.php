

<?php
session_start();
include "conn.php";
$phn=$_POST['phn'];
$password=$_POST['pword'];
$sql="SELECT * FROM socorg WHERE phn='$phn' and password='$password'";
$res= mysqli_query($conn,$sql);


        if(mysqli_num_rows($res)==1){
            while($row=mysqli_fetch_assoc($res)){
                // print_r($row);
            $_SESSION['fid']=$row['id'];
            $_SESSION['name']=$row['companyname'];
    
            }
        echo'<script  type="text/javascript"> alert("Login Successful")</script>';
        //header
        header("location:socorgtable.php");
    }

else{
    echo'<script  type="text/javascript"> alert("Login Unsuccessful")</script>';
}





// if($pword==""||$phn==""){
//     echo'<script type="text/javascript"> alert("All Fields must be filled")</script>';
// }
// else {
//     echo'<script type="text/javascript"> alert("Logged In")</script>';
// }

?>