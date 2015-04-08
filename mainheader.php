<!--<!DocType HTML Public "-//W3C//DTD HTML 4.0//EN">-->
<html>

<head>
  <meta http-equiv="Content-Type" Content="text/html; charset=utf-8">
  <meta Name="Generator" Content="Hand Coded">
  <link rel="stylesheet" type="text/css" href="/caving/caving.css" title="style">
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-80065-2";
urchinTracker();
</script>
 <title>Imperial College Caving Club</title>
</head>

<body bgcolor="#000000" text="#CCCCCC" link="#FFFFCC" vlink="#FFFFCC">
 
<!--<font face="Verdana, Helvetica,Sans-serif">-->

 
 

<?php 
 function begintextdatebox($title, $right)
 {
    echo '
  <table align="center" class="rootmenu" bgcolor="#FFFFFF" border="0" cellpadding="2" cellspacing="0"  width="90%"> 

    <tr>
      <td>
        <table class="insidemenu" width="100%" border="0" cellspacing="0" cellpadding="5"> 
          <tr>
            <td class="titlemenu" align="left"> 
              <p class="titlemenu" align="middle">';
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
            <td class="menu" valign="top" colspan="2">'; }

  function begintextbox($title)
 {
   echo '
    <table class="rootmenu" bgcolor="#FFFFFF" border="0" cellpadding="2" cellspacing="0"  width="100%">
      <tr>
        <td> 
          <table class="insidemenu" width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
              <td class="titlemenu" align="center">
                <p class="titlemenu">';	echo $title;
	echo '</p>
              </td>
            </tr>
            <tr></tr>
            <tr>
              <td class="menu">'; }


  function endtextbox() { echo '</td> </tr> </table> </td></tr> </table> <br>',"\n";}
  function endtextdatebox() { echo '</td> </tr> </table> </td></tr> </table> <br><br>',"\n";} ?>