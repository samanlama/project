<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-align:center;
        }
        .success{
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php 
    
    if(!empty($_GET)){
            if(!empty($_GET['success'])){
                echo"<h1 class=success> Insertion Success</h1>";
            }
            if(!empty($_GET['delete'])){
                echo"<h1 class=deleteS> Removal Success</h1>";
            }
            if(!empty($_GET['update'])){
                echo"<h1 class=updateS> Update Success</h1>";
            }
    }

    ?>
    <table border="1" style="width:50%">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Company Name:</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include"conn.php";

            $sql="SELECT * FROM foodorg";
            $res= mysqli_query( $conn, $sql);

            if(mysqli_num_rows($res)>0){
                $ID=1;

            while($row=mysqli_fetch_assoc($res)){

                echo "<tr>";
                echo "<td>".$ID."</td>";
                echo "<td>".$row['companyname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['phn']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td><a class='update' href='update1.php?id=".$row['id']."  '>update </a> </td>";
                echo "<td><a class='delete' href='delete1.php?id=".$row['id']."  '>delete </a> </td>";
               
                echo "</tr>";
                $ID++;
                }
            }
            else{
                echo"Error 404 not found";
            }


            ?>
        </tbody>
    </table>
</body>
</html>