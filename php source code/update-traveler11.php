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
<title>View Traveler's Detail with its related items</title>
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


$sql1="SELECT * FROM `tab_travelers` 
WHERE `name` = '$namelist' ";


$result1 = mysql_query($sql1);
  $number_of_rows1 = mysql_num_rows($result1);            
               if($number_of_rows1>=1)                          
            { 


print "<table border=1 align=center>";	
print "<font color=\"Black\" size=\"5\"><b>Traveler's $namelist Record </b></font>";
//while($row = mysql_fetch_array($result)){ 
		
		
		//$tpartial=$row['sum(partial_kg)'] + $tpartial;
	
	 print "<th> Office Code</th>";		 
     print "<th> Seizure Date</th>";	 
	 print "<th> Seizure Place</th>";	 
     print "<th> Nationality</th>";      
	 print "<th> Name</th>";		     
     print "<th> Age</th>";	             
	 print "<th> Sex</th>";		         
     print "<th> Date of Birth</th>";    
	 print "<th> Passport Number</th>";	 
     print "<th> Address</th>";          
	 print "<th> Physical Charactersctics</th>";	
     print "<th> Type of Fraud</th>";               
	 print "<th> Language Spoken</th>";		         
     print "<th> Occupation</th>";                   
	                            
	 print "<th> Concealment Method</th>";           
	 print "<th> Departure</th>";		             
     print "<th> Destination</th>";                  
	 print "<th> Risk Indicators</th>";              
	 print "<th> Offence Case Number</th>";		     
     print "<th> MOT </th>";                         
	 print "<th> MOT ID</th>";                      
	 print "<th> Transporter Nationality</th>";		 
     print "<th> Place of Registration</th>";        
	 print "<th> Root Line</th>";                    
	 print "<th> Penality</th>";		             
     print "<th> Officer Name</th>";   
	 
	 
	
			while($newArray1 = mysql_fetch_array($result1))
			{
			
			
$office = $newArray1[office_code];
$sdate = $newArray1[seizure_date];
$splace = $newArray1[seizure_place];	
$nat = $newArray1[nationality]; 
$name = $newArray1[name];
$arrname[]= $newArray1[name];
$arrage[]= $newArray1[age];
$age = $newArray1[age];  
$sex = $newArray1[sex];
$dob = $newArray1[dob]; 
$pnumber = $newArray1[passport_no]; 	
$add = $newArray1[address];
$pchar = $newArray1[physical_charactersctics];
$fraud = $newArray1[fraud]; 
$language = $newArray1[language];
$occ = $newArray1[occupation]; 
$conc = $newArray1[concealment];
$dep = $newArray1[origin];  
$des = $newArray1[destination]; 
$risk = $newArray1[risk_indicators]; 
$offence = $newArray1[offence];
$mot = $newArray1[mot];   
$motid = $newArray1[mot_id]; 
$tnationality = $newArray1[transporter_nationality];
$preg = $newArray1[place_of_registration];
$root = $newArray1[root_line];
$penality = $newArray1[penality];
 $officer = $newArray1[officer_name]; 

print "<tr>";	
print "<td>$office</td>";	
print "<td>$sdate</td>";	
print "<td>$splace</td>";	
print "<td>$nat</td>";	
print "<td>$name</td>";	
print "<td>$age</td>";	
print "<td>$sex</td>";	
print "<td>$dob</td>";	
print "<td>$pnumber</td>";	
print "<td>$add</td>";	
print "<td>$pchar</td>";	
print "<td>$fraud</td>";	
print "<td>$language</td>";	
print "<td>$occ</td>";	
print "<td>$conc</td>";	
print "<td>$dep</td>";	
print "<td>$des</td>";
print "<td>$risk</td>";	
print "<td>$offence</td>";	
print "<td>$mot</td>";
print "<td>$motid</td>";	
print "<td>$tnationality</td>";
print "<td>$preg</td>";	
print "<td>$root</td>";
print "<td>$penality</td>";	
print "<td> $officer</td>";
print "</tr>";	
 

	}
	//echo "</select>\n";
	print "</table>";	

}
else
{
echo "<p align=\"center\"><h3>Traveler's didn't exist. Back to search page</h3></p><a href=\"disp-traveler.php\">Back to Search Form</a><br>";
}
 ////////////////////////////////////

$sql="SELECT * FROM `tab_item` 
WHERE `name` = '$namelist' ";


$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
print "<br>";
print "<font color=\"Black\" size=\"5\"><b>Traveler's $namelist Item Record </b></font>";
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
	 
	 
	
			while($newArray = mysql_fetch_array($result))
			{
			
			
$offence1= $newArray[offence];
$cpc = $newArray[cpc_code];
$origin = $newArray[origin];
$shipment= $newArray[no_of_shipment];
$trade= $newArray[trade_mark];
$madein= $newArray[made_in];

$status= $newArray[status];
$dec = $newArray[declarant];
$cif = $newArray[cif];
$itax= $newArray[initial_tax];
$topup= $newArray[top_up];
$totaltax= $newArray[total_tax];	

$invest= $newArray[investigation];
$risk = $newArray[risk_level];
$goods = $newArray[goods];
$tname= $newArray[name];


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