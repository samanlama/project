<?php

include "conn.php";

$id= $_GET['id'];


$sql= "UPDATE foodip SET `status` = 'success' WHERE foodip.id=$id ";

$res= mysqli_query( $conn, $sql);

if($res){
    header('location:socorgtable.php?delete=true');
}
else{
    die('error'.mysqli_error($conn));
}
?>