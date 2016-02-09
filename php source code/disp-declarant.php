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
<title>View all Declarants</title>
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


$sql="SELECT * FROM `tab_declarant`  ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
			print "<font color=\"Black\" size=\"5\"><b>Declarant's Record</b></font>";
		
		//$tpartial=$row['sum(partial_kg)'] + $tpartial;
	
	 print "<th> Office Code</th>";		 
     print "<th> License Number</th>";	 
	 print "<th> Declarant Name</th>";	 
     print "<th> Declarant Number</th>";      
	 print "<th> Declarant Address</th>";		     
     print "<th> Importer/Exporter Name</th>";	             
	 print "<th> Djibouti Declarant Name</th>";		         
     print "<th> HS_Code</th>";    
	 print "<th> Goods Description</th>";	 
     print "<th> Departure</th>";          
	 print "<th> Exporter Country</th>";	
	 print "<th> Quantity</th>";                       
     print "<th> CIF in Birr</th>";   
	 print "<th> Initial Tax in Birr</th>";     
	 print "<th> Top Up in Birr</th>";   
	 print "<th> Total Tax in Birr</th>";                  
     print "<th> Officer Name</th>";                
	 
	
			while($newArray = mysql_fetch_array($result))
			{
			
			
$office = $newArray[office_code];
$license = $newArray[license_no	];
$dname = $newArray[declarant_name];	
$dnumber = $newArray[declarant_number]; 
$daddress = $newArray[declarant_address];
$arrname[]= $newArray[declarant_name];
$companyname = $newArray[company_name];
$djibuti= $newArray[djibouti_dec_name];
$hs = $newArray[comm_code];  
$goods = $newArray[goods_description];
$origin = $newArray[origin]; 
$ecountry = $newArray[exporter_country]; 	
$quantity = $newArray[quantity];
$cif = $newArray[cif];
$itax = $newArray[initial_tax];
$topup = $newArray[top_up];
$total = $newArray[total_tax];
$officer = $newArray[officer]; 


print "<tr>";	
print "<td>$office</td>";	
print "<td>$license</td>";	
print "<td>$dname</td>";	
print "<td>$dnumber</td>";	
print "<td>$daddress</td>";	
print "<td>$companyname</td>";	
print "<td>$djibuti</td>";	
print "<td>$hs</td>";	
print "<td>$goods</td>";	
print "<td>$origin</td>";	
print "<td>$ecountry</td>";	
print "<td>$quantity</td>";	
print "<td>$cif</td>";	
print "<td>$itax</td>";
print "<td>$topup</td>";
print "<td>$total</td>";
print "<td>$officer</td>";	

print "</tr>";	
 

	}
	//echo "</select>\n";
	print "</table>";	
			?>	     
			<br />
	<form action="" method="post">	
	Please Choose Declarant's Name
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