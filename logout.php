<?php
session_start();
session_unset();
session_destroy();
header('location:homepagefront.php?logout=true');
?>