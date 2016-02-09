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
<title>Welcome to Fraud made by Declarants Registration form</title>
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
.style25 {
	color: #666666;
	font-weight: bold;
}
.style26 {
	font-size: 20px;
	font-weight: bold;
}
.style27 {font-size: 18px}
.style30 {
	color: #000099;
	font-size: 10px;
	font-weight: bold;
}
.style31 {color: #FFFFCC}
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
    <td width="1%" rowspan="10">&nbsp;</td>
    <td width="1%" rowspan="10">&nbsp;</td>
    <td colspan="9"><div align="center"><span class="style7">Welcome to  Declarants Registration form </span><span class="style8"></span></div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><span class="style13">Office Code</span></td>
    <td width="20%"><label>
      <input name="txtoffice" type="text" id="txtoffice"  onfocus="blur();" value="<?php echo "$officecode" ; ?>" size="4" maxlength="4"/>
    </label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13">License Number </span></td>
    <td width="20%" colspan="2"><span class="lineItem"><a 
        href="javascript:NewCal('txtseizuredate','ddmmmyyyy',true,12)">
      <input name="txtlicense" type="text" id="txtlicense" />
    </a></span></td>
    <td width="1%">&nbsp;</td>
    <td width="12%"><span class="style13">Declarant Name </span></td>
    <td width="20%"><input name="txtdname" type="text" id="txtdname" /></td>
  </tr>
  <tr>
    <td><span class="style13">Declarant Number </span></td>
    <td><input name="txtdnumber" type="text" id="txtdnumber" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Declarant Address </span></td>
    <td colspan="2"><input name="txtdaddress" type="text" id="txtdaddress" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Importer/Exporter Name </span></td>
    <td><input name="txtcon" type="text" id="txtcon" /></td>
  </tr>
  <tr>
    <td rowspan="3"><span class="style13">Djibouti Declarant Name</span></td>
    <td rowspan="3"><input name="txtdjibuti" type="text" id="txtdjibuti" /></td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3"><span class="style13">Commodity (HS) Code </span></td>
    <td colspan="2"></td>
    <td rowspan="3">&nbsp;</td>
    <td rowspan="3"><span class="style13">Goods Description  </span></td>
    <td rowspan="3"><input name="txtgoods" type="text" id="txtgoods" /></td>
  </tr>
  <tr>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2" class="style30"><input name="txths" type="text" id="txths" /></td>
  </tr>
  
  <tr>
    <td><span class="style13">Departure</span></td>
    <td><input name="txtorigin" type="text" id="txtorigin" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Exporter Country </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style30">
      <input name="txtecountry" type="text" id="txtecountry" />
    </span></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Quantity</span></td>
    <td bgcolor="#FFFFCC"><input name="txtquantity" type="text" id="txtquantity" /></td>
  </tr>
  <tr>
    <td><span class="style13">CIF</span></td>
    <td bgcolor="#FFFFCC"><input name="txtcif" type="text" id="txtcif" /></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Initial Tax </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtitax" type="text" id="txtitax" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Top Up </span></td>
    <td bgcolor="#FFFFCC"><input name="txttopup" type="text" id="txttopup" /></td>
  </tr>
  <tr>
    <td><span class="style13">Total Tax </span></td>
    <td bgcolor="#FFFFCC"><input name="txttotal" type="text" id="txttotal" /></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Officer Name </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtofficer" type="text" id="txtofficer" value="<?php echo "$username" ; ?>"  onfocus="blur();"/></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  
  

  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Register" /></td>
    <td><input type="reset" name="reset" value="Clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style26"><a href="formitem.php"></a></span><a href="disp-declarant.php" class="style26 style27">View all Declarants </a></td>
    </tr>
  </form>
</table>
<?php
} 
else {
$office = $_POST['txtoffice'];
$license= $_POST['txtlicense'];
$dname= $_POST['txtdname'];
$dnumber = $_POST['txtdnumber'];
$daddress = $_POST['txtdaddress'];
$companyname= $_POST['txtcon'];
$djibuti= $_POST['txtdjibuti'];
$hs= $_POST['txths'];
$goods= $_POST['txtgoods'];
$origin= $_POST['txtorigin'];
$ecountry= $_POST['txtecountry'];
$quantity= $_POST['txtquantity'];
$cif= $_POST['txtcif'];
$itax= $_POST['txtitax'];
$topup= $_POST['txttopup'];
$total= $_POST['txttotal'];
$officer= $_POST['txtofficer'];




$message="";
 if (empty( $license))
 $message .= "Please Enter License Number!<BR>\n";   
 if (empty( $dname))
 $message .= "Please Enter Declarant Name!<BR>\n";
 if (empty( $dnumber))
 $message .= "Please Enter Declarant Number!<BR>\n";
 if (empty( $daddress))
 $message .= "Please Enter Declarant Address!<BR>\n";
  if (empty( $con))
 $message .= "Please Enter Consignee Name<BR>\n";
  if (empty( $hs))
 $message .= "Please Enter HS_Code!<BR>\n";
   if (empty( $goods))
 $message .= "Please Enter Goods Description!<BR>\n";
  if (empty( $cif))
 $message .= "Please Enter CIF Value!<BR>\n";
  if (empty( $itax))
 $message .= "Please Enter Initial Tax Value!<BR>\n";
  if (empty( $topup))
 $message .= "Please Enter Top Up Value!<BR>\n";
  if (empty( $total))
 $message .= "Please Enter Total Tax Value!<BR>\n";
 
 
	if ( $message == "" ) // we found no errors
 {  
$result="INSERT INTO `tab_declarant` ( `office_code` , `license_no` , `declarant_name` , `declarant_number` , `declarant_address` , `company_name` , `djibouti_dec_name` , `comm_code` , `goods_description` , `origin` , `exporter_country` , `quantity` , `cif` , `initial_tax` , `top_up` , `total_tax` , `officer` ) 
VALUES ('$office' , '$license' , '$dname' , '$dnumber' ,  '$daddress' , '$companyname' , '$djibuti' , '$hs' , '$goods' , '$origin' , '$ecountry' , '$quantity' , '$cif' , '$itax' , '$topup' , '$total' , '$officer' )" ;

$sql=mysql_query($result);



if ($sql)
{

echo "<p align=\"center\"><h3>Your Insertion has been done Successfully!</h3></p><a href=\"formdeclarant.php\">Back to Registration Form</a><br>";

}
else
{
print "Not Inserted $conca ";
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