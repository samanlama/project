<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Successful Table</title>
</head>
<body>
<table border="1" style="width:50%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Food ID</th>
                <th>Title </th>
                <th>Details</th>
                <th>Status</th>
              
            </tr>
        </thead>
        <tbody>
        <?php

include"conn.php";

$sql="SELECT *
FROM foodsuccess
FULL JOIN foodip
ON inId = foodip.ID;";
$res= mysqli_query( $conn, $sql);

if(mysqli_num_rows($res)>0){
    

while($row=mysqli_fetch_assoc($res)){

    echo "<tr>";
  
    echo "<td>".$row['sId']."</td>";
    echo "<td>".$row['fid']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['details']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "</tr>";
   
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