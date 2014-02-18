<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <meta http-equiv="Content-Type" Content="text/html; charset=ISO-8859-1">
 <meta Name="Generator" Content="Hand Coded">
 <link rel="stylesheet" type="text/css" media="print" href="/caving/print.css" title="style">
<link rel="stylesheet" type="text/css" media="screen, projection" href="/caving/caving.css" title="style">
<link rel="shortcut icon" href="http://www.union.ic.ac.uk/rcc/caving/favicon.ico" />
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-80065-2";
urchinTracker();
</script>
<title>Imperial College Caving Club [ICCC]</title>
 </head>
 <body bgcolor="#000000" text="#CCCCCC" link="#FFFFCC" vlink="#FFFFCC">

 <?php 
 function begintextdatebox($title, $right)
 {
    echo '<table align="center" class="rootmenu" bgcolor="#FFFFFF" border="0" cellpadding="2" cellspacing="0"  width="93%"> 
<tr>
<td>
<table class="insidemenu" width="100%" border="0" cellspacing="0" cellpadding="5"> 
<tr> 
<td class="titlemenu" align="left">
<p class="titlemenu" align="left"><nbsp><nbsp><nbsp><nbsp><nbsp><nbsp><nbsp><nbsp>';
    echo $title;
	echo'</p>
</td>
<td class="titlemenu" align="right">
<p class="titlemenu">';
   echo $right;
	echo '</p>
</td>
</tr>
<!--<tr>
</tr>-->
<tr>
<td class="menu" valign="top" colspan="2">';
 }
 
 function begintextbox($title)
 {
   echo '<table class="rootmenu" bgcolor="#FFFFFF" border="0" cellpadding="2" cellspacing="0"  width="100%"  > 
        <tr><td>
        <table class="insidemenu" width="100%" border="0" cellspacing="0" cellpadding="3">
                <tr><td class="titlemenu" align="center">
                        <p class="titlemenu">';
	echo $title;
	echo '</p>
                </td></tr>
                <tr></tr>
                <tr><td class="menu">';
	
 }


  function beginredbox($title)
{
   echo '<table align="center" class="rootmenu" bgcolor="#FFFFFF" border="0" cellpadding="2" cellspacing="0"  width="93%">
      <tr><td>
        <table class="insidemenu" width="100%" border="0" cellspacing="0" cellpadding="5"> 
          <tr>
            <td class="redmenu" align="center">
              <p class="titlemenu">'; echo $title; echo '</p>
            </td>
          </tr>
          <tr>
            <td class="menu" valign="top" colspan="2">'; 
 }


 function endredbox() 
 { 
   echo '</td> </tr> </table> </td> </tr> </table> <br>' ,"\n"; 
 }
 
 function endtextbox()
 {
   echo '</td> </tr> </table> </td></tr> </table> <br>',"\n";
 }
 
 function endtextdatebox()
 {
   echo '</td> </tr> </table> </td></tr> </table> <br>',"\n";
 }
 ?>

<?php include "menu.php";?>
  
