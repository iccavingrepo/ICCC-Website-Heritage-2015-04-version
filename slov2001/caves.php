<?php include('header.php'); ?>

<h1>SLOVENIA </h1>
<H2>Plateau</h2>
 
 Click on the entrance markings to get  a survey of the cave.<br>
 <br>

 <map name="plateau"> 
 
 <?php 
 
 $fp = fopen ("cavedata","r");
 while ($dataline = fgetcsv($fp, 1000, "\t")) {
     list ($name, $xcoord, $ycoord) = $dataline;
     if($name[0]!='#')
	  {
	   $xpix=2*($xcoord-540350);
	  	$ypix=2*(512500-$ycoord);
		
		echo '<area href="',$name,'.php" shape="rect"';
		
		echo ' alt="',$name,'" coords="';
		echo $xpix-5, ', ', $ypix-5, ', ', $xpix+5, ', ', $ypix+5,'"></area>',"\n";
		}
 }
 fclose($fp);

 echo '</map>',"\n";
 echo '<img src="plateau.jpg" usemap="#plateau"></img>',"\n";
 
 $fp = fopen ("cavedata","r");
 $count=0;
 while ($dataline = fgetcsv($fp, 1000, "\t")) {
     list ($name, $xcoord, $ycoord) = $dataline;
     if($name[0]!='#')
	  {
	   $xpix=2*($xcoord-540350);
	  	$ypix=2*(512500-$ycoord);
		echo '<div style="position:relative; top:',$ypix-500-7*$count-3,';left:',$xpix-3,';">',"\n";
		echo '<a href="',$name,'.php"><img border="0" src="target.gif"></a></div>',"\n";
		$count++;
	  }
 }
 fclose($fp);
 
 ?>
 
 
<?php include('../footer.php'); ?>

