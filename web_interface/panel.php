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
          if($_SESSION["flag"]==0)
          {
              $_SESSION["messageflag"]="0";
              $_SESSION["videoflag"]="0";
        // put your code here
        ?>
        <a href="addmessage.php">Add message</a>
        <a href="viewmessage.php">View message</a>
         <a href="addvideo.php">Add video</a>
        <a href="viewvideo.php">View video</a>
       <?php
          }
          ?>
    </body>
</html>
