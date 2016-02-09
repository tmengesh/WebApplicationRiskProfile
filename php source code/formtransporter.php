<?php 
session_start();
if(!(isset($_SESSION['auth']) && $_SESSION['auth']!=''))
{
header("Location:index.php");
}
?>
<?php
$uname=$_SESSION['username'];
include("connectivity.php");
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Fraud made by Transporter Registration form</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style type="text/css">
<!--
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 28px; color: #000000; }
.style8 {
	font-size: 28px;
	color: #000000;
}
.style13 {
	font-size: 13px;
	font-weight: bold;
}
.style17 {
	font-size: 13px;
	font-weight: bold;
	color: #000000;
	font-style: italic;
}
.style19 {font-size: 13px; font-weight: bold; font-style: italic; }
.style26 {
	font-size: 20px;
	font-weight: bold;
}
.style27 {font-size: 18px}
.style29 {font-size: 36px; font-weight: bold; color: #666666; font-style: italic; }
.style24 {font-size: 18px; font-weight: bold; color: #666666; }
.style25 {	color: #666666;
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
  <form name="x" action="" method="post">
  <tr>
    <td colspan="12"><div align="center"><img src="images/logo.gif" width="689" height="79" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="formmenu.php">Home</a></td>
    <td><a href="destroy.php">Logout</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="1%" rowspan="6">&nbsp;</td>
    <td width="1%" rowspan="6">&nbsp;</td>
    <td colspan="9"><div align="center"><span class="style7">Welcome to  Transporter Registration form </span><span class="style8"></span></div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><span class="style13">Office Code</span></td>
    <td width="20%"><label>
      <input name="txtoffice" type="text" id="txtoffice"  onfocus="blur();" value="<?php echo "$officecode" ; ?>" size="4" maxlength="4"/>
    </label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13">Association Name </span></td>
    <td width="20%" colspan="2"><span class="lineItem"><a 
        href="javascript:NewCal('txtseizuredate','ddmmmyyyy',true,12)">
      <input name="txtassociation" type="text" id="txtassociation" />
    </a></span></td>
    <td width="1%">&nbsp;</td>
    <td width="12%"><span class="style13">Owner of Vehicle </span></td>
    <td width="20%"><input name="txtowner" type="text" id="txtowner" /></td>
  </tr>
  <tr>
    <td><span class="style13">Owner's Address </span></td>
    <td><input name="txtoaddress" type="text" id="txtoaddress" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Owner's Occupation </span></td>
    <td colspan="2"><input name="txtoccupation" type="text" id="txtoccupation" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><span class="style29">Driver's Detail </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr>
  

  
  <tr>
    <td><span class="style13">Driver's Name </span></td>
    <td bgcolor="#FFFFCC"><input name="txtname" type="text" id="txtname" /></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Driver's Sex </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input type="radio" name="sex" onclick="check(this.value)" value="Male" checked="checked" />
      <em><strong>Male</strong></em>
      <input type="radio" name="sex" onclick="check(this.value)" value="Female" />
      <em><strong>Female</strong></em></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Driver's Age </span></td>
    <td bgcolor="#FFFFCC"><input name="txtage" type="text" id="txtage" size="3" maxlength="3" /></td>
  </tr>
  <tr>
    <td><p><span class="style13">Driver's Address </span></p></td>
    <td bgcolor="#FFFFCC"><input name="txtdaddress" type="text" id="txtdaddress" /></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Driving License Number </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtlicense" type="text" id="txtlicense" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Concealment Method </span></td>
    <td bgcolor="#FFFFCC"><input name="txtconcealment" type="text" id="txtconcealment" /></td>
  </tr>
  
  
  
  
  <tr>
    <td rowspan="4">&nbsp;</td>
    <td rowspan="4">&nbsp;</td>
    <td><span class="style13">Type of Fraud </span></td>
    <td><input name="txtfraud" type="text" id="txtfraud" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Goods Description </span></td>
    <td colspan="2"><input name="txtgoods" type="text" id="txtgoods" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Truck Plate Number </span></td>
    <td bgcolor="#FFFFCC"><input name="txttruck" type="text" id="txttruck" /></td>
  </tr>
  
  
  
  
  <tr>
    <td><span class="style13">Officer Name </span></td>
    <td><input name="txtofficer2" type="text" id="txtofficer2" value="<?php echo "$username" ; ?>"  onfocus="blur();"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Register" /></td>
    <td><input type="reset" name="reset" value="Clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style26"><a href="formitem.php"></a></span><a href="disp-transporter.php" class="style26 style27">View all Transporters </a></td>
  </tr>
  </form>
</table>
<?php
} 
else {
$office = $_POST['txtoffice'];
$aname= $_POST['txtassociation'];
$owner= $_POST['txtowner'];
$oaddress = $_POST['txtoaddress'];
$occ = $_POST['txtoccupation'];
$name= $_POST['txtname'];
$sex= $_POST['sex'];
$age= $_POST['txtage'];
$license= $_POST['txtlicense'];
$daddress	= $_POST['txtdaddress'];

$truck= $_POST['txttruck'];
$goods= $_POST['txtgoods'];
$fraud= $_POST['txtfraud'];
$concelment= $_POST['txtconcealment'];
$officer= $_POST['txtofficer2'];



$message="";
 
 if (empty( $aname))
 $message .= "Please Enter Association Name!<BR>\n";   
 if (empty( $owner))
 $message .= "Please Enter Vehicle's Owner Name!<BR>\n";
 if (empty( $oaddress))
 $message .= "Please Enter Vehicle's Owner Address!<BR>\n";
 if (empty( $occ))
 $message .= "Please Enter Vehicle's Owner Occupation!<BR>\n";
  if (empty( $name))
 $message .= "Please Enter Transporter's Name!<BR>\n";
  if (empty( $age))
 $message .= "Please Enter Transporter's Age!<BR>\n";
  if (empty( $license))
 $message .= "Please Enter Transporter's Driving Licence Number!<BR>\n";
  if (empty( $daddress))
 $message .= "Please Enter Driver's Address!<BR>\n";
  if (empty( $truck))
 $message .= "Please Enter Truck Plate Number!<BR>\n";
  if (empty( $goods))
 $message .= "Please Enter Description of Goods!<BR>\n";
  if (empty( $fraud))
 $message .= "Please Enter Fraud Type!<BR>\n";
  if (empty( $age))
 $message .= "Please Enter Transporter's Age!<BR>\n";
 
 
 
  
	  
	if ( $message == "" ) // we found no errors
 {  
$result="INSERT INTO `tab_transporter` ( `office_code` , `association_name` , `vehicle_owner` , `owner_address` , `owner_occupation` , `driver_name` , `driver_sex` , `driver_age` , `license_no` , `driver_address` , `truck_plate_no` , `goods_description` , `fraud`  , `concealment` , `officer` ) 
VALUES ('$office' , '$aname' , '$owner' , '$oaddress' ,  '$occ' , '$name' , '$sex' , '$age' , '$license' , '$daddress' , '$truck' , '$goods' , '$fraud' , '$concelment' , '$officer' )" ;

$sql=mysql_query($result);



if ($sql)
{

echo "<p align=\"center\"><h3>Your Insertion has been done Successfully!</h3></p><a href=\"formtransporter.php\">Back to Registration Form</a><br>";

}
else
{
print "Not Inserted $name ";
}
}
else
{
 print "<CENTER><font color=\"Red\" size=\"3\"><p><b>$message</b><p></font></CENTER>";
 
 print "<CENTER><h3>Your insertion is not Successfull<br />
  Use the browsers back button to fill the form again!!!</h3></CENTER>";
}//

}
?>
</body>
</html>
	 <?php
   
 exit;
 
 ?>