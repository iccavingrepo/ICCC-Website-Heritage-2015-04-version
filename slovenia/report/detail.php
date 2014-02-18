<?php require('../header.php'); ?>

<?php require('cavedata.php'); ?>

<?php

echo '<h2>',strtr($cavename, "_", " "),'</h2>';
echo 'Location: ';
printlocation($cavename);
echo '<ul>';

if(file_exists("$cavename.3dz"))
{
  echo "<li><a href=\"3dview.php?cavename=$cavename\">3D View</a></li>";
}
if(file_exists("$cavename.form.pdf") || file_exists("$cavename.form.html") )
{
  echo "<li>Cave survey form (description, access, rigging etc.)</li>\n";
  echo "<ul>\n";
  if(file_exists("$cavename.form.html"))  echo "<li><a href=\"$cavename.form.html\">HTML form (for web viewing)</a>\n";
  if(file_exists("$cavename.form.pdf"))  echo "<li><a href=\"$cavename.form.pdf\">PDF form (for printing)</a>\n";
  echo "</ul>\n";
}
if(file_exists("$cavename.survey.en.pdf")) 
{
  echo '<li>Drawn survey';
  echo '<ul>';
  echo "<li><a href=\"$cavename.survey.en.pdf\">PDF survey (for printing) [english]</a></li>";
  if(file_exists("$cavename.survey.si.pdf")) echo "<li><a href=\"$cavename.survey.si.pdf\">PDF survey (for printing) [slovene]</a></li>"; 
  echo '</ul>';
  echo '</li>';
}
echo '</ul>';

if(file_exists("$cavename.survey.en.png"))
{
  $imgsize=getimagesize("$cavename.survey.en.png");
  echo "<img src=\"$cavename.survey.en.png\" width=\"{$imgsize[0]}\" height=\"{$imgsize[1]}\"></img>";
}

?>


<?php require('../../footer.php'); ?>