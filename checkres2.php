<?php
    include"config.php";

session_start();
    ob_start();
$date=$_POST['ndate'];
    
$_SESSION['date']= $date; 
    mysqli_query($objCon,"SET NAMES UTF8");
    $select="SELECT * FROM timedata WHERE date='".$_SESSION['date']."' ORDER BY room,time ASC ";
    $result= mysqli_query($objCon,$select);
    $timecheck=mysqli_fetch_all($result, MYSQLI_ASSOC);
      

?>
<html>
    
 <head>
    <title>จองห้องประชุมออนไลน์</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/arl.jpg"> 
    <link rel="stylesheet"  type="text/css" href="style.css">
</head> 

<body><h1 align="center ">Check Room</h1>
<p align="center"><?php echo $_SESSION['date']; ?></p><br>   
  
   <table border="1" align="center">
<th style="width:10%">Room</th>
<th style="width:15%">Time</th>
<th style="width:40%">Name</th>
<th style="width:35%">Department</th>    

<?php foreach($timecheck as $time): 
$reftime="SELECT * FROM timedata WHERE name='".$time['name']."' "; 

/*    
$objquery=mysqli_query($objCon,$reftime);
$timeresult=mysqli_fetch_array($objquery);   

    
echo  $timeresult["name"] ; 
*/?>
<tr>
<td style="text-align:center"><?php echo  $time['room'] ;   echo"    "; ?></td>
<td style="text-align:center"><?php echo  $time['time'];    echo"    "; ?></td>
<td style="text-align:center"><?php echo  $time['name'];    echo"    "; ?></td>
<td style="text-align:center"><?php echo  $time['department'];    echo"   "; ?></td>   
    

   
  
    <?php  endforeach
    ?> 
    </tr> 
   
    </table>
    <br><br>
<div style="margin-left: 25% ;" >
  <button ><a href="main.php" >Back</a></button>   
</div>   
 </body>

</html>