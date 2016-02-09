<?php 
session_start();
if(!(isset($_SESSION['auth']) && $_SESSION['auth']!=''))
{
header("Location:index.php");
}
?>
<?php
$uname=$_SESSION['username'];
include("connectivity.php");
$sql1="SELECT * FROM `tab_useraccount` 
WHERE `user_name` = '$uname' ";
$officer=mysql_query($sql1);
$number_of_rows1 = mysql_num_rows($officer);
if($number_of_rows1==1)
{
$officer1 = mysql_fetch_array($officer);
$username=$officer1[name];
$officecode=$officer1[code];
}
else
{
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Fraud made at Cargo Registration Form</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style type="text/css">
<!--
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 28px; color: #000000; }
.style8 {
	font-size: 28px;
	color: #000000;
}
.style13 {
	font-size: 13px;
	font-weight: bold;
}
.style17 {
	font-size: 13px;
	font-weight: bold;
	color: #000000;
	font-style: italic;
}
.style19 {font-size: 13px; font-weight: bold; font-style: italic; }
.style24 {font-size: 18px; font-weight: bold; color: #666666; }
.style25 {
	color: #666666;
	font-weight: bold;
}
.style26 {
	font-size: 20px;
	font-weight: bold;
}
.style27 {font-size: 18px}
.style30 {
	color: #000099;
	font-size: 10px;
	font-weight: bold;
}
-->
</style>

<SCRIPT language=JavaScript>
	<!--
		if (document.images)
		{
		calimg= new Image(16,16); 
		calimg.src="images/cal.gif"; 
		}
	//-->
</SCRIPT>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script> 
</head>


<body bgcolor="#FFFFCC">


<table width="100%" height="100%" border="0" bgcolor="#FFFFCC">
<?php
if (!isset($_POST['submit'])) {
?>
  <form name="x" action="" method="post">
  <tr>
    <td colspan="11"><div align="center"><img src="images/logo.gif" width="689" height="79" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="formmenu.php">Home</a></td>
    <td><a href="destroy.php">Logout</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="1%" rowspan="11">&nbsp;</td>
    <td width="1%" rowspan="11">&nbsp;</td>
    <td colspan="8"><div align="center"><span class="style7">Welcome to Cargo Fraud Registration Form </span><span class="style8"></span></div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style13">Office Code</span></td>
    <td><label>
      <input name="txtoffice" type="text" id="txtoffice"  onfocus="blur();" value="<?php echo "$officecode" ; ?>" size="4" maxlength="4"/>
    </label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13">Seizure Date &amp; Time </span></td>
    <td width="20%"><span class="lineItem">
      <input name="txtseizuredate" id="txtseizuredate" size="23"  onfocus="blur();"/>
      <a 
        href="javascript:NewCal('txtseizuredate','ddmmmyyyy',true,12)"><img height="16" 
        alt="Pick a date" src="images/cal.gif" width="16" 
        border="0" /></a></span></td>
    <td width="1%">&nbsp;</td>
    <td width="12%"><span class="style13">Seizure Place </span></td>
    <td width="20%"><input name="txtseizureplace" type="text" id="txtseizureplace" /></td>
  </tr>
  <tr>
    <td><span class="style13">Cargo Type </span></td>
    <td><input name="txtcargo" type="text" id="txtcargo" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Mode of Transport (MOT) </span></td>
    <td><input name="txtmot" type="text" id="txtmot" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Consignor</span></td>
    <td><input name="txtconsignor" type="text" id="txtconsignor" /></td>
  </tr>
  <tr>
    <td rowspan="3"><span class="style13">Declarant Name </span></td>
    <td rowspan="3"><input name="txtdname" type="text" id="txtdname" /></td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3"><span class="style13">Declarant Number </span></td>
    <td></td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3"><span class="style13">Concealment Method </span></td>
    <td rowspan="3"><input name="txtconcealment" type="text" id="txtconcealment" /></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td class="style30"><input name="txtdnumber" type="text" id="txtdnumber" /></td>
  </tr>
  <tr>
    <td><span class="style13">Departure</span></td>
    <td><input name="txtorigin" type="text" id="txtorigin" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Destination</span></td>
    <td bgcolor="#FFFFCC"><input name="txtdestination" type="text" id="txtdestination" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Type of Goods </span></td>
    <td bgcolor="#FFFFCC"><input name="txttypeofgoods" type="text" id="txttypeofgoods" /></td>
  </tr>
  
  <tr>
    <td><span class="style13">Quantity of Goods </span></td>
    <td><input name="txtquantity" type="text" id="txtquantity" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Risk Indicators</span></td>
    <td bgcolor="#FFFFCC"><input name="txtrisk" type="text" id="txtrisk" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Officer Name </span></td>
    <td bgcolor="#FFFFCC"><input name="txtofficer" type="text" id="txtofficer" value="<?php echo "$username" ; ?>"  onfocus="blur();"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFCC"><a href="disp-cargo.php" class="style26 style27">View all Cargo Information </a></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC"><input type="submit" name="submit" value="Register" /></td>
    <td bgcolor="#FFFFCC"><input type="reset" name="reset" value="Clear" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  </form>
</table>
<?php
} 
else {
$office = $_POST['txtoffice'];
$sdate= $_POST['txtseizuredate'];
$splace= $_POST['txtseizureplace'];
$cargo = $_POST['txtcargo'];
$mot = $_POST['txtmot'];
$consignor = $_POST['txtconsignor'];
$dname= $_POST['txtdname'];
$dnumber= $_POST['txtdnumber'];
$concealment= $_POST['txtconcealment'];
$origin= $_POST['txtorigin'];
$destination= $_POST['txtdestination'];
$tgoods= $_POST['txttypeofgoods'];
$qgoods= $_POST['txtquantity'];
$risk= $_POST['txtrisk'];
$officer= $_POST['txtofficer'];


$message="";

 if (empty( $office))
 $message .= "Please Enter Office Code!<BR>\n";   
 if (empty( $sdate))
 $message .= "Please Enter Seizure Date!<BR>\n";   
 if (empty( $splace))
 $message .= "Please Enter Seizure Place!<BR>\n";
 if (empty( $cargo))
 $message .= "Please Enter Cargo Type!<BR>\n";
 if (empty( $mot))
 $message .= "Please Enter Mode of Transport!<BR>\n";
 if (empty( $consignor))
 $message .= "Please Enter Consignor's Name!<BR>\n";
  if (empty( $dname))
 $message .= "Please Enter Declarant's Name!<BR>\n";
   if (empty( $dnumber))
 $message .= "Please Enter Declarant Number!<BR>\n";
 if (empty( $concealment))
 $message .= "Please Enter Concealment Method!<BR>\n";
 if (empty( $tgoods))
 $message .= "Please Enter Type of Controband!<BR>\n";
 
 
  
	  
	if ( $message == "" ) // we found no errors
 {  
$result="INSERT INTO `tab_cargo` ( `office_code` , `seizure_date` , `seizure_place` , `cargo_type` ,  `mot` , `consignor` , `declarant_name` , `declarant_number` , `concealment` , `origin` , `destination` , `type_of_contraband` , `quantity_of_contraband` , `risk_indicators` , `officer` ) 
VALUES ('$office' , '$sdate' , '$splace' , '$cargo' ,  '$mot' , '$consignor' , '$dname' , '$dnumber' , '$concealment' , '$origin' , '$destination' , '$tgoods' , '$qgoods' , '$risk' , '$officer' )" ;

$sql=mysql_query($result);



if ($sql)
{

echo "<p align=\"center\"><h3>Your Insertion has been done Successfully!</h3></p><a href=\"formcargo.php\">Back to Registration form</a><br>";

}
else
{
print "Not Inserted $tcontra ";
}
}
else
{
 print "<CENTER><font color=\"Red\" size=\"3\"><p><b>$message</b><p></font></CENTER>";
 
 print "<CENTER><h3>Your insertion is not Successfull<br />
  Use the browsers back button to fill the form again!!!</h3></CENTER>";
}//

}
?>
</body>
</html>
	 <?php
   
 exit;
 
 ?>