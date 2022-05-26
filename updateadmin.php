<?php

include "conn.php";
$id=$_GET['id'];
$sql= "SELECT * FROM foodip WHERE ID=$id" ;

$res= mysqli_query( $conn, $sql);

if(mysqli_num_rows($res)>0){

    $row=mysqli_fetch_assoc($res);

?>
<link rel="stylesheet" href="style/updateadmin.css">
<div class="suform">
<form action="updatingadmin.php?id=<?php echo $id;?>"   method="post">
        
            <div>Title: <input type="text" id="title" name="title" value="<?php echo $row['title'];?>"><br><br></div>
            <div>Details: <input type="text" id="details" name="details" value="<?php echo $row['details'];?>"><br><br></div>
        <input type="submit" value="UPDATE"class="ok"><br>
</form>
</div>

<?php

}
else{
  echo'<script  type="text/javascript"> alert("Update Error")</script>';
}

?>