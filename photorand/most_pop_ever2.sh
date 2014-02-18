#!/bin/sh

cat tmp.dat | sort | uniq -c | sort -nr > popular_photos.txt

echo "<?php require(\"header.php\") ?>"
echo "<h2>20 Most Popular Photos, last few days [ish].</h2>"
echo "<h2>Between: " 
head -n1 /var/log/apache/access.log | cut -f5 -d\  | sed "s/\[//"
echo "</h2>"
echo "<h2>And: "
date +%d/%b/%Y:%X
echo "</h2>"

echo "<h3>Descending order of popularity...</h3>"

for line in ` head -n 500 popular_photos.txt | sed "s/\ \//*\//" `
do
 photo=` echo $line | cut -f2 -d\* `
 pop=` echo $line | cut -f1 -d\* `
 thumb=` echo $photo | sed s/\.jpg/--thumb\.jpg/ | sed s/\.JPG/--thumb.jpg/ `

 echo "<h3>${pop} Impressions: </h3"
 echo "<a href=\"${photo}\"> <img src=\"${thumb}\"></a><br><br>"
done

echo "<?php require(\"footer.php\") ?>"

