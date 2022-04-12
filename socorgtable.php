<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of the Foods</title>
    <link rel="stylesheet" href="style/foodtable.css">
    
</head>

<br>

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

<div class="logo">
<a href="homepagefront.php">
                    <img src="image/leftover.png" alt="Logo">
                </a>
</div>
    <h1>Available Food</h1>


    <div class="tbl">
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Details</th>
                <th>Accept</th>
            </tr>
        </thead>
        <tbody>

            <?php

            include"conn.php";

            $sql="SELECT * FROM foodip";
            $res= mysqli_query( $conn, $sql);

            if(mysqli_num_rows($res)>0){
                //$ID=1;

            while($row=mysqli_fetch_assoc($res)){

                echo "<tr>";
                echo "<td>".$row['title']."</td>";
                echo "<td>".$row['details']."</td>";
             echo "<td><a class='delete' href='deleteadmin.php?id=".$row['ID']."  '>Accept </a> </td>";
               
                echo "</tr>";
                // $ID++;
                }
            }
            else{
                echo"Error 404 not found";
            }


            ?>
        </tbody>
    </table>
    </div>
</body>
</html>