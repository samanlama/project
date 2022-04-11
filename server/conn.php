<?php

$server='localhost';
$username='root';
$password="";
$dbname="project";
$conn=mysqli_connect($server,$username,$password,$dbname);
// check connection
if(!$conn){
    die('Connection failed '.mysqli_connect_error($conn));
}

?>
