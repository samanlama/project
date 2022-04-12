<?php

include "conn.php";

$id= $_GET['id'];


$sql= "SELECT * FROM foodorg WHERE id=$id ";

$res= mysqli_query( $conn, $sql);

if(mysqli_num_rows($res)>0){

    $row=mysqli_fetch_assoc($res);

?>
<link rel="stylesheet" href="style/signup.css">
<form action="updating1.php?id=<?php echo $id;?>"   method="post">
        
        Company Name: <input type="text" id="cname" name="cname" value="<?php echo $row['companyname'];?>"><br><br>
            Email: <input type="text" id="email" name="email" value="<?php echo $row['email'];?>"><br><br>
            Password: <input type="password" id="pword" name="pword" value="<?php echo $row['password'];?>"><br><br>
            Contact Number: <input type="text" id="phn" name="phn" value="<?php echo $row['phn'];?>"><br><br>
            Address:<input type="text" id="address" name="address" value="<?php echo $row['address'];?>"><br><br>
        <input type="submit" value="UPDATE"><br>
</form>

<?php

}
else{
  echo'<script  type="text/javascript"> alert("Update Error")</script>';
}
?>