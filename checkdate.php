<?php
    include"config.php";
mysqli_query($objCon,"SET NAMES UTF8");
$select="SELECT date from time ";
    mysqli_query($objCon,$select);


  
session_start();
    ob_start();

$date=$_POST['ndate'];
    
$_SESSION['date']= $date; 
   
      
     
        
?>
<html>
<head>
    <title>จองห้องประชุมออนไลน์</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/arl.jpg"> 
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>
    
<body>
    
    <form name="checkdate" method="post" action="bookingpage.php">
        
        <?php  
        if(isset($_POST["ndate"])) {
      echo $_POST['ndate'];
    header("location:bookingpage.php");
       
} else {    
    echo "N0, date is not set";
      
} 
        
        
        ?>
    
        
    
    </form>
    
    
</body>    
    
</html>