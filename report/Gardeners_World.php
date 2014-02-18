<?php require('header.php'); ?>

<?php require('cavedata.php'); ?>

<table>
<tr>
<td valign="top">
<H2>Gardeners' World</h2>
 
 <br>
  Location 
 <?php printlocation('Gardeners_World') ?>
 </td>
 <td>
 <br> 
 <applet code="caverot.class" archive="/caving/caverot/caverot.jar" name="caverot" width="300" height="300">
<param name="cave" value="http://www.su.ic.ac.uk/caving/report/Gardeners_World.3dz">
</applet>
</td>
</table>
<br>
 <img src="Gardeners_World.gif"></img>
 
 
<?php require('../footer.php'); ?>

