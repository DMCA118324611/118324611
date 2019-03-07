<?php
session_start();
$fullNameValue= "";
$totalValue2 = "";
$phoneNumberValue = "";
$emailValue = "";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $phoneNumberValue;




?>

<!DOCTYPE html>
<HTML>
    <style>
        html {background: url(blue.jpg) no-repeat center fixed; 
  background-size: cover;}
    </style>
    <HEAD style="background-color: #317af2">
        <TITLE>Please enter your details</TITLE>
    </HEAD>
    <hr>
    <BODY style="background-color: lightblue">
        <DIV class="form">
            <FORM name="Details" method="post" action="ebus3.php">
                <center>
                    <TABLE cellspacing="10">
                        <TR>
                            <TD><b></b></TD>
                            <TD><b>Enter in your details below</b></TD>
                        </TR>
                        <tr>
                            <TD>Name</TD>
                            <TD><INPUT type="text" id="txtName" name="txtName" value="" /></TD>
                        </tr>
                        <TR>
                            <TD>Phone Number</TD>
                            <TD><INPUT type="tel" id="txtNum" name="txtNum" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" Required> <SPAN class="note">Format: 123-456-7890</SPAN></TD>
                        </TR>
                        
                        <TR>
                            <TD>Password</TD>
                            <td><INPUT type="password" id="txtPassword" pattern= "[0-9][0-9][0-9][0-9]" required><SPAN class="note">Please Enter your 4-digit PIN.</SPAN></td>
                            
                        </TR>
                         
                        <TR>
                            
                            <TD><INPUT type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </TR>
                    </TABLE>        
                </center>
                
        <center>
        

                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
            </center>
            </DIV>
            </form>
    </BODY>
 </html>

