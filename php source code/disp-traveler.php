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
<title>View all Travelers</title>
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


$sql="SELECT * FROM `tab_travelers`  ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
		print "<font color=\"Black\" size=\"5\"><b>Trveler's Record </b></font>";
		
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
	 
	
			while($newArray = mysql_fetch_array($result))
			{
			
			
$office = $newArray[office_code];
$sdate = $newArray[seizure_date];
$splace = $newArray[seizure_place];	
$nat = $newArray[nationality]; 
$name = $newArray[name];
$arrname[]= $newArray[name];
$arrage[]= $newArray[age];
$age = $newArray[age];  
$sex = $newArray[sex];
$dob = $newArray[dob]; 
$pnumber = $newArray[passport_no]; 	
$add = $newArray[address];
$pchar = $newArray[physical_charactersctics];
$fraud = $newArray[fraud]; 
$language = $newArray[language];
$occ = $newArray[occupation]; 
$conc = $newArray[concealment];
$dep = $newArray[origin];  
$des = $newArray[destination]; 
$risk = $newArray[risk_indicators]; 
$offence = $newArray[offence];
$mot = $newArray[mot];   
$motid = $newArray[mot_id]; 
$tnationality = $newArray[transporter_nationality];
$preg = $newArray[place_of_registration];
$root = $newArray[root_line];
$penality = $newArray[penality];
 $officer = $newArray[officer_name]; 

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
			?>	     
			<br />
	<form action="update-traveler11.php" method="post">	
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