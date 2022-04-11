<?php

include "conn.php";

$id=$_GET['id'];
$title=$_POST['title'];
$details=$_POST['details'];


$sql= "UPDATE foodip SET title='$title', details='$details' WHERE ID='$id'";

$res= mysqli_query( $conn, $sql);

if($res){
    header('location:foodtable.php?update=true');
}
else{
    die('error'.mysqli_error($conn));
}


?>