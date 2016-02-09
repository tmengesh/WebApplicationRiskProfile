<?php 
session_start();
if(!(isset($_SESSION['auth']) && $_SESSION['auth']!=''))
{
header("Location:index.php");

}
?>
<?php
include("connectivity.php");
$name="";
$regnolist=$_POST['regnolist'];
$uname=$_SESSION['username'];
global $regnolist;
$regnolist=$_POST['namelist'];
$combo = $_POST['cmbname'];
$namelist= "kiriku" ;

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
$sql="SELECT * FROM `tab_travelers` WHERE `name` = '$regnolist' ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows==1)                          
            { 
$newArray = mysql_fetch_array($result);
$office = $newArray[office_code];
$sdate= $newArray[seizure_date];
$splace= $newArray[seizure_place];
$nationality = $newArray[nationality];
global $name;
$name = $newArray[name];
$age= $newArray[age];
$sex= $newArray[sex];
$dob= $newArray[dob];
$passport= $newArray[passport_no];
$address= $newArray[address];
$char= $newArray[physical_charactersctics];
$language= $newArray[language];
$occupation= $newArray[occupation];
$concelment= $newArray[concealment];
$origin= $newArray[origin];	
$destination= $newArray[destination];
$risk= $newArray[risk_indicators];	
$officer= $newArray[officer_name];
$fraud= $newArray[fraud];	
$mot= $newArray[mot];
$motid= $newArray[mot_id];	
$tnationality	= $newArray[transporter_nationality];
$pregistration= $newArray[place_of_registration];	
$root= $newArray[root_line];
$penality= $newArray[penality];	
$goods= $newArray[goods];	
$offence= $newArray[offence];	
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
if (!isset($_POST['submit'])) {
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
	  	print "<font color=\"Black\" size=\"5\"><b>Traveler $regnolist 's Record</b></font>";
	?>
	
	</div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><span class="style13 style6">Office Code</span></td>
    <td width="20%"><label><span class="lineItem">
      <input name="txtoffice" id="txtoffice" size="3" onfocus="blur();" value="<?php print "$office";?>"/>
    </span></label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13 style7"><strong>Seizure Date &amp; Time </strong></span></td>
    <td width="20%" colspan="2"><span class="lineItem">
      <input name="txtseizuredate" id="txtseizuredate" size="25" onfocus="blur();" value="<?php print "$sdate";?>"/>
      <a 
        href="javascript:NewCal('txtseizuredate','ddmmmyyyy',true,12)"></a></span></td>
    <td width="1%">&nbsp;</td>
    <td width="12%"><span class="style13 style7"><strong>Seizure Place </strong></span></td>
    <td width="20%"><span class="lineItem">
      <input name="txtseizureplace" id="txtseizureplace" size="25" onfocus="blur();" value="<?php print "$splace";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Nationality</strong></span></td>
    <td><span class="lineItem">
      <input name="txtnationality" id="txtnationality" size="25" onfocus="blur();" value="<?php print "$nationality";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Name</strong></span></td>
    <td colspan="2"><span class="lineItem">
      <input name="txtname" id="txtname" size="25" onfocus="blur();" value="<?php print "$name";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Age</strong></span></td>
    <td><span class="lineItem">
      <input name="txtage" id="txtage" size="3" onfocus="blur();" value="<?php print "$age";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Sex</strong></span></td>
    <td><input name="txtsex" type="text" id="txtsex"  onfocus="blur();" value="<?php echo "$sex" ; ?>" size="4" maxlength="4"/></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Date of Birth </strong></span></td>
    <td colspan="2"><a href="javascript:NewCal('txtdob','ddmmmyyyy')"></a><a 
        href="javascript:NewCal('txtdob','ddmmmyyyy',true,12)"><span class="lineItem">
      <input name="txtdob" id="txtdob" size="25" onfocus="blur();" value="<?php print "$dob";?>"/>
    </span></a></td>
    <td>&nbsp;</td>
    <td><span class="style13 style7"><strong>Passport Number </strong></span></td>
    <td><span class="lineItem">
      <input name="txtpassport" id="txtpassport" size="25" onfocus="blur();" value="<?php print "$passport";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Address</strong></span></td>
    <td><span class="lineItem">
      <input name="txtaddress" id="txtaddress" size="25" onfocus="blur();" value="<?php print "$address";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style24 style7"><strong>Types of Fraud </strong></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtfraud" id="txtfraud" size="25" onfocus="blur();" value="<?php print "$fraud";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style7"></span></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="71"><span class="style24 style7"><strong>Physical Charactersctics </strong></span> </td>
    <td colspan="8"><textarea name="textarea2" style="width: 150px; height: 80px;" onfocus="blur();" heigth="120" width="50" 
> <?php echo $char; ?></textarea></td>
    </tr>
  <tr>
    <td><span class="style13 style7"><strong>Language Spoken </strong></span></td>
    <td><span class="lineItem">
      <input name="txtlaguage" id="txtlaguage" size="25" onfocus="blur();" value="<?php print "$language";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style3"><span class="style4 style13 style7"><strong>Occupation</strong></span></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtocc" id="txtocc" size="25" onfocus="blur();" value="<?php print "$occupation";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Concealment Method </strong></span></td>
    <td bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtconc" id="txtconc" size="25" onfocus="blur();" value="<?php print "$concelment";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13">Departure</span></td>
    <td><span class="lineItem">
      <input name="txtorigin" id="txtorigin" size="25" onfocus="blur();" value="<?php print "$origin";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style3"><span class="style4 style13 style7"><strong>Destination</strong></span></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtdestination" id="txtdestination" size="25" onfocus="blur();" value="<?php print "$destination";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Risk Indicators</strong></span></td>
    <td bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtrisk" id="txtrisk" size="25" onfocus="blur();" value="<?php print "$risk";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style3"><span class="style4 style13 style7"><strong>Goods Description </strong></span></span></td>
    <td><span class="lineItem">
      <input name="txtgoods" id="txtgoods" size="25" onfocus="blur();" value="<?php print "$goods";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Mode of Transport (MOT) </strong></span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtmot" id="txtmot" size="25" onfocus="blur();" value="<?php print "$mot";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Identification Number of MOT </strong></span></td>
    <td bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtmotid" id="txtmotid" size="25" onfocus="blur();" value="<?php print "$motid";?>"/>
    </span></td>
  </tr>
  <tr>
    <td><span class="style13 style7"><strong>Transporter Nationality </strong></span></td>
    <td><span class="lineItem">
      <input name="txttnationality" id="txttnationality" size="25" onfocus="blur();" value="<?php print "$tnationality";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td><span class="style13">Offence Case Nr </span></td>
    <td colspan="2"><input name="txtoffence" type="text" id="txtoffence" value="<?php print "$offence";?>" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Root Line </strong></span></td>
    <td bgcolor="#FFFFCC"><textarea name="textarea" onfocus="blur();" style="width: 170px; height: 70px;" heigth="120" width="50" 
> <?php echo $root; ?></textarea></td>
  </tr>
  
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td><span class="style3"><span class="style4 style13 style7"><strong>Place of Registration </strong></span></span></td>
    <td><span class="lineItem">
      <input name="txtplace" id="txtplace" size="25" onfocus="blur();" value="<?php print "$pregistration";?>"/>
    </span></td>
    <td colspan="2"><strong>Penality</strong></td>
    <td colspan="2"><span class="lineItem">
      <input name="txtpenality" id="txtpenality" size="25" onfocus="blur();" value="<?php print "$penality";?>"/>
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13 style7"><strong>Officer Name </strong></span></td>
    <td bgcolor="#FFFFCC"><span class="lineItem">
      <input name="txtofficer" id="txtofficer" size="25" onfocus="blur();" value="<?php print "$officer";?>"/>
    </span></td>
  </tr>
  
  

  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Update" /></td>
    <td><input type="reset" name="reset" value="Clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style26"><a href="formtraveler.php">Back to Registration Form </a></span></td>
    </tr>
  </form>
</table>


<?php
}else{


$office1 = $_POST['txtoffice'];
$sdate1= $_POST['txtseizuredate'];
$splace1= $_POST['txtseizureplace'];
$nationality1 = $_POST['txtnationality'];
$name1 = $_POST['txtname'];
$age1= $_POST['txtage'];
$sex1= $_POST['sex'];
$dob1= $_POST['txtdob'];
$passport1= $_POST['txtpassport'];
$address1= $_POST['txtaddress'];

$p11= $_POST['txtcharacter1'];
$p21= $_POST['txtcharacter2'];
$p31= $_POST['txtcharacter3'];
$p41= $_POST['txtcharacter4'];
$p51= $_POST['txtcharacter5'];

$language1= $_POST['txtlanguage'];
$occupation1= $_POST['txtoccupation'];
$concelment1= $_POST['txtconcealment'];
$origin1= $_POST['txtorigin'];
$destination1= $_POST['txtdestination'];
$risk1=$_POST['txtrisk'];
$fraud1= $_POST['fraud'];
$officer1= $_POST['txtofficer'];
$mot1= $_POST['txtmot'];
$motid1= $_POST['txtmotid'];
$tnationality1= $_POST['txttnationality'];
$pregistration1=$_POST['txtpregistration'];
$root1= $_POST['txtrootline'];
$penality1=$_POST['txtpenality'];
$goods1=$_POST['txtgoods'];



$message="";
 /*if (empty( $p11))
 	$p11 = "None";
 if (empty( $p21))
 	$p21 = "None";
 if (empty( $p3))
 	$p31 = "None";
 if (empty( $p41))
 	$p41 = "None";
 if (empty( $p51))
 	$p51 = "None";
 
 if (empty( $sdate1))
 $message .= "Please Enter Seizure Date!<BR>\n";   
 if (empty( $splace1))
 $message .= "Please Enter Seizure Place!<BR>\n";
 if (empty( $nationality1))
 $message .= "Please Enter Taveler's Nationality<BR>\n";
 if (empty( $name1))
 $message .= "Please Enter Traveler's Name<BR>\n";
  if (empty( $age1))
 $message .= "Please Enter Traveler's Age<BR>\n";
  if (empty( $dob1))
 $message .= "Please Enter Traveler's Date of Birth<BR>\n";
 
 
 if (empty( $passport1))
 $message .= "Please Enter Traveler's Passport Number<BR>\n";
 if (empty( $address1))
 $message .= "Please Enter Traveler's Address<BR>\n";
 if (empty( $language1))
 $message .= "Please Enter Language Spoken!<BR>\n";
 if (empty( $occupation1))
 $message .= "Please Enter Traveler's Occupation<BR>\n";
  if (empty( $concelment1))
 $message .= "Please Enter Concelment Method Taken<BR>\n";

 if (empty( $mot1))
 $message .= "Please Enter Mode of Transport<BR>\n";
  if (empty( $motid1))
 $message .= "Please Enter Identification Number for Mode of Transport<BR>\n";
 if (empty( $tnationality1))
 $message .= "Please Enter Transporter Nationality<BR>\n";
  if (empty( $pregistration1))
 $message .= "Please Enter Place of Registration for Mode of Transport<BR>\n";
   if (empty( $root1))
 $message .= "Please Enter Root Line<BR>\n";
  if (empty( $penality1))
 $message .= "Please Enter Penality (Action Taken on a Specific Time)<BR>\n";
 if (empty( $goods1))
 $message .= "Please Enter Goods Description \n";
 $char = "Eye Color: ".$p11." \n"."Weight: ".$p21." \n"."Height: ".$p31." \n"."Hair Color: ".$p41." \n"."Other: ".$p51 ;*/


if ( $message == "" ) // we found no errors
 {  

$sql2=mysql_query("UPDATE `tab_travelers` SET `office_code` = '$office1'    ");
if ($sql2)
{
echo "<p align=\"center\"><h3>Successfull! Your updation has been done! $name </h3></p><a href=\"disp-traveler.php\">Go to Display Page</a>";
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
