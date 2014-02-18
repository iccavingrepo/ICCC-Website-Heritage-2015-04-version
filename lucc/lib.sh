cat header.php

for i in *.pdf
do

 echo "<?php begintextdatebox(\"\",\"${i}\");?>"
 echo "<table border=\"0\"><tr><td>"
echo -n "<a href=\"/caving/lib/"
 echo -n "${i}\">"

#convert "${i}[0]" -resize 150 "${i}.jpg"
 echo -n "<img align=left src=\"${i}.jpg\"></a>"
echo "</td><td>"
 
echo -n "<p><a href=\"/caving/lib/"
 echo -n "${i}\">${i}</a>" #Add Link to filename of PDF
echo "<pre>"
cat "${i}.con" #spurt out text file (.con) of table of contents
echo "</pre></p>"
echo "</td></tr></table>"
echo "<?php endtextdatebox();?>"
 echo

done

echo "<?php require('../footer.php');?>"
