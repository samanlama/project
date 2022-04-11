<?php

include "conn.php";

$id= $_GET['id'];


$sql= "DELETE FROM foodorg WHERE id=$id ";

$res= mysqli_query( $conn, $sql);

if($res){
    header('location:table1.php?delete=true');
}
else{
    die('error'.mysqli_error($conn));
}
?>