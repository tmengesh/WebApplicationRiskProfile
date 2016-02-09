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
<title>View Importer's Detail with its related items</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
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
$namelist=$_POST['namelist'];
}
else
{
}


$sql="SELECT * FROM `tab_exporter` WHERE `name_of_company` = '$namelist'  ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
		print "<font color=\"Black\" size=\"5\"><b>Exporter: $namelist  </b></font>";
		
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
	 print "<th> Consignor</th>";           
	 print "<th> Mode of Transport (MOT)</th>";		             
     print "<th> MOT ID</th>";                  
	 print "<th> Risk Indicators</th>";              
	 print "<th> Type of Fraud</th>";		     
     print "<th> Examination Date</th>";                         	              
	 print "<th> Goods Description</th>";		 
     print "<th> HS-Code</th>";        
	 print "<th> CPC Code</th>";                    
	 print "<th> Circumstance</th>";		             
     print "<th> Risk Level</th>";   
	 print "<th> Examiner Name</th>";   
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
$consignor = $newArray[consignor];
$mot = $newArray[mot];
$motid = $newArray[mot_id];
$risk = $newArray[risk_indicators];
$fraud = $newArray[fraud];
$edate = $newArray[examination_date];
$goods = $newArray[goods_description];
$hs = $newArray[hs_code];
$cpc = $newArray[cpc_code];
$cir = $newArray[circumstance];
$risklevel = $newArray[risk_level];
$examiner = $newArray[examiner_name];
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
print "<td>$consignor</td>";	
print "<td>$mot</td>";	
print "<td>$motid</td>";	
print "<td>$risk</td>";	
print "<td>$fraud</td>";	
print "<td>$edate</td>";
print "<td>$goods</td>";	
print "<td>$hs</td>";	
print "<td>$cpc</td>";	
print "<td>$cir</td>";	
print "<td>$risklevel</td>";	
print "<td>$examiner</td>";	
print "<td>$officer</td>";	
print "</tr>"; 

	}
	//echo "</select>\n";
	print "</table>";

}
else
{
echo "<p align=\"center\"><h3>Exporter's didn't exist. Back to search page</h3></p><a href=\"disp-importer.php\">Back to Search Form</a><br>";
}
 //////////////////////////////////
 
 $sql1="SELECT * FROM `tab_declarant` WHERE `company_name` = '$namelist'  ";
$result1 = mysql_query($sql1);
  $number_of_rows1 = mysql_num_rows($result1);            
               if($number_of_rows1>=1)                          
            { 
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
		print "<font color=\"Black\" size=\"5\"><b>Declarant Information </b></font>";
		
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
	                 
	 
	
			while($newArray1 = mysql_fetch_array($result1))
			{
			
			
$office = $newArray1[office_code];
$license = $newArray1[license_no];
$dname = $newArray1[declarant_name];	
$dnumber = $newArray1[declarant_number]; 
$daddress = $newArray1[declarant_address];
$arrname[]= $newArray1[declarant_name];
$companyname = $newArray1[company_name];
$djibuti= $newArray1[djibouti_dec_name];
$hs = $newArray1[comm_code];  
$goods = $newArray1[goods_description];
$origin = $newArray1[origin]; 
$ecountry = $newArray1[exporter_country]; 	
$quantity = $newArray1[quantity];
$cif = $newArray1[cif];
$itax = $newArray1[initial_tax];
$topup = $newArray1[top_up];
$total = $newArray1[total_tax];
$officer = $newArray1[officer]; 


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

}
else
{
echo "<p align=\"center\"><h3>Declarant's didn't exist. Back to search page</h3></p><a href=\"disp-importer.php\">Back to Search Form</a><br>";
}
 ////////////////////////////////////

$sql2="SELECT * FROM `tab_item` 
WHERE `name` = '$namelist' ";


$result2 = mysql_query($sql2);
  $number_of_rows2 = mysql_num_rows($result2);            
               if($number_of_rows2>=1)                          
            { 
print "<br>";
print "<font color=\"Black\" size=\"5\"><b>Item Information </b></font>";
print "<table border=1 align=left>";	
//while($row = mysql_fetch_array($result)){ 
		
		
		//$tpartial=$row['sum(partial_kg)'] + $tpartial;
	
	 print "<th> Offence Case Nr </th>";		
     print "<th> CPC Code</th>";	
   	 print "<th> Departure</th>";	
     print "<th> Nr of Shipment</th>";
	 print "<th> Trade Mark</th>";		
     print "<th> Made in Label</th>";
	 print "<th> Item Status </th>";		
     print "<th> Declarant Code</th>";	
   	 print "<th> CIF in Birr</th>";	
     print "<th> Initial Tax in Birr</th>";
	 print "<th> TOP Up in Birr</th>";		
     print "<th> Total Tax in Birr</th>";
   	 print "<th> Investigation</th>";	
     print "<th> Risk Level</th>";
	 print "<th> Good Description</th>";		
     print "<th> Company/Person Name</th>";
	 
	 
	
			while($newArray2 = mysql_fetch_array($result2))
			{
			
			
$offence1= $newArray2[offence];
$cpc = $newArray2[cpc_code];
$origin = $newArray2[origin];
$shipment= $newArray2[no_of_shipment];
$trade= $newArray2[trade_mark];
$madein= $newArray2[made_in];

$status= $newArray2[status];
$dec = $newArray2[declarant];
$cif = $newArray2[cif];
$itax= $newArray2[initial_tax];
$topup= $newArray2[top_up];
$totaltax= $newArray2[total_tax];	

$invest= $newArray2[investigation];
$risk = $newArray2[risk_level];
$goods = $newArray2[goods];
$tname= $newArray2[name];


print "<tr>";	
print "<td> $offence1 </td>";	
print "<td> $cpc </td>";	
print "<td> $origin </td>";	
print "<td> $shipment</td>";	

print "<td> $trade </td>";	
print "<td> $madein </td>";	
print "<td> $status </td>";	
print "<td> $dec </td>";	
print "<td> $cif </td>";	
print "<td> $itax </td>";	
print "<td> $topup </td>";	
print "<td> $totaltax </td>";	
print "<td> $invest </td>";	
print "<td> $risk </td>";	
print "<td> $goods </td>";
print "<td> $tname </td>";	
print "</tr>";	
 

	}
	//echo "</select>\n";
	print "</table>";	

			
			?>	     
			<br />
	
	
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