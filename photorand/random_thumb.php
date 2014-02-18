<?php require('../header.php'); ?>

<h2>Random Photo...</h2>
<h3>Reload for another</h3>

<center>
 <?php 
 
 $fp=fopen("basemax","r");
 $picmax=fgets($fp);
 fclose($fp);

 list($picmaxn)=sscanf($picmax,"%d");
 $pic=rand(1,$picmaxn);
 
 $fp = fopen ("base.db","r");
 $count=0;
 while ( $dataline = fgets($fp) ) {
     if($count==$pic)
	  {
	  echo '<h3>',$dataline,'</h3>',"\n";
	  echo '<a href="',$dataline,'.html">',"\n";
	      echo '<img src="',$dataline,'--thumb.jpg">',"\n</a>\n";
	      }
     $count++;
	 
 }
 fclose($fp);
 ?>
 
 </center>
 
<?php require('../footer.php'); ?>

