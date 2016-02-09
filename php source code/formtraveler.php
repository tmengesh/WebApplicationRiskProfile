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
<title>Welcome to Fraud made by Travelers Registration form </title>
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
    <td colspan="12"><div align="center"><img src="images/logo.gif" width="689" height="79" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="formmenu.php">Home</a></td>
    <td><a href="destroy.php">Logout</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="1%" rowspan="13">&nbsp;</td>
    <td width="1%" rowspan="13">&nbsp;</td>
    <td colspan="9"><div align="center"><span class="style7">Welcome to Travelers Registration form </span><span class="style8"></span></div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><span class="style13">Office Code</span></td>
    <td width="20%"><label>
      <input name="txtoffice" type="text" id="txtoffice"  onfocus="blur();" value="<?php echo "$officecode" ; ?>" size="4" maxlength="4"/>
    </label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13">Seizure Date &amp; Time </span></td>
    <td width="20%" colspan="2"><span class="lineItem">
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
    <td><span class="style13">Nationality</span></td>
    <td><input name="txtnationality" type="text" id="txtnationality" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Name</span></td>
    <td colspan="2"><input name="txtname" type="text" id="txtname" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Age</span></td>
    <td><input name="txtage" type="text" id="txtage" size="3" maxlength="3" /></td>
  </tr>
  <tr>
    <td rowspan="3"><span class="style13">Sex</span></td>
    <td rowspan="3">
	<input type="radio" name="sex" onclick="check(this.value)" value="Male" checked="checked">
	<em><strong>Male</strong></em>
    <input type="radio" name="sex" onclick="check(this.value)" value="Female">
    <em><strong>Female</strong> </em></td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3"><span class="style13">Date of Birth </span></td>
    <td colspan="2"></td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3"><span class="style13">Passport Number </span></td>
    <td rowspan="3"><input name="txtpassport" type="text" id="txtpassport" /></td>
  </tr>
  <tr>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2" class="style30">DD/MM/YYYY
      <input name="txtdob" type="text" id="txtdob" /></td>
  </tr>
  <tr>
    <td rowspan="2"><span class="style13">Address</span></td>
    <td rowspan="2"><input name="txtaddress" type="text" id="txtaddress" /></td>
    <td rowspan="2">&nbsp;</td>
    <td colspan="3" rowspan="2" bgcolor="#FFFFCC"><span class="style24">Physical Charactersctics </span></td>
    <td rowspan="2">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFCC"><div align="left"><span class="style24">Types of Fraud </span></div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style25">Put Mark in one of the boxes </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC"><div align="right"><span class="style17">Eye Color </span></div></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtcharacter1" type="text" id="txtcharacter1" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Undervaluation" checked="checked" />
      <em><strong>Undervaluation</strong></em></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC"><div align="right"><span class="style19">Weight</span></div></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtcharacter2" type="text" id="txtcharacter2" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Misdiscription" />
      <em><strong>Misdiscription</strong></em></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC"><div align="right"><span class="style19">Height</span></div></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtcharacter3" type="text" id="txtcharacter3" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Extra Items" />
      <em><strong>Extra Items</strong></em></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC"><div align="right"><span class="style19">Hair Color </span></div></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtcharacter4" type="text" id="txtcharacter4" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Origin of Country" />
      <em><strong>Origin of Country </strong></em></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC"><div align="right"><span class="style19">Other</span></div></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtcharacter5" type="text" id="txtcharacter5" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Counterfit" />
      <em><strong>Counterfit</strong></em></td>
  </tr>
  
  <tr>
    <td rowspan="9">&nbsp;</td>
    <td rowspan="9">&nbsp;</td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3">&nbsp;</td>
    <td colspan="2" rowspan="3">&nbsp;</td>
    <td rowspan="3">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Misclassification" />
      <em><strong>Misclassification</strong></em></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Controband" />
      <em><strong>Controband</strong></em></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#CCCCCC"><input type="radio" name="fraud" onclick="check(this.value)" value="Other" />
      <em><strong>Other</strong></em></td>
  </tr>
  
  <tr>
    <td height="37"><span class="style13">Language Spoken </span></td>
    <td><input name="txtlanguage" type="text" id="txtlanguage" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Occupation</span></td>
    <td><input name="txtoccupation" type="text" id="txtoccupation" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style13">Concealment Method </span></td>
    <td><input name="txtconcealment" type="text" id="txtconcealment" /></td>
  </tr>
  <tr>
    <td><span class="style13">Departure</span></td>
    <td><input name="txtorigin" type="text" id="txtorigin" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Destination</span></td>
    <td colspan="2"><input name="txtdestination" type="text" id="txtdestination" />
    <br /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Risk Indicators</span></td>
    <td><input name="txtrisk" type="text" id="txtrisk" /></td>
  </tr>
  <tr>
    <td><span class="style13">Offence Case Nr </span></td>
    <td><input name="txtoffence" type="text" id="txtoffence" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Mode of Transport (MOT) </span></td>
    <td colspan="2"><input name="txtmot" type="text" id="txtmot" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Identification Number of MOT </span></td>
    <td><input name="txtmotid" type="text" id="txtmotid" /></td>
  </tr>
  <tr>
    <td height="39"><span class="style13">Transporter Nationality </span></td>
    <td><input name="txttnationality" type="text" id="txttnationality" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Place of Registration </span></td>
    <td colspan="2"><input name="txtpregistration" type="text" id="txtpregistration" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Root Line </span></td>
    <td><input name="txtrootline" type="text" id="txtrootline" /></td>
  </tr>
  <tr>
    <td><span class="style13">Penality</span></td>
    <td><input name="txtpenality" type="text" id="txtpenality" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Officer Name </span></td>
    <td colspan="2"><input name="txtofficer" type="text" id="txtofficer" value="<?php echo "$username" ; ?>"  onfocus="blur();"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Register" /></td>
    <td><input type="reset" name="reset" value="Clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style26"><a href="formitem.php"></a></span></td>
    <td><a href="disp-traveler.php" class="style26 style27">View all Travelers </a></td>
  </tr>
  </form>
</table>
<?php
} 
else {
$office = $_POST['txtoffice'];
$sdate= $_POST['txtseizuredate'];
$splace= $_POST['txtseizureplace'];
$nationality = $_POST['txtnationality'];
$name = $_POST['txtname'];
$age= $_POST['txtage'];
$sex= $_POST['sex'];
$dob= $_POST['txtdob'];
$passport= $_POST['txtpassport'];
$address= $_POST['txtaddress'];

$p1= $_POST['txtcharacter1'];
$p2= $_POST['txtcharacter2'];
$p3= $_POST['txtcharacter3'];
$p4= $_POST['txtcharacter4'];
$p5= $_POST['txtcharacter5'];

$language= $_POST['txtlanguage'];
$occupation= $_POST['txtoccupation'];
$concelment= $_POST['txtconcealment'];
$origin= $_POST['txtorigin'];
$destination= $_POST['txtdestination'];
$risk=$_POST['txtrisk'];
$fraud= $_POST['fraud'];
$officer= $_POST['txtofficer'];
$mot= $_POST['txtmot'];
$motid= $_POST['txtmotid'];
$tnationality= $_POST['txttnationality'];
$pregistration=$_POST['txtpregistration'];
$root= $_POST['txtrootline'];
$penality=$_POST['txtpenality'];
$offence=$_POST['txtoffence'];
$_SESSION['offence'] = $_POST['txtoffence'];
$_SESSION['goods'] = $_POST['txtgoods'];
$_SESSION['tname'] = $_POST['txtname'];



$message="";
 if (empty( $p1))
 	$p1 = "None";
 if (empty( $p2))
 	$p2 = "None";
 if (empty( $p3))
 	$p3 = "None";
 if (empty( $p4))
 	$p4 = "None";
 if (empty( $p5))
 	$p5 = "None";
 
 if (empty( $sdate))
 $message .= "Please Enter Seizure Date!<BR>\n";   
 if (empty( $splace))
 $message .= "Please Enter Seizure Place!<BR>\n";
 if (empty( $nationality))
 $message .= "Please Enter Taveler's Nationality<BR>\n";
 if (empty( $name))
 $message .= "Please Enter Traveler's Name<BR>\n";
  if (empty( $age))
 $message .= "Please Enter Traveler's Age<BR>\n";
  if (empty( $dob))
 $message .= "Please Enter Traveler's Date of Birth<BR>\n";
 
 
 if (empty( $passport))
 $message .= "Please Enter Traveler's Passport Number<BR>\n";
 if (empty( $address))
 $message .= "Please Enter Traveler's Address<BR>\n";
 if (empty( $language))
 $message .= "Please Enter Language Spoken!<BR>\n";
 if (empty( $occupation))
 $message .= "Please Enter Traveler's Occupation<BR>\n";
  if (empty( $concelment))
 $message .= "Please Enter Concelment Method Taken<BR>\n";

 if (empty( $mot))
 $message .= "Please Enter Mode of Transport<BR>\n";
  if (empty( $motid))
 $message .= "Please Enter Identification Number for Mode of Transport<BR>\n";
 if (empty( $tnationality	))
 $message .= "Please Enter Transporter Nationality<BR>\n";
  if (empty( $pregistration))
 $message .= "Please Enter Place of Registration for Mode of Transport<BR>\n";
   if (empty( $root))
 $message .= "Please Enter Root Line<BR>\n";
  if (empty( $penality))
 $message .= "Please Enter Penality (Action Taken on a Specific Time)<BR>\n";
 if (empty( $offence))
 $message .= "Please Enter Offence Case Number<BR>\n";
 $char = "Eye Color: ".$p1." \n"."Weight: ".$p2." \n"."Height: ".$p3." \n"."Hair Color: ".$p4." \n"."Other: ".$p5 ;
   
  
	  
	if ( $message == "" ) // we found no errors
 {  
$result="INSERT INTO `tab_travelers` ( `office_code` , `seizure_date` , `seizure_place` , `nationality` , `name` , `age` , `sex` , `dob` , `passport_no` , `address` , `physical_charactersctics` , `language` , `occupation` , `concealment` , `origin` , `destination` , `risk_indicators` , `fraud` , `officer_name` , `mot` , `mot_id` , `transporter_nationality` , `place_of_registration` , `root_line` , `penality` , `offence` ) 
VALUES ('$office' , '$sdate' , '$splace' , '$nationality' ,  '$name' , '$age' , '$sex' , '$dob' , '$passport' , '$address' , '$char' , '$language' , '$occupation' , '$concelment' , '$origin' , '$destination' , '$risk' , '$fraud' , '$officer' , '$mot' , '$motid' , '$tnationality	' , '$pregistration' , '$root' , '$penality', '$offence'  )" ;

$sql=mysql_query($result);



if ($sql)
{

echo "<p align=\"center\"><h3>Your Insertion has been done Successfully!</h3></p><a href=\"formitem.php\">Next</a><br>";

}
else
{
print "Not Inserted $conca ";
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