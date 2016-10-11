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
 
     $id =  $_GET["id"]; 
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE  FROM message WHERE id='$id' ";
$result = $conn->query($sql);



if ($result) {
    // output data of each row
   
         header('Location:viewmessage.php');
        exit();
    
     }
$conn->close();
        // put your code here
        ?>
    </body>
</html>
