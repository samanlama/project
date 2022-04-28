
<?php
   
   session_start();
if(!isset($_SESSION['name'])) {
   header("Location: homepagefront.php?fail=true");
   exit;
}
?>
<?php

include "conn.php";

$id= $_GET['id'];


$sql= "SELECT * FROM socorg WHERE id=$id ";

$res= mysqli_query( $conn, $sql);

if(mysqli_num_rows($res)>0){

    $row=mysqli_fetch_assoc($res);

?>
<link rel="stylesheet" href="style/update2.css">

<div class="logo">
<a href="homepagefront.php">
            <img src="image/leftover.png" alt="Logo">
        </a>
</div>

<div class="suform">


<form action="updating2.php?id=<?php echo $id;?>"   method="post">

        
        <div>Company Name: <input type="text" id="cname" name="cname" value="<?php echo $row['companyname'];?>"><br><br></div>
           <div> Email: <input type="text" id="email" name="email" value="<?php echo $row['email'];?>"><br><br></div>
           <div> Password: <input type="password" id="pword" name="pword" value="<?php echo $row['password'];?>"><br><br></div>
           <div> Contact Number: <input type="text" id="phn" name="phn" value="<?php echo $row['phn'];?>"><br><br></div>
          <div>Address:<input type="text" id="address" name="address" value="<?php echo $row['address'];?>"><br><br></div>
        <input type="submit" value="UPDATE" class="ok"><br>
</form>

</div>

<?php

}
else{
  echo'<script  type="text/javascript"> alert("Update Error")</script>';
}
?>