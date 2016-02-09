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
<title>View all Importers</title>
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


$sql="SELECT * FROM `tab_importer`  ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
		print "<font color=\"Black\" size=\"5\"><b>Importer's Record </b></font>";
		
		//$tpartial=$row['sum(partial_kg)'] + $tpartial;
	
	 print "<th> Office Code</th>";		 
     print "<th> Company Name</th>";	 
	 print "<th> TIN Number</th>";	 
     print "<th> Declaration Registration Number</th>";      
	 print "<th> Association Name</th>";		     
     print "<th> Declarant Name</th>";	             
	 print "<th> Declarant Number</th>";		         
     print "<th> Declarant Address</th>";    
	 print "<th> Legal Status</th>";	 
     print "<th> VAT Registration Number</th>";          
	 print "<th> Address of Company</th>";	
     print "<th> Name of Principal</th>";               
	 print "<th> Nature of Busincess</th>";		         
     print "<th> Secondary Business</th>";                   	                    
	 print "<th> Consignee</th>";           
	 print "<th> Mode of Transport (MOT)</th>";		             
     print "<th> MOT ID</th>";                  
	 print "<th> Risk Indicators</th>";              
	 print "<th> Type of Fraud</th>";		     
     print "<th> Examination Date</th>";                         
	 print "<th> Examination Result</th>";                      
	 print "<th> Goods Description</th>";		 
     print "<th> HS-Code</th>";        
	 print "<th> CPC Code</th>";                    
	 print "<th> Circumstance</th>";		             
     print "<th> CIF in Birr</th>";
	 print "<th> Initial Tax in Birr</th>";   
	 print "<th> TOP UP in Birr</th>";   
	 print "<th> Total Tax in Birr</th>";   
	 print "<th> Risk Level</th>";   
	 print "<th> Officer Name</th>";   
	                 
	 
	
			while($newArray = mysql_fetch_array($result))
			{
			
			
$office = $newArray[office_code];
$cname = $newArray[name_of_company];
$tin = $newArray[tin_no];
$dec = $newArray[dec_reg_no];
$aname = $newArray[association_name];
$dname = $newArray[declarant_name];
$arrname[]= $newArray[name_of_company];
$dnumber = $newArray[declarant_number];
$daddress = $newArray[declarant_address];
$status = $newArray[status];
$vat = $newArray[vat_reg_no];
$address = $newArray[address];
$principal = $newArray[name_of_principal];
$nature = $newArray[nature_of_business];
$secondary = $newArray[secondary_business];
$consignee = $newArray[consignee];
$mot = $newArray[mot];
$motid = $newArray[mot_id];
$risk = $newArray[risk_indicators];
$fraud = $newArray[fraud];
$edate = $newArray[examination_date];
$eresulat = $newArray[result];
$goods = $newArray[goods_description];
$hs = $newArray[hs_code];
$cpc = $newArray[cpc_code];
$cir = $newArray[circumstance];
$cif = $newArray[cif];
$itax = $newArray[initial_tax];
$topup = $newArray[top_up];
$total = $newArray[total_tax];
$risklevel = $newArray[risk_level];
$officer = $newArray[officer_name];

print "<tr>";	
print "<td>$office</td>";	
print "<td>$cname</td>";	
print "<td>$tin</td>";	
print "<td>$dec</td>";	
print "<td>$aname</td>";	
print "<td>$dname</td>";	
print "<td>$dnumber</td>";	
print "<td>$daddress</td>";	
print "<td>$status</td>";	
print "<td>$vat</td>";	
print "<td>$address</td>";	
print "<td>$principal</td>";	
print "<td>$nature</td>";	
print "<td>$secondary</td>";
print "<td>$consignee</td>";	
print "<td>$mot</td>";	
print "<td>$motid</td>";	
print "<td>$risk</td>";	
print "<td>$fraud</td>";	
print "<td>$edate</td>";
print "<td>$eresulat</td>";	
print "<td>$goods</td>";	
print "<td>$hs</td>";	
print "<td>$cpc</td>";	
print "<td>$cir</td>";	
print "<td>$cif</td>";
print "<td>$itax</td>";	
print "<td>$topup</td>";
print "<td>$total</td>";	
print "<td>$risklevel</td>";	
print "<td>$officer</td>";	
print "</tr>";	
 

	}
	//echo "</select>\n";
	print "</table>";	
			?>	     
			<br />
	<form action="disp-importer1.php" method="post">	
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