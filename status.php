<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Successful Table</title>
</head>
<link rel="stylesheet" href="style/status.css">
<body>
<div class="logo">
        <a href="admindboard.php">
            <img src="image/leftover.png" alt="Logo">
        </a>
    </div>
<script>
        let i=0;
    </script>
 
<table border="1" >
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

// $sql="SELECT *
// FROM foodsuccess
// FULL JOIN foodip
// ON inId = foodip.ID;";

$sql="SELECT *
FROM foodip";
$res= mysqli_query( $conn, $sql);

if(mysqli_num_rows($res)>0){
    

while($row=mysqli_fetch_assoc($res)){
   
    echo "<tr>";
  
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['fid']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['details']."</td>";
    
    echo "<td class='status'>".$row['status']."</td>";
    // echo "<td id='status'>".$row['status']."</td>";
    ?>
    <script>
        i++;
    </script>
    <?php
    echo "</tr>";
    
    }
}
else{
    echo"Error 404 not found";
}


?>
        </tbody>
    </table>
    
    <script>
        // console.log(i);
  
    //   console.log(nimesh);
      for(let a=0;a<i;a++){

      var status=document.getElementsByClassName('status')[a].innerHTML;
      var status1=document.getElementsByClassName('status')[a];
    //   console.log(status);
    //   console.log(status1);

      if(status=='success'){
        status1.style.backgroundColor='green';
      }
      if(status=='pending'){
        status1.style.backgroundColor='yellow';
      }
    }
      
  </script>
</body>
</html>