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
<title>Welcome to Fraud made by Importerss Registration form</title>
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
.style24 {font-size: 18px; font-weight: bold; color: #000000; }
.style25 {
	color: #000066;
	font-weight: bold;
}
.style26 {
	font-size: 20px;
	font-weight: bold;
}
.style27 {font-size: 18px}
.style50 {font-style: italic; color: #000099; font-weight: bold; font-size: 16px; }
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
    <td width="1%" rowspan="16">&nbsp;</td>
    <td width="1%" rowspan="16">&nbsp;</td>
    <td colspan="9"><div align="center"><span class="style7">Welcome to Importers Registration form </span><span class="style8"></span></div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><span class="style13">Office Code</span></td>
    <td width="20%"><label>
      <input name="txtoffice" type="text" id="txtoffice"  onfocus="blur();" value="<?php echo "$officecode" ; ?>" size="4" maxlength="4"/>
    </label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13">Company Name </span></td>
    <td width="20%" colspan="2"><span class="lineItem"><a 
        href="javascript:NewCal('txtseizuredate','ddmmmyyyy',true,12)">
      <input name="txtcname" type="text" id="txtcname" />
    </a></span></td>
    <td width="1%">&nbsp;</td>
    <td width="12%"><span class="style13">TIN Number </span></td>
    <td width="20%"><input name="txttin" type="text" id="txttin" /></td>
  </tr>
  <tr>
    <td><span class="style13">Declaration Registration Number </span></td>
    <td><span class="style50">
      <input name="txtdec" type="text" id="txtdec" />
    </span></td>
    <td>&nbsp;</td>
    <td><span class="style13">Association Name </span></td>
    <td colspan="2"><input name="txtaname" type="text" id="txtaname" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Declarant Name </span></td>
    <td><input name="txtdname" type="text" id="txtdname" /></td>
  </tr>
  <tr>
    <td><span class="style13">Declarant Number </span></td>
    <td><input name="txtdnumber" type="text" id="txtdnumber" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Declarant Address </span></td>
    <td colspan="2"><input name="txtdaddress" type="text" id="txtdaddress" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Legal Status </span></td>
    <td><input name="txtstatus" type="text" id="txtstatus" /></td>
  </tr>
  
  <tr>
    <td><span class="style13">VAT Registration Number </span></td>
    <td><input name="txtvat" type="text" id="txtvat" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Address of Company </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtaddress" type="text" id="txtaddress" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Name of Principal </span></td>
    <td bgcolor="#FFFFCC"><input name="txtprincipal" type="text" id="txtprincipal" /></td>
  </tr>
  <tr>
    <td><span class="style13">Nature of Busincess </span></td>
    <td><input name="txtnature" type="text" id="txtnature" /></td>
    <td rowspan="10">&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Secondary Business </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtsecondary" type="text" id="txtsecondary" /></td>
    <td rowspan="10">&nbsp;</td>
    <td colspan="2"><div align="left"><span class="style24">Types of Fraud </span></div></td>
  </tr>
  <tr>
    <td><span class="style13">Consignee</span></td>
    <td><input name="txtconsignee" type="text" id="txtconsignee" /></td>
    <td bgcolor="#FFFFCC"><span class="style13">Mode of Transport (MOT) </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtmot" type="text" id="txtmot" /></td>
    <td colspan="2"><span class="style25">Put Mark in one of the boxes </span></td>
  </tr>
  <tr>
    <td rowspan="2"><span class="style13">Identification Number of MOT </span></td>
    <td rowspan="2"><input name="txtmotid" type="text" id="txtmotid" /></td>
    <td rowspan="2" bgcolor="#FFFFCC"><span class="style13">Risk Indicators</span></td>
    <td colspan="2" rowspan="2" bgcolor="#FFFFCC"><input name="txtrisk" type="text" id="txtrisk" /></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style50">
      <input type="radio" name="fraud" onclick="check(this.value)" value="Undervaluation" checked="checked" />
      Undervaluation</span></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style50">
    <input type="radio" name="fraud" onclick="check(this.value)" value="Misdiscription" />
Misdiscription</span></td>
  </tr>
  <tr>
    <td><span class="style13">Examination Date </span></td>
    <td><span class="lineItem">
      <input name="txtedate" type="text" id="txtedate" size="15" maxlength="15" onfocus="blur();"/>
      <a href="javascript:NewCal('txtedate','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" /></a><a 
        href="javascript:NewCal('txtfrom','ddmmmyyyy',true,12)"></a></span></td>
    <td bgcolor="#FFFFCC"><span class="style13">Examination Result </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txteresult" type="text" id="txteresult" /></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style50">
    <input type="radio" name="fraud" onclick="check(this.value)" value="Extra Items" />
Extra Items</span></td>
    </tr>
  <tr>
    <td rowspan="2"><span class="style13">Goods Description </span></td>
    <td rowspan="2"><input name="txtgoods" type="text" id="txtgoods" /></td>
    <td rowspan="2" bgcolor="#FFFFCC"><span class="style13">HS-Code</span></td>
    <td colspan="2" rowspan="2" bgcolor="#FFFFCC"><input name="txths" type="text" id="txths" /></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style50">
    <input type="radio" name="fraud" onclick="check(this.value)" value="Origin of Country" />
Origin of Country </span></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFCC">
	<span class="style50">
<input type="radio" name="fraud" onclick="check(this.value)" value="Counterfit" />
Counterfit</span>
	</td>
  </tr>
  <tr>
    <td><span class="style13">CPC Code </span></td>
    <td><input name="txtcpc" type="text" id="txtcpc" /></td>
    <td bgcolor="#FFFFCC"><span class="style13">Circumstance</span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtcir" type="text" id="txtcir" /></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style50">
    <input type="radio" name="fraud" onclick="check(this.value)" value="Misclassification" />
Misclassification</span></td>
    </tr>
  <tr>
    <td><span class="style13">CIF in Birr </span></td>
    <td><input name="txtcif" type="text" id="txtcif" /></td>
    <td bgcolor="#FFFFCC"><span class="style13">Initial Tax  in Birr </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtitax" type="text" id="txtitax" /></td>
    <td colspan="2" bgcolor="#FFFFCC"><span class="style50">
    <input type="radio" name="fraud" onclick="check(this.value)" value="Other" />
Other</span></td>
    </tr>
  <tr>
    <td><span class="style13">TOP UP   in Birr </span></td>
    <td><input name="txttopup" type="text" id="txttopup" /></td>
    <td bgcolor="#FFFFCC"><span class="style13">Total Tax in Birr </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txttotal" type="text" id="txttotal" /></td>
    <td bgcolor="#FFFFCC"><span class="style13">Risk Level</span></td>
    <td bgcolor="#FFFFCC"><input name="txtrisklevel" type="text" id="txtrisklevel" /></td>
  </tr>
  
  <tr>
    <td><span class="style13">Officer Name </span></td>
    <td><input name="txtofficer" type="text" id="txtofficer" value="<?php echo "$username" ; ?>"  onfocus="blur();"/></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
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
    <td><span class="style26"><a href="formitem.php"></a></span></td>
    <td><a href="disp-importer.php" class="style26 style27">View all Importers </a></td>
  </tr>
  </form>
</table>

<?php
} 
else {
$office = $_POST['txtoffice'];
$cname = $_POST['txtcname'];
$dec = $_POST['txtdec'];
$aname = $_POST['txtaname'];
$dname = $_POST['txtdname'];
$dnumber = $_POST['txtdnumber'];
$daddress = $_POST['txtdaddress'];
$status = $_POST['txtstatus'];
$tin = $_POST['txttin'];
$vat = $_POST['txtvat'];
$address = $_POST['txtaddress'];
$principal = $_POST['txtprincipal'];
$nature = $_POST['txtnature'];
$secondary = $_POST['txtsecondary'];
$consignee = $_POST['txtconsignee'];
$fraud = $_POST['fraud'];
$mot = $_POST['txtmot'];
$motid = $_POST['txtmotid'];
$risk = $_POST['txtrisk'];
$edate = $_POST['txtedate'];
$goods = $_POST['txtgoods'];
$hs = $_POST['txths'];
$cpc = $_POST['txtcpc'];
$cir = $_POST['txtcir'];
$cif = $_POST['txtcif'];
$itax = $_POST['txtitax'];
$topup = $_POST['txttopup'];
$total = $_POST['txttotal'];
$eresulat = $_POST['txteresult'];
$risklevel = $_POST['txtrisklevel'];
$officer = $_POST['txtofficer'];

//Session values
$_SESSION['dname'] = $_POST['txtdname'];
$_SESSION['dnumber'] = $_POST['txtdnumber'];
$_SESSION['daddress'] = $_POST['txtdaddress'];
$_SESSION['consignee'] = $_POST['txtconsignee'];
$_SESSION['cif'] = $_POST['txtcif'];
$_SESSION['itax'] = $_POST['txtitax'];
$_SESSION['topup'] = $_POST['txttopup'];
$_SESSION['ttax'] = $_POST['txttotal'];
$_SESSION['cname'] = $_POST['txtcname'];
$_SESSION['goods'] = $_POST['txtgoods'];
$_SESSION['hs'] = $_POST['txths'];
//$_SESSION['origin'] = $_POST['txtname'];
$_SESSION['cpc'] = $_POST['txtcpc'];
$_SESSION['risklevel'] = $_POST['txtrisklevel'];

$message="";
 
 if (empty( $cname))
 $message .= "Please Enter Name of a Company!<BR>\n";   
 if (empty( $dec))
 $message .= "Please Enter Declaration Registration Number!<BR>\n";
 if (empty( $mot))
 $message .= "Please Enter Mode of Transport!<BR>\n";
 if (empty( $edate))
 $message .= "Please Enter Examination Date!<BR>\n";
 
  
	  
	if ( $message == "" ) // we found no errors
 {  
$result="INSERT INTO `tab_importer` ( `office_code` , `name_of_company` , `dec_reg_no` , `association_name` , `declarant_name` , `declarant_number` , `declarant_address` , `status` , `tin_no` , `vat_reg_no` , `address` , `name_of_principal` , `nature_of_business` , `secondary_business` , `consignee` , `fraud` , `mot` , `mot_id` , `risk_indicators` , `examination_date` , `goods_description` , `hs_code` , `cpc_code` , `circumstance` , `cif` , `initial_tax` , `top_up` , `total_tax` , `result` , `risk_level` , `officer_name`  ) 
VALUES ('$office' , '$cname' , '$dec' , '$aname' ,  '$dname' , '$dnumber' , '$daddress' , '$status' , '$tin' , '$vat' , '$address' , '$principal' , '$nature' , '$secondary' , '$consignee' , '$fraud' , '$mot' , '$motid' , '$risk' , '$edate' , '$goods' , '$hs' , '$cpc' , '$cir' , '$cif', '$itax', '$topup', '$total', '$eresulat', '$risklevel', '$officer' )" ;

$sql=mysql_query($result);



if ($sql)
{

echo "<p align=\"center\"><h3>Your Insertion has been done Successfully!</h3></p><a href=\"formdeclarant1.php\">Next<br>";

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