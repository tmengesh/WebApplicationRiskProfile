<?php 
session_start();
if(!(isset($_SESSION['auth']) && $_SESSION['auth']!=''))
{
header("Location:index.php");
}
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Transit Goods Movment Control Form</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style type="text/css">
<!--
.style3 {color: #FFFFCC}
.style4 {color: #000000}
.style6 {
	font-size: 15px;
	font-weight: bold;
}
.style7 {font-size: 15px}
.style13 {	font-size: 13px;
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
include("connectivity.php");
?>

<?php
if (!isset($_POST['submit'])) {
?>
<?php
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
$goods=$_POST['txtgoods'];
?>
<form action="" method="post" enctype="multipart/form-data" name="x">
  <tr>
    <td colspan="12"><div align="center"><img src="images/logo.gif" width="689" height="79" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="formmenu.php">Home</a></td>
    <td><a href="destroy.php">Logout</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="1%" rowspan="10">&nbsp;</td>
    <td width="1%" rowspan="10">&nbsp;</td>
    <td colspan="9"><div align="center">
	<?php
	  	print "<font color=\"Black\" size=\"5\"><b>Traveler $name 's Record</b></font>";
	?>
	
	</div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><span class="style13 style6">Office Code</span></td>
    <td width="20%"><label><span class="lineItem">
      <input name="txtoffice" id="txtoffice" size="3" value="<?php print "$office";?>"/>
    </span></label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13 style7"><strong>Seizure Date &amp; Time </strong></span></td>
    <td width="20%" colspan="2"><span class="lineItem">
      <input name="txtseizuredate" id="txtseizuredate" size="25"  value="<?php print "$sdate";?>"/>
      <a 
        href="javascript:NewCal('txtseizuredate','ddmmmyyyy',true,12)"></a></span></td>
    <td width="1%">&nbsp;</td>
    <td width="12%"><span class="style13 style7"><strong>Seizure Place </strong></span></td>
    <td width="20%"><span class="lineItem">
      <input name="txtseizureplace" id="txtseizureplace" size="25"  value="<?php print "$splace";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Nationality</strong></span></td>
    <td><span class="lineItem">
      <input name="txtnationality" id="txtnationality" size="25"  value="<?php print "$nationality";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Name</strong></span></td>
    <td colspan="2"><span class="lineItem">
      <input name="txtname" id="txtname" size="25"  value="<?php print "$name";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Age</strong></span></td>
    <td><span class="lineItem">
      <input name="txtage" id="txtage" size="3" value="<?php print "$age";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Sex</strong></span></td>
    <td><input name="txtsex" type="text" id="txtsex"  value="<?php echo "$sex" ; ?>" size="4" maxlength="4"/></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Date of Birth </strong></span></td>
    <td colspan="2"><a href="javascript:NewCal('txtdob','ddmmmyyyy')"></a><a 
        href="javascript:NewCal('txtdob','ddmmmyyyy',true,12)"><span class="lineItem">
      <input name="txtdob" id="txtdob" size="25"  value="<?php print "$dob";?>"/>
    </span></a></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Passport Number </strong></span></td>
    <td><span class="lineItem">
      <input name="txtpassport" id="txtpassport" size="25"  value="<?php print "$passport";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Address</strong></span></td>
    <td><span class="lineItem">
      <input name="txtaddress" id="txtaddress" size="25" value="<?php print "$address";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style24 style7"><strong>Types of Fraud </strong></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtfraud" id="txtfraud" size="25"  value="<?php print "$fraud";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style7"></span></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="71"><span class="style24 style7"><strong>Physical Charactersctics </strong></span> </td>
    <td colspan="8"><textarea name="textarea2" style="width: 150px; height: 80px;"  heigth="120" width="50" 
> <?php echo $char; ?></textarea></td>
    </tr>
  <tr>
    <td><span class="style13 style7"><strong>Language Spoken </strong></span></td>
    <td><span class="lineItem">
      <input name="txtlaguage" id="txtlaguage" size="25" value="<?php print "$language";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style3"><span class="style4 style13 style7"><strong>Occupation</strong></span></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtocc" id="txtocc" size="25"  value="<?php print "$occupation";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Concealment Method </strong></span></td>
    <td bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtconc" id="txtconc" size="25"  value="<?php print "$concelment";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13">Departure</span></td>
    <td><span class="lineItem">
      <input name="txtorigin" id="txtorigin" size="25"  value="<?php print "$origin";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style3"><span class="style4 style13 style7"><strong>Destination</strong></span></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtdestination" id="txtdestination" size="25"  value="<?php print "$destination";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Risk Indicators</strong></span></td>
    <td bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtrisk" id="txtrisk" size="25"  value="<?php print "$risk";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style3"><span class="style4 style13 style7"><strong>Goods Description </strong></span></span></td>
    <td><span class="lineItem">
      <input name="txtgoods" id="txtgoods" size="25" value="<?php print "$goods";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Mode of Transport (MOT) </strong></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtmot" id="txtmot" size="25"  value="<?php print "$mot";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Identification Number of MOT </strong></span></td>
    <td bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtmotid" id="txtmotid" size="25" value="<?php print "$motid";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Transporter Nationality </strong></span></td>
    <td><span class="lineItem">
      <input name="txttnationality" id="txttnationality" size="25"  value="<?php print "$tnationality";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style3"><span class="style4 style13 style7"><strong>Place of Registration </strong></span></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtplace" id="txtplace" size="25"  value="<?php print "$pregistration";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Root Line </strong></span></td>
    <td bgcolor="#FFFFCC"><textarea name="textarea"  style="width: 170px; height: 70px;" heigth="120" width="50" 
> <?php echo $root; ?></textarea></td>
  </tr>
  
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td><span class="style13 style7"><strong>Penality</strong></span></td>
    <td><span class="lineItem">
      <input name="txtpenality" id="txtpenality" size="25" value="<?php print "$penality";?>"/>
    </span></td>
    <td colspan="2"><span class="style13 style7"><strong>Officer Name </strong></span></td>
    <td colspan="2"><span class="lineItem">
      <input name="txtofficer" id="txtofficer" size="25" onfocus="blur();" value="<?php print "$officer";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  
  

  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Ubdate" /></td>
    <td><input type="reset" name="reset" value="Clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style26"><a href="formtraveler.php">Back to Registration Form </a></span></td>
    </tr>
  </form>
</table>
<?php
$message="";
if ( $message == "" ) // we found no errors
 {  
	  

$text="ABC";
$sql=mysql_query("UPDATE `tab_travelers` SET `office_code` = '$text' ");
if ($sql)
{
echo "<p align=\"center\"><h3>Successfull! Your updation has been done!</h3></p><a href=\"login.php\">Go to member page</a>";
}
else {}
}
else
{
 print "<CENTER><font color=\"Red\" size=\"3\"><p><b>$message</b><p></font></CENTER>";
 
 print "<CENTER><h3>your updation is not successfull use the browsers <u>BACK</u> button to try again!!!</h3></CENTER>";
}
}
?>
</body>
</html>
	