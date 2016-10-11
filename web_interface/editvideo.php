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
  $id =  $_GET['id']; 
      
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM video WHERE id='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
         $title=$row["title"];
          $link=$row["link"];
        $message=$row["message"];
}}
        $conn->close();
        ?><?php
    
$conne = new mysqli($servername, $username, $fpassword, $dbname); 
// Check connection
if ($conn->connect_error) {
    echo 'rrrrrrrrrrr';
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE  FROM video WHERE id='$id' ";
echo $sql;
$result = $conne->query($sql);
if($result)
{
    echo 'fghytgfyugf';
    }
$_SESSION["videoflag"]="1";
        // put your code here
        ?>
        <form action="addvideoaction.php" method="post">
		
			
			
		   Title:
                   <input type="text" id="title" name="title"  value="<?php echo $title; ?>">
                    <br>  
                     Link:
                    <input type="text" id="link" name="link" value="<?php echo $link; ?>">
		   Message:
                    <input type="text" id="message" name="message" value="<?php echo $message; ?>">
                    <br>
			<input type="submit" value="Send" >
			
		
	</form>
    </body>
</html>
