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
         $username = $_POST["username"];  
 $password = $_POST["password"];
  if(($username=="aaa")&&($password="aaa"))
  {
      $_SESSION["flag"] =0;
        
         header('Location:panel.php');
         exit();
  }
        // put your code here
        ?>
    </body>
</html>
