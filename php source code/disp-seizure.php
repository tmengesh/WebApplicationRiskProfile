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
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<title>View all Seizure Information</title>
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #0000CC;}
.style2 {font-size: 20px}
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
    <td width="76%"><img src="images/logo.gif" width="700" height="88" /></td>
    <td width="15%">&nbsp;</td>
  </tr>  
  <tr>
    <td>&nbsp;</td>
    <td>	
	   </td>
  <td>&nbsp;</td>
  </tr>
  
	
  <?php
include("connectivity.php");
$uname=$_SESSION['username'];
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


$sql="SELECT * FROM `tab_seizure`  ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
		print "<font color=\"Black\" size=\"5\"><b>Seizure's Record</b></font>";
		
		//$tpartial=$row['sum(partial_kg)'] + $tpartial;
	
	 print "<th> Port of Entry</th>";		 
     print "<th> Seizure Date</th>";	 
	 print "<th> Seizure Place</th>";	 
     print "<th> Type of Goods</th>";      
	 print "<th> Quantity of Goods</th>";		     
     print "<th> Smuggler's Name </th>";	
     print "<th> Smuggler's Address</th>";     
	 print "<th> Smuggler's Sex</th>";
	 print "<th> Smuggler's Date of Birth</th>";        
	 print "<th> License Number</th>";		         
     print "<th> MOT</th>";    
	 print "<th> MOT ID</th>";    
	 print "<th> Consignee's Name</th>";	 
     print "<th> Consignee's Address</th>";          
	 print "<th> Shipper's Name</th>";	
     print "<th> Shipper's Address</th>";               
     print "<th> Concealment Method</th>";                   	                   
	 print "<th> Risk Indicators</th>";           
	 print "<th> Officer Name</th>";		             
                    
	 
	
			while($newArray = mysql_fetch_array($result))
			{
			
			
$port = $newArray[port_of_entry];
$sdate = $newArray[seizure_date];
$splace = $newArray[seizure_place];	
$tcontra = $newArray[type_of_contraband]; 
$qcontra = $newArray[quantity_of_contraband];
$arrname[]= $newArray[name];
$name = $newArray[individual_name];  
$address = $newArray[individual_address];
$sex = $newArray[sex]; 
$dob = $newArray[dob]; 	
$license = $newArray[license_no];
$mot = $newArray[mot];
$motid = $newArray[mot_id];
$cname = $newArray[consignee_name]; 
$caddress = $newArray[consignee_address];
$sname = $newArray[shipper_name]; 
$saddress = $newArray[shipper_address];
$concelment = $newArray[concealment];  
$risk = $newArray[risk_indicators]; 
$officer = $newArray[officer]; 


print "<tr>";	
print "<td>$port</td>";	
print "<td>$sdate</td>";	
print "<td>$splace</td>";	
print "<td>$tcontra</td>";	
print "<td>$qcontra</td>";	
print "<td>$name</td>";	
print "<td>$address</td>";	
print "<td>$sex</td>";	
print "<td>$dob</td>";	
print "<td>$license</td>";	
print "<td>$mot</td>";	
print "<td>$motid</td>";	
print "<td>$cname</td>";	
print "<td>$caddress</td>";	
print "<td>$sname</td>";	
print "<td>$saddress</td>";	
print "<td>$concelment</td>";	
print "<td>$risk</td>";
print "<td>$officer</td>";	
print "</tr>";	
 

	}
	//echo "</select>\n";
	print "</table>";	
			?>	     
			<br />
	<form action="#" method="post">	
	Please Choose Traveler's Name
	<select name="namelist" size="1" id="Combobox1">
<?
 
for ($i = 0; $i < count($arrname); $i++) {
$option .= "<option ";
$option .= "value=\"$arrname[$i]\">$arrname[$i]</option> \n";
}
echo $option;
?>
</select>
<input name="" type="submit" value="Next" />
</form>
<?php
	}
	 else
			{
		//	 session_start();
			echo "<p align=\"center\"><h3>Data didn't exitst, Go to registration form</h3></p><a href=\"formmenu.php\"><h3>Go to Search Form!</h3></a>";
			}
?>
</table>
</body>
</html>