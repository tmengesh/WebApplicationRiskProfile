<?php 
session_start();
if(!(isset($_SESSION['auth']) && $_SESSION['auth']!=''))
{
header("Location:index.php");
}
?>
<?php
$offence1 = $_SESSION['offence'];
$tname = $_SESSION['tname']; 
//$uname=;
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
<title>Welcome to Items Registration Form</title>
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
.style24 {font-size: 18px; font-weight: bold; color: #666666; }
.style25 {
	color: #666666;
	font-weight: bold;
}
.style26 {
	font-size: 20px;
	font-weight: bold;
}
.style27 {font-size: 18px}
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
    <td width="1%" rowspan="8">&nbsp;</td>
    <td width="1%" rowspan="8">&nbsp;</td>
    <td colspan="9"><div align="center"><span class="style7">Welcome to  Item Registration Form </span><span class="style8"></span></div></td>
    <td width="3%">&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><span class="style13">Offence Case Nr </span></td>
    <td width="20%"><label>
    <input name="txtoffence" type="text" id="txtoffence" onfocus="blur();"  value="<?php print "$offence1";?>"/>
    </label></td>
    <td width="1%">&nbsp;</td>
    <td width="10%"><span class="style13">CPC Code </span></td>
    <td width="20%" colspan="2"><span class="lineItem"><a 
        href="javascript:NewCal('txtseizuredate','ddmmmyyyy',true,12)">
      <input name="txtcpc" type="text" id="txtcpc" />
    </a></span></td>
    <td width="1%">&nbsp;</td>
    <td width="12%"><span class="style13">Departure</span></td>
    <td width="20%"><input name="txtorigin" type="text" id="txtorigin" /></td>
  </tr>
  <tr>
    <td><span class="style13">Nr of Shipment </span></td>
    <td><input name="txtshipment" type="text" id="txtshipment" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Trade Mark </span></td>
    <td colspan="2"><input name="txttrade" type="text" id="txttrade" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Made in Label </span></td>
    <td><input name="txtmadein" type="text" id="txtmadein" /></td>
  </tr>
  <tr>
    <td><span class="style13">Item Status </span></td>
    <td><input name="txtstatus" type="text" id="txtstatus" /></td>
    <td>&nbsp;</td>
    <td><span class="style13">Declarant Code </span></td>
    <td colspan="2"><a href="javascript:NewCal('txtdob','ddmmmyyyy')"></a><a 
        href="javascript:NewCal('txtdob','ddmmmyyyy',true,12)">
      <input name="txtdeclarant" type="text" id="txtdeclarant" />
    </a></td>
    <td>&nbsp;</td>
    <td><span class="style13">CIF</span></td>
    <td><input name="txtcif" type="text" id="txtcif" /></td>
  </tr>
  
  
  <tr>
    <td><span class="style13">Initial Tax </span></td>
    <td><input name="txtitax" type="text" id="txtitax" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">TOP Up </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txttopup" type="text" id="txttopup" /></td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Total Tax </span></td>
    <td bgcolor="#FFFFCC"><input name="txttotal" type="text" id="txttotal" /></td>
  </tr>
  <tr>
    <td><span class="style13">Investigation</span></td>
    <td><input name="txtinvest" type="text" id="txtinvest" /></td>
    <td rowspan="2">&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Risk Level </span></td>
    <td colspan="2" bgcolor="#FFFFCC"><input name="txtrisk" type="text" id="txtrisk" /></td>
    <td rowspan="2">&nbsp;</td>
    <td bgcolor="#FFFFCC"><span class="style13">Goods Description </span></td>
    <td bgcolor="#FFFFCC"><input name="txtgoods" type="text" id="txtgoods" ></td>
  </tr>
  <tr>
    <td><span class="style13">Company/Person Name </span></td>
    <td><input name="txtname" type="text" id="txtname" onfocus="blur();"  value="<?php print "$tname";?>"/></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFCC"><input type="submit" name="submit" value="Register" /></td>
    <td colspan="2" bgcolor="#FFFFCC"><input type="reset" name="reset" value="Clear" /></td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
    </tr>
  
  

  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
<?php
} 
else {
$cpc = $_POST['txtcpc'];
$origin= $_POST['txtorigin'];
$shipment= $_POST['txtshipment'];
$trade = $_POST['txttrade'];
$madein = $_POST['txtmadein'];
$status= $_POST['txtstatus'];
$dec= $_POST['txtdeclarant'];
$cif= $_POST['txtcif'];

$itax= $_POST['txtitax'];
$topup= $_POST['txttopup'];

$totaltax= $_POST['txttotal'];
$invest= $_POST['txtinvest'];
$goods= $_POST['txtgoods'];
$txtrisk= $_POST['txtcharacter3'];
 
 if (empty( $cpc))
 $message .= "Please Enter CPC Code!<BR>\n";   
 if (empty( $origin))
 $message .= "Please Enter Origin!<BR>\n";
 if (empty( $goods))
 $message .= "Please Enter Goods Description!<BR>\n";
 //if (empty( $shipment))
 //$message .= "Please Enter Shipment<BR>\n";
 
   
  
	  
	if ( $message == "" ) // we found no errors
 {  
$result="INSERT INTO `tab_item` ( `offence` , `cpc_code` , `origin` , `no_of_shipment` , `trade_mark` , `made_in` , `status` , `declarant` , `cif` , `initial_tax` , `top_up` , `total_tax` , `investigation` , `risk_level` , `goods` , `name` ) 
VALUES ('$offence1' , '$cpc' , '$origin' , '$shipment' ,  '$trade' , '$madein' , '$status' , '$dec' , '$cif' , '$itax' , '$topup' , '$totaltax' , '$invest' , '$risk' , '$goods' , '$tname' )" ;

$sql=mysql_query($result);



if ($sql)
{

echo "<p align=\"center\"><h3>Your Insertion has been done Successfully!</h3></p><a href=\"formtraveler.php\">Back to Registration Form</a><br>";

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