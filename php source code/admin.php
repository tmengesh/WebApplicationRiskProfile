<?php 
session_start();
if(!(isset($_SESSION['admin']) && $_SESSION['admin']!=''))
{
header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Page for Risk Analysis and Enforcement Database </title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #0000CC;
}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; color: #0000CC; }
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; color: #000066; }
.style4 {font-size: 20px}
-->
</style>
</head>

<body bgcolor="#FFFFCC">
<table width="100%" height="100%" border="0" bgcolor="#FFFFCC">
  <tr>
    <td colspan="5"><div align="center"><img src="images/logo.gif" width="700" height="88" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="15%"><a href="destroy.php" class="style4">Logout</a></td>
  </tr>
  <tr>
    <td width="9%" rowspan="13">&nbsp;</td>
    <td width="32%" rowspan="13"><span class="style1">Admin Page </span></td>
    <td colspan="3"><span class="style3">Reports on Fraud </span></td>
  </tr>
  <tr>
    <td width="11%" rowspan="9">&nbsp;</td>
    <td colspan="2"><a href="#"><strong> Cargo </strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Conveyances</strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Declarnat</strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Exporter </strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Importer </strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Item </strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Seizure</strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Transporter </strong></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="#"><strong> Travelers </strong></a></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><a href="createuser.php"><span class="style3">Create User Account </span></a></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
