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
<title>Welcome to Conveyance Registration form</title>
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
    <td width="1%" rowspan="9">&nbsp;</td>
    <td width="1%" rowspan="9">&nbsp;</td>
    <td colspan="8"><div align="center"><span class="style7">Welcome to Conveyances Registration Form </span><span class="style8"></span></div></td>
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
    <td><span class="style13">Vessel Name </span></td>
    <td><input name="txtvessel" type="text" id="txtvessel" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Departure</span></td>
    <td><input name="txtorigin" type="text" id="txtorigin" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Destination</span></td>
    <td><input name="txtdestination" type="text" id="txtdestination" /></td>
  </tr>
  <tr>
    <td><span class="style13">Concealment Method </span></td>
    <td><input name="txtconcealment" type="text" id="txtconcealment" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Shipping Line </span></td>
    <td><input name="txtline" type="text" id="txtline" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Routing of Vessel </span></td>
    <td><input name="txtrvessel" type="text" id="txtrvessel" /></td>
  </tr>
  
  <tr>
    <td><span class="style13">Mode of Transport (MOT) </span></td>
    <td><input name="txtmot" type="text" id="txtmot" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Identification Number of MOT </span></td>
    <td bgcolor="#FFFFCC"><input name="txtmotid" type="text" id="txtmotid" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Risk Indicators</span></td>
    <td bgcolor="#FFFFCC"><input name="txtrisk" type="text" id="txtrisk" /></td>
  </tr>
  
  <tr>
    <td><span class="style13">Officer Name </span></td>
    <td><input name="txtofficer" type="text" id="txtofficer" value="<?php echo "$username" ; ?>"  onfocus="blur();"/></td>
    <td>&nbsp;</td>
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
    <td colspan="2" bgcolor="#FFFFCC"><a href="disp-conveyance.php" class="style26 style27">View all Conveyances </a></td>
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
$sdate = $_POST['txtseizuredate'];
$splace = $_POST['txtseizureplace'];
$vessel = $_POST['txtvessel'];
$origin = $_POST['txtorigin'];
$destination = $_POST['txtdestination'];
$concelment = $_POST['txtconcealment'];
$sline = $_POST['txtline'];
$routing = $_POST['txtrvessel'];
$mot= $_POST['txtmot'];
$motid= $_POST['txtmotid'];
$risk = $_POST['txtrisk'];
$officer = $_POST['txtofficer'];


$message="";

 if (empty( $office))
 $message .= "Please Enter Office Code!<BR>\n";   
 if (empty( $sdate))
 $message .= "Please Enter Seizure Date!<BR>\n";   
 if (empty( $splace))
 $message .= "Please Enter Seizure Place!<BR>\n";
 if (empty( $vessel))
 $message .= "Please Enter Vessel Name!<BR>\n";
 if (empty( $origin))
 $message .= "Please Enter Departure (Origin)! <BR>\n";
 if (empty( $destination))
 $message .= "Please Enter Destination!<BR>\n";
 if (empty( $mot))
 $message .= "Please Enter Mode of Transport!<BR>\n";
 
 
  
	  
	if ( $message == "" ) // we found no errors
 {  
$result="INSERT INTO `tab_conveyances` ( `office_code` , `seizure_date` , `seizure_place` , `vessel_name` , `origin` , `destination` , `concealment` , `shipping_line` , `routing_of_vessel` , `mot` , `mot_id` ,  `risk_indicators` , `officer` ) 
VALUES ('$office' , '$sdate' , '$splace' , '$vessel' ,  '$origin' , '$destination' , '$concelment' , '$sline' , '$routing' , '$mot' , '$motid' , '$risk' , '$officer' )" ;

$sql=mysql_query($result);



if ($sql)
{

echo "<p align=\"center\"><h3>Your Insertion has been done Successfully!</h3></p><a href=\"formconveyance.php\">Back to Registration form</a><br>";

}
else
{
print "Not Inserted $vessel ";
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