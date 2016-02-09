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
<title>View all Cargo Information</title>
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


$sql="SELECT * FROM `tab_cargo`  ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
		print "<font color=\"Black\" size=\"5\"><b>Cargo's Record </b></font>";
		
		//$tpartial=$row['sum(partial_kg)'] + $tpartial;
	
	 print "<th> Office Code</th>";		 
     print "<th> Seizure Date</th>";	 
	 print "<th> Seizure Place</th>";	 
     print "<th> Cargo Type</th>";      
	 print "<th> Mode of Transport (MOT)</th>";		     
     print "<th> Consignor </th>";	
     print "<th> Declarant Name </th>";     
	 print "<th> Declarant Number </th>";
	 print "<th> Concealment Method </th>";        
	 print "<th> Departure</th>";		         
     print "<th> Destination</th>";    
	 print "<th> Type of Goods </th>";    
	 print "<th> Quantity of Goods </th>";	 
     print "<th> Risk Indicators</th>";          
	 print "<th> Officer Name </th>";	
     	             
                    
	 
	
			while($newArray = mysql_fetch_array($result))
			{
			
			
$office = $newArray[office_code];
$sdate = $newArray[seizure_date];
$splace = $newArray[seizure_place];	
$cargo = $newArray[cargo_type]; 
$mot = $newArray[mot];
$arrcargo[]= $newArray[cargo_type];
$consignor = $newArray[consignor];  
$dname = $newArray[declarant_name];
$dnumber = $newArray[declarant_number]; 
$concealment = $newArray[concealment]; 	
$origin = $newArray[origin];
$destination = $newArray[destination];
$tgoods = $newArray[type_of_contraband];
$qgoods = $newArray[quantity_of_contraband]; 
$risk = $newArray[risk_indicators];
$officer = $newArray[officer]; 


print "<tr>";	
print "<td>$office</td>";	
print "<td>$sdate</td>";	
print "<td>$splace</td>";	
print "<td>$cargo</td>";	
print "<td>$mot</td>";	
print "<td>$consignor</td>";	
print "<td>$dname</td>";	
print "<td>$dnumber</td>";	
print "<td>$concealment</td>";	
print "<td>$origin</td>";	
print "<td>$destination</td>";	
print "<td>$tgoods</td>";	
print "<td>$qgoods</td>";	
print "<td>$risk</td>";	
print "<td>$officer</td>";	
print "</tr>";	
 

	}
	//echo "</select>\n";
	print "</table>";	
			?>	     
			<br />
	<form action="#" method="post">	
	Please Choose Cargo Type
	<select name="namelist" size="1" id="Combobox1">
<?
 
for ($i = 0; $i < count($arrcargo); $i++) {
$option .= "<option ";
$option .= "value=\"$arrcargo[$i]\">$arrcargo[$i]</option> \n";
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