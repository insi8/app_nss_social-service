<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                  $servername = "localhost";
$username = "root";
$fpassword = "root";
$dbname = "nssapp";
 
      
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM video  ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $id=$row["id"];
        
       
        
         
        
        ?>
<tbody>

    <tr><td><?=   $row["title"]?></td<td><?=   $row["link"]?></td> <td><?=   $row["message"]?></td><td>  <a href="deletevideo.php?id=<?php echo $row['id']?>"> delete</a>      </td><td>  <a href="editvideo.php?id=<?php echo $row['id']?>"> edit</a>      </td</tr>
      
</tbody>
       
        <br>   
            
         <?php  
         
     
    }
} else {
    
    
}

$conn->close();
        // put your code here
        ?>
    </body>
</html>
