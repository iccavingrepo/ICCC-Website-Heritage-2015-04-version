<?php require("header.php") ?>

<?php

$fp=fopen("photorand/basemax","r");
$picmax=fgets($fp);
fclose($fp);

list($picmaxn)=sscanf($picmax,"%d");

//One day I will be shot by the optimisation gods for this horrendous, wasteful hack.
//Yes;  I should produce an array of random numbers, sort them once, then iterate through
//But I'm lazy. Its nearly 1am and I'm hungry. 
$numphotos=rand(1,15)+5;

echo '<h2>',$numphotos,' Random Photos</h2><h3><a href="photorand.php">Eat a Refresher for more...</a></h3>';

for ($i = 1; $i <= $numphotos; $i++) {
$pic=rand(1,$picmaxn);
 
$fp = fopen ("photorand/base.db","r");
$count=0;
while ( $dataline = fgets($fp) ) {
	if($count==$pic)
	{
		echo '<a href="',$dataline,'.html">',"\n";
		echo '<img src="',$dataline,'--thumb.jpg">',"\n</a>\n";
	}
	$count++;
}
fclose($fp);
}
?>			

<?php require("footer.php") ?>
