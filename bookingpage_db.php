<?php
    include"config.php";
mysqli_query($objCon,"SET NAMES UTF8");

  session_start();
    ob_start();


  if(isset($_POST["submit"])){
      
     
      
      
      
        for($num=0;$num<count($_POST["res1"]);$num++){
                $ulistT ="INSERT INTO timedata (date,time,room,name,department) VALUES ('".$_SESSION['date']."','".$_POST['res1'][$num]."','1','".$_POST['fname']."','".$_POST['dname']."')";
                $goulistT = mysqli_query($objCon,$ulistT);
                
            
             
  }

      
      
     for($num=0;$num<count($_POST["res2"]);$num++){
                $ulistT ="INSERT INTO timedata (date,time,room,name,department) VALUES ('".$_SESSION['date']."','".$_POST['res2'][$num]."','2','".$_POST['fname']."','".$_POST['dname']."')";
                $goulistT = mysqli_query($objCon,$ulistT);
         
        
  }
      
      
      
      for($num=0;$num<count($_POST["res3"]);$num++){
                $ulistT ="INSERT INTO timedata (date,time,room,name,department) VALUES ('".$_SESSION['date']."','".$_POST['res3'][$num]."','3','".$_POST['fname']."','".$_POST['dname']."')";
                $goulistT = mysqli_query($objCon,$ulistT);
          
         
  }
      
      
      
      for($num=0;$num<count($_POST["res4"]);$num++){
                $ulistT ="INSERT INTO timedata (date,time,room,name,department) VALUES ('".$_SESSION['date']."','".$_POST['res4'][$num]."','4','".$_POST['fname']."','".$_POST['dname']."')";
                $goulistT = mysqli_query($objCon,$ulistT);   
  }
      
      
      
      for($num=0;$num<count($_POST["res5"]);$num++){
                $ulistT ="INSERT INTO timedata (date,time,room,name,department) VALUES ('".$_SESSION['date']."','".$_POST['res5'][$num]."','5','".$_POST['fname']."','".$_POST['dname']."')";
                $goulistT = mysqli_query($objCon,$ulistT);   
  }
    
      
      
      
header("location:successful.php");
  }
?>
