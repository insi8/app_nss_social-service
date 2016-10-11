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
        $title = $_POST["title"];  
        $link = $_POST["link"];  
         $message = $_POST["message"];  
        
       $sql = "INSERT INTO video (title,link,message) VALUES ('$title','$link','$message')" ;
$result = $conn->query($sql);


if ($result) {
    // output data of each row
   
        if($_SESSION["videoflag"]=="0")
        {
         header('Location:panel.php');
         exit();
        }
        else
        {$_SESSION["videoflag"]="0";
            header('Location:viewvideo.php');
         exit();
            
        }
 
}
if($result !== TRUE) {
   
    header('Location:staff.php');
         exit();
}  
         
        // put your code here
        ?>
    </body>
</html>
