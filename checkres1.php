<?php
    include"config.php";
    mysqli_query($objCon,"SET NAMES UTF8");
    $select="SELECT date from time ";
    mysqli_query($objCon,$select);
     
session_start();
    ob_start();


?>
<html>

   
    
<head>
    <title>จองห้องประชุมออนไลน์</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/arl.jpg"> 
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>
    
    
<body><h1 align="center">Check Room</h1>
 
    <form method="post" action="checkres2.php">
        DATE: <input type="date" name="ndate" >
  <input type="submit" value="check">  
    </form>
    
    
    </body>
    

</html>
