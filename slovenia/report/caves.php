<?php require('../header.php'); ?>

<h2>Plateau</h2>

<a href="http://www.geopedia.si/lite.jsp?params=T118_x408210_y126301_s14#T118_x405158.25_y123863.75_s15">Location of Registered Caves in the Slovene Geopedia dataset</a> (satellite data is high quality).<br><br>

<a href="/caving/slovenia/MigSurveyData/">Survey Data Repository</a> &mdash; <a href="/caving/slovenia/MigSurveyData/migovecsurveydata/mig.3d">Latest mig.3d for displaying with Aven</a> &mdash; <a href="http://www.union.ic.ac.uk/rcc/caving/slovenia/MigSurveyData/migovecsurveydata/garden/s_garden.3d">Latest s_garden.3d for displaying with Aven</a>.<br><br>

<b>WARNING: Some of this data is stuck in 2001, we're in a process of updating...</b><br><br>

 Click on the entrance markings on the map / cave names below to get a survey of the cave.<br>
 <br>
 <a href="cavedata">Raw Textfile of Locations</a><br>
 <br>

 <map name="plateau"> 
 
 <?php 
 
 $fp = fopen ("cavedata","r");
 while ($dataline = fgetcsv($fp, 1000, "\t")) {
     list ($name, $xcoord, $ycoord) = $dataline;
     if($name[0]!='#')
	  {
	   $xpix=2*($xcoord-540363);
	  	$ypix=2*(512499-$ycoord);
		
		echo '<area href="detail.php?cavename=',$name,'" shape="rect"';
		
		echo ' alt="',$name,'" coords="';
		echo $xpix-5, ', ', $ypix-5, ', ', $xpix+5, ', ', $ypix+5,'"></area>',"\n";
		}
 }
 fclose($fp);

 echo '</map>',"\n";
 echo '<p><img align=left src="markedmap.jpg" width="508" height="500" usemap="#plateau"></img>',"\n";
 /*
 $fp = fopen ("cavedata","r");
 $count=0;
 while ($dataline = fgetcsv($fp, 1000, "\t")) {
     list ($name, $xcoord, $ycoord) = $dataline;
     if($name[0]!='#')
	  {
	   $xpix=2*($xcoord-540363);
	  	$ypix=2*(512499-$ycoord);
		echo '<div style="position:relative; top:',$ypix-500-7*$count-3,';left:',$xpix-3,';">',"\n";
		echo '<a href="detail.php?cavename=',$name,'"><img border="0" src="target.png"></a></div>',"\n";
		$count++;
	  }
 }
 fclose($fp);
 */
 //list at the bottom of the map.
 
 //echo '<ul>';
 
 $fp = fopen ("cavedata","r");
 $count=0;
 while ($dataline = fgetcsv($fp, 1000, "\t")) {
     list ($name, $xcoord, $ycoord) = $dataline;
     if($name[0]!='#')
	  {
	      echo '<br><a href="detail.php?cavename=',$name,'">',strtr($name, "_", " "),'</a>',"\n";
	      $count++;
	  }
 }
 fclose($fp);
 
 echo '</p>';
 
 ?>
 
 
 
<?php require('../../footer.php'); ?>

