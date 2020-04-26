<?php
    include"config.php";
    mysqli_query($objCon,"SET NAMES UTF8");
    $select="SELECT * FROM timeroom";
    $show1 = mysqli_query($objCon,$select);
    $show2 = mysqli_query($objCon,$select);
    $show3 = mysqli_query($objCon,$select);
    $show4 = mysqli_query($objCon,$select);
    $show5 = mysqli_query($objCon,$select);

    session_start();
    ob_start();
    
    echo "<div align=center>";
    echo $_SESSION['date']; 

    ?>

<html>
 
<head>
    <title>จองห้องประชุมออนไลน์</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/arl.jpg"> 
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>
    
<body>
    
    <form name="bookingpage" method="post" action="bookingpage_db.php">
        <br><br>
        

    ชื่อผู้จอง:<input type="text" name="fname"required>
    แผนก:<input type="text" name="dname"required>   
    <br><br>    
        
    <table border='1' align="center">
   <th>Room</th>
    <th colspan="23">Time</th>
        
<!--room1-->           
        <tr>
        <td rowspan="2" align="center">1</td>    
        <td>7.00</td>
        <td>7.30</td>
        <td>8.00</td>
        <td>8.30</td>
        <td>9.00</td>
        <td>9.30</td>
        <td>10.00</td>
        <td>10.30</td>
        <td>11.00</td>
        <td>11.30</td>
        <td>12.00</td>
        <td>12.30</td>
        <td>13.00</td>
        <td>13.30</td>
        <td>14.00</td>
        <td>14.30</td>
        <td>15.00</td>
        <td>15.30</td>
        <td>16.00</td>
        <td>16.30</td>
        <td>17.00</td>
        <td>17.30</td>
        <td>18.00</td>
        </tr>       
        <tr>          
     <?php while ($a=mysqli_fetch_array($show1)){   
        if($a['Room01'] != ""){
                ?>
                        
                            <?php 
            
            $checktime="SELECT * FROM timedata WHERE room='1' AND time='".$a['Room01']."' AND date='".$_SESSION['date']."' ";
             $objQuery = mysqli_query($objCon,$checktime); 
            $objResult = mysqli_fetch_array($objQuery);
            
            if($objResult){ ?>
                            <td  align="center" style="background-color:Tomato;"> 
            </td>
                            <?php 
                
            }
            else{
            ?>
                     <td  align="center">       
                            <input type="checkbox" name="res1[]"
                            value="<?php echo $a['Room01']; ?>">
            </td>
                     <?php      
                        }
                    }
                }
            ?>
            
        </tr>
        
        
<!--room2-->               
        <tr>
        <td rowspan="2" align="center">2</td>    
        <td>7.00</td>
        <td>7.30</td>
        <td>8.00</td>
        <td>8.30</td>
        <td>9.00</td>
        <td>9.30</td>
        <td>10.00</td>
        <td>10.30</td>
        <td>11.00</td>
        <td>11.30</td>
        <td>12.00</td>
        <td>12.30</td>
        <td>13.00</td>
        <td>13.30</td>
        <td>14.00</td>
        <td>14.30</td>
        <td>15.00</td>
        <td>15.30</td>
        <td>16.00</td>
        <td>16.30</td>
        <td>17.00</td>
        <td>17.30</td>
        <td>18.00</td>
        </tr>
        <tr>
            
      
     <?php while ($b=mysqli_fetch_array($show2)){   
    if($b['Room02'] != ""){
                ?>
                        
                            <?php 
            
            $checktime="SELECT * FROM timedata WHERE room='2' AND time='".$b['Room02']."' AND date='".$_SESSION['date']."' ";
             $objQuery = mysqli_query($objCon,$checktime); 
            $objResult = mysqli_fetch_array($objQuery);
            if($objResult){ ?>
                            <td  align="center" style="background-color:Tomato;"> 
            </td>
                            <?php 
                
            }
            else{
            ?>
                     <td  align="center">       
                            <input type="checkbox" name="res2[]"
                            value="<?php echo $b['Room02']; ?>">
            </td>
                     <?php      
                        }
                    }
                }
            ?>
            
        </tr>
        
        
<!--room3-->        
        <tr>
        <td rowspan="2" align="center">3</td>    
        <td>7.00</td>
        <td>7.30</td>
        <td>8.00</td>
        <td>8.30</td>
        <td>9.00</td>
        <td>9.30</td>
        <td>10.00</td>
        <td>10.30</td>
        <td>11.00</td>
        <td>11.30</td>
        <td>12.00</td>
        <td>12.30</td>
        <td>13.00</td>
        <td>13.30</td>
        <td>14.00</td>
        <td>14.30</td>
        <td>15.00</td>
        <td>15.30</td>
        <td>16.00</td>
        <td>16.30</td>
        <td>17.00</td>
        <td>17.30</td>
        <td>18.00</td>
        </tr>
        <tr>
            
     <?php while ($c=mysqli_fetch_array($show3)){   
    if($c['Room03'] != ""){
                ?>
                        
                            <?php 
            
            $checktime="SELECT * FROM timedata WHERE room='3' AND time='".$c['Room03']."' AND date='".$_SESSION['date']."' ";
             $objQuery = mysqli_query($objCon,$checktime); 
            $objResult = mysqli_fetch_array($objQuery);
            if($objResult){ ?>
                            <td  align="center" style="background-color:Tomato;"> 
            </td>
                            <?php 
                
            }
            else{
            ?>
                     <td  align="center">       
                            <input type="checkbox" name="res3[]"
                            value="<?php echo $c['Room03']; ?>">
            </td>
                     <?php      
                        }
                    }
                }
            ?>
            
        </tr>
 
        
        
<!--room4--> 
        <tr>
        <td rowspan="2" align="center">4</td>    
        <td>7.00</td>
        <td>7.30</td>
        <td>8.00</td>
        <td>8.30</td>
        <td>9.00</td>
        <td>9.30</td>
        <td>10.00</td>
        <td>10.30</td>
        <td>11.00</td>
        <td>11.30</td>
        <td>12.00</td>
        <td>12.30</td>
        <td>13.00</td>
        <td>13.30</td>
        <td>14.00</td>
        <td>14.30</td>
        <td>15.00</td>
        <td>15.30</td>
        <td>16.00</td>
        <td>16.30</td>
        <td>17.00</td>
        <td>17.30</td>
        <td>18.00</td>
        </tr>   
        <tr>          
     <?php while ($d=mysqli_fetch_array($show4)){   
        if($d['Room04'] != ""){
                ?>
                        
                            <?php 
            
            $checktime="SELECT * FROM timedata WHERE room='4' AND time='".$d['Room04']."' AND date='".$_SESSION['date']."' ";
             $objQuery = mysqli_query($objCon,$checktime); 
            $objResult = mysqli_fetch_array($objQuery);
            if($objResult){ ?>
                            <td  align="center" style="background-color:Tomato;"> 
            </td>
                            <?php 
                
            }
            else{
            ?>
                     <td  align="center">       
                            <input type="checkbox" name="res4[]"
                            value="<?php echo $d['Room04']; ?>">
            </td>
                     <?php      
                        }
                    }
                }
            ?>
            
        </tr>

        
<!--room5--> 
        <tr>
        <td rowspan="2" align="center">5</td>    
        <td>7.00</td>
        <td>7.30</td>
        <td>8.00</td>
        <td>8.30</td>
        <td>9.00</td>
        <td>9.30</td>
        <td>10.00</td>
        <td>10.30</td>
        <td>11.00</td>
        <td>11.30</td>
        <td>12.00</td>
        <td>12.30</td>
        <td>13.00</td>
        <td>13.30</td>
        <td>14.00</td>
        <td>14.30</td>
        <td>15.00</td>
        <td>15.30</td>
        <td>16.00</td>
        <td>16.30</td>
        <td>17.00</td>
        <td>17.30</td>
        <td>18.00</td>
        </tr>   
        <tr>          
     <?php while ($e=mysqli_fetch_array($show5)){   
       if($e['Room05'] != ""){
                ?>
                        
                            <?php 
            
            $checktime="SELECT * FROM timedata WHERE room='5' AND time='".$e['Room05']."' AND date='".$_SESSION['date']."' ";
             $objQuery = mysqli_query($objCon,$checktime); 
            $objResult = mysqli_fetch_array($objQuery);
            if($objResult){ ?>
                            <td  align="center" style="background-color:Tomato;"> 
            </td>
                            <?php 
                
            }
            else{
            ?>
                     <td  align="center">       
                            <input type="checkbox" name="res5[]"
                            value="<?php echo $e['Room05']; ?>">
            </td>
                     <?php      
                        }
                    }
                }
            ?>
            
        </tr>
        
        
    </table>
       
       
        
        <br>
         <button type="submit" name="submit">Submit</button>
  
  
    </form>
    
   
    
    </body>
</html>