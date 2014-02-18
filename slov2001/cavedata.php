 <?php 
 
 function printlocation($survey)
 {
   $fp = fopen ("cavedata","r");
   while ($dataline = fgetcsv($fp, 1000, "\t")) {
     list ($name, $x, $y) = $dataline;
     if($name==$survey)
	  {
	    echo $x[0],$x[1],$x[2],$x[3],' ',$x[4],$x[5];
		 echo ' , ';
	    echo $y[0],$y[1],$y[2],$y[3],' ',$y[4],$y[5];
	  	}
 }
 fclose($fp); 
 }
 
 ?>
 