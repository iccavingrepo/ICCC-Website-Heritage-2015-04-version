<?php require('../header.php'); ?>

 <style>
A:link {color: #40B080; }
A.menu:link {color: #40B080; }
TD.titlemenu { background-color : #106040 }
TD.menu {background-color : #021208 }
</style>

<h2>Yorkshire June 2002</h2>

Copyright owners are listed below each picture.

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
			$owner = str_replace("_", " ", $chunks[1]);
			$picname = str_replace("_", " ", $chunks[0]);
			echo "<img src=\"thumbnails/$files[$index]\"></img><br>";
			echo $picname, "<br>";
			echo "<i>", $owner, "</i><br>";
			$mdim = GetImageSize("medium/$files[$index]");
			echo "<a href=\"medium/$files[$index]\">$msize[$index] medium ($mdim[0]x$mdim[1])</a><br>";
			$ldim = GetImageSize("large/$files[$index]");
			echo "<a href=\"large/$files[$index]\">$lsize[$index] large ($ldim[0]x$ldim[1])</a>";
			echo "\n";
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
