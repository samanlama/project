<?php

$phn=$_POST['phn'];
$pword=$_POST['pword'];

if($pword==""||$phn==""){
    echo'<script type="text/javascript"> alert("All Fields must be filled")</script>';
}
else {
    echo'<script type="text/javascript"> alert("Logged In")</script>';
}

?>