<?php 
session_start();
if(!(isset($_SESSION['admin']) && $_SESSION['admin']!=''))
{
//header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Risk Analysis And Enforcement Database Registration Form</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 30px;
	color: #000000;
}
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 28px; color: #000000; }
.style8 {
	font-size: 28px;
	color: #000000;
}
.style9 {
	font-size: 20px;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#FFFFCC">
<table width="100%" height="100%" border="0" bgcolor="#FFFFCC">
  <tr>
    <td colspan="5"><div align="center"><img src="images/logo.gif" width="689" height="79" /></div></td>
  </tr>
  <tr>
    <td colspan="5"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="2%" rowspan="10">&nbsp;</td>
    <td width="5%" rowspan="10">&nbsp;</td>
    <td colspan="2"><div align="center"><span class="style7">Welcome to Risk Analysis &amp;<br />
    Enforcement Database </span><span class="style8"></span></div></td>
    <td width="11%"><a href="destroy.php">Logout</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="formcargo.php" class="style9">Fraud made at Cargo </a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="formconveyance.php" class="style9">Fraud made at Conveyances</a></td>
  </tr>
  <tr>
    <td rowspan="4"><div align="center"><span class="style1">List of Registration<br />
    Form</span></div></td>
    <td><a href="formdeclarant.php" class="style9">Fraud made by Declarnat</a></td>
  </tr>
  <tr>
    <td><a href="formexporter.php" class="style9">Fraud made by Exporter </a></td>
  </tr>
  <tr>
    <td><a href="formimporter.php" class="style9">Fraud made by Importer </a></td>
  </tr>
  <tr>
    <td><a href="#" class="style9">Fraud made on Item </a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="formtransporter.php" class="style9">Fraud made by Transporter </a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="formtraveler.php" class="style9">Fraud made by Travelers </a></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="formseizure.php" class="style9">Seizure Information </a></td>
  </tr>
</table>
</body>
</html>
