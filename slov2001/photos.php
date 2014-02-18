<?php require('header.php'); ?>

<h2>Photos</h2>

All photos are (c) 2001. The copyright owners are listed below each thumbnail.

 <table>

<?php 
exec("ls medium/*.[Jj][Pp]*[Gg] | sed -e 's/medium\///'", $files);
 exec("ls -sh medium/*.[Jj][Pp]*[Gg] | awk '{print $1}'", $msize);
 exec("ls -sh large/*.[Jj][Pp]*[Gg] | awk '{print $1}'", $lsize);
 
 $i = 0;
 
 //count array size
 while (($files[$i]))
 {
   $i++;
 }
 $size=$i; 
 $i=0;

 $height = (int)$size/3;
 $row=0;
 $index=0;
 while($row<$height)
 {
   echo "<tr>";
	$col=0;
	while($col<3)
	{
		echo "<td align=\"center\">";
		//echo "$files[$index]";
		if($files[$index])
		{
		   $chunks = explode(".", $files[$index]);
			echo "<img src=\"thumbnails/$files[$index]\"></img><br>";
			echo "<i>", $chunks[0], "</i><br>";
			$mdim = GetImageSize("medium/$files[$index]");
			echo "<a href=\"medium/$files[$index]\">$msize[$index] medium ($mdim[0]x$mdim[1])</a><br>";
			$ldim = GetImageSize("large/$files[$index]");
			echo "<a href=\"large/$files[$index]\">$lsize[$index] large ($ldim[0]x$ldim[1])</a>";
		}
		echo "</td>";
	
		$col++;
		$index++;
	}
	echo "</tr>";
   $row++;
 }

?>
</table>

<?php require('../footer.php');
