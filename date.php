<?php
    include"config.php";
    mysqli_query($objCon,"SET NAMES UTF8");
    $select="SELECT date from time ";
    mysqli_query($objCon,$select);
?>

<html>
<head>
    <title>จองห้องประชุมออนไลน์</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/arl.jpg"> 
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>

<body>
<h1 align="center" border="10" size="2000">การจองห้องประชุม</h1>  
    
<form name="date" method="post" action="checkdate.php">
  DATE: <input type="date" name="ndate" >
  <input type="submit" value="check">
    
       
</form>
    

    
    
    
</body>    


</html>