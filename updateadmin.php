<?php

include "conn.php";
$id=$_GET['id'];
$sql= "SELECT * FROM foodip WHERE ID=$id" ;

$res= mysqli_query( $conn, $sql);

if(mysqli_num_rows($res)>0){

    $row=mysqli_fetch_assoc($res);

?>
<form action="updatingadmin.php?id=<?php echo $id;?>"   method="post">
        
            Title: <input type="text" id="title" name="title" value="<?php echo $row['title'];?>"><br><br>
            Details: <input type="text" id="details" name="details" value="<?php echo $row['details'];?>"><br><br>
        <input type="submit" value="UPDATE"><br>
</form>

<?php

}
else{
  echo'<script  type="text/javascript"> alert("Update Error")</script>';
}

?>