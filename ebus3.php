<!DOCTYPE html>
<html>
    <style>
        html {background: url(blue.jpg) no-repeat center fixed; 
  background-size: cover;}
    </style>
    
    <head>
        <div>
            <title>Receipt Of Purchase</title>
            <strong><center><H1>Nexus Consulting</H1></center></strong>
            <hr>
    </div>
    </head>
    <body>
    
        <!--    //Starting the session to get the session variable from the last page-->
<center>
    <center><strong><h2 style="background-color: #fffcc;">Purchase Receipt</h2></strong></center>
<?php
        
session_start();

$phoneNumberValue = $_POST['txtNum'];
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];




echo "The name is : ".$fullNameValue.".";
echo "<br></br>";        
echo "The total value is :".$totalValue.".";
echo "<br></br>";
echo "The Phone Number is : ".$phoneNumberValue.".";
echo "<br><br>";

?>
</center>    
</body>    
</html>
