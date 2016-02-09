<?php 
session_start();
if(!(isset($_SESSION['auth']) && $_SESSION['auth']!=''))
{
header("Location:index.php");
}
?>
<?php
include("connectivity.php");
$conca=$_SESSION['conca'];
$uname=$_SESSION['username'];
//$conca = $regno1  . $regno2 . $regno3 ;
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


/*$sql="SELECT * FROM `tab_travelers` ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows==1)                          
            { 
			$newArray = mysql_fetch_array($result);
			
$port = $newArray[port_of_entry];
$idate= $newArray[dep_date];
$checkingp= $newArray[checking_point];
$adate = $newArray[arr_date];
$importer = $newArray[importer_name];
$conca= $newArray[dec_reg_no];
$tkg= $newArray[total_kg];
$goods= $newArray[goods_description];
$plate= $newArray[truck_plate_number];
$cont1= $newArray[contr_nbr1];
$seal1= $newArray[seal_nbr1];
$cont2= $newArray[contr_nbr2];
$seal2= $newArray[seal_nbr2];
$officer= $newArray[officer_name];
$remark= $newArray[remark];	*/		
			?>			
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<title>Display Travelers Record</title>
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #0000CC;}
.style2 {font-size: 20px}
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 28px; color: #000000; }
.style8 {	font-size: 28px;
	color: #000000;
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
  <tr>
    <td width="9%" height="46">&nbsp;</td>
    <td width="76%"><div align="center"><img src="images/logo.gif" width="700" height="88" /></div></td>
    <td width="15%">&nbsp;</td>
  </tr>  
  <tr>
    <td>&nbsp;</td>
    <td>	
	<form name="x" action="" method="post">
	
	<table width="100%" height="100%" border="0">
      <tr>
        <td width="1%" rowspan="2">&nbsp;</td>
        <td><div align="center"></div></td>
        <td width="14%">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td><a href="destroy.php" class="style2">Logout</a></td>
      </tr>
      <tr>
        <td colspan="5"><div align="center"><span class="style7">Display fraud made by Travelers </span><span class="style8"></span></div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td colspan="5" rowspan="4">
		<?php
//}

 $sql="SELECT * FROM `tab_travelers` ";


$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 

     print "<table border=1 align=center>";	
	 print "<th> Office Code</th>";		
     print "<th> Seizure Date/ Time </th>";	
     print "<th> Seizure Place</th>";
	 print "<th> Traveler's Nationality</th>";		
     print "<th> Traveler's Name</th>";
	 print "<th> Traveler's Age</th>";		
     print "<th> Traveler's Sex</th>";	
     print "<th> Traveler's Date of Birth</th>";
	 print "<th> Traveler's Passport Number</th>";		
     print "<th> Traveler's Address</th>";
	 print "<th> Traveler's Physical Characterstics </th>";		
     print "<th> Language Spoken</th>";	
     print "<th> Traveler's Occupation</th>";
	 print "<th> Concealment Method</th>";	
     print "<th> Origin of Goods</th>";	 	
     print "<th> Destination of Goods</th>";
     print "<th> Risk Indicators</th>";
	 print "<th> Type of Fraud</th>";
	 print "<th> Officer Name</th>";
	 print "<th> Mode of Transport (MOT)</th>";
	 print "<th> MOT Identification Number</th>";
	 print "<th> Owner of MOT</th>";
	 print "<th> Place of Registration</th>";
 	 print "<th> Root Line</th>";
 	 print "<th> Penality or Action Taken</th>";
	 
	 
	
			while($newArray = mysql_fetch_array($result))
			{
			
			
$office = $newArray[office_code];
$sdate= $newArray[seizure_date];
$splace= $newArray[seizure_place];
$nationality = $newArray[nationality];
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


print "<tr>";	
print "<td> $office</td>";	
print "<td>$sdate </td>";	
print "<td> $splace</td>";	
print "<td>$nationality </td>";	
print "<td> $name</td>";	
print "<td>$age </td>";	
print "<td> $sex</td>";	
print "<td>$dob </td>";	
print "<td> $passport</td>";	
print "<td>$address </td>";	
print "<td> $char</td>";	
print "<td>$language </td>";	
print "<td> $occupation</td>";	
print "<td>$concelment </td>";	
print "<td> $origin</td>";	
print "<td>$destination </td>";	
print "<td>$risk </td>";	
print "<td>$fraud </td>";	
print "<td> $officer</td>";	
print "<td>$mot </td>";	
print "<td> $motid</td>";	
print "<td>$tnationality </td>";	
print "<td> $pregistration</td>";	
print "<td>$root </td>";	
print "<td> $penality</td>";	

print "</tr>";	
 

	}
	//echo "</select>\n";
	print "</table>";



	}
?>
		</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      
	   <tr>
        <td height="26">&nbsp;</td>
        <td width="20%">&nbsp;</td>
        <td colspan="2"><a href="formtraveler.php" class="style2">Back to Registrtration Form </a>          <label></label></td>
        <td width="24%">&nbsp;</td>
        <td width="21%">&nbsp;</td>
	   </tr>
    </table>
    </form>    </td>
  <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
