<?php

include "conn.php";

$id= $_GET['id'];


$sql= "DELETE FROM socorg WHERE id=$id ";

$res= mysqli_query( $conn, $sql);

if($res){
    header('location:table2.php?delete=true');
}
else{
    die('error'.mysqli_error($conn));
}
?>