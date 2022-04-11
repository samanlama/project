<?php

include "conn.php";

$id= $_GET['id'];


$sql= "DELETE FROM foodip WHERE id=$id ";

$res= mysqli_query( $conn, $sql);

if($res){
    header('location:foodtable.php?delete=true');
}
else{
    die('error'.mysqli_error($conn));
}
?>