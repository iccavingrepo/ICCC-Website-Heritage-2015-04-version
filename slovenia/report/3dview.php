<?php require('../header.php'); ?>


<?php

echo '<h2>',strtr($cavename, "_", " "),'</h2>';
echo '3d View (Java required)<br><br>',"\n";
echo '<applet code="caverot.class" archive="/caving/caverot/caverot.jar" name="caverot" width="300" height="300">',"\n";
echo '<param name="cave" value="http://www.union.ic.ac.uk/caving/slovenia/report/',"$cavename.3dz",'">',"\n";
echo '</applet>',"\n";

?>


<?php require('../../footer.php'); ?>

