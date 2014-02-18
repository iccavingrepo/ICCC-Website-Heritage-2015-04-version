<?php require('../header.php');?>

<h1>Caverot applet</h1>
Here's the caverot applet in action:<br>

<applet code="caverot.class" archive="/caving/caverot/caverot.jar" name="caverot" width="300" height="300">
<param name="cave" value="http://union.ic.ac.uk/caving/report/Gardeners_World.3dz">
</applet>

<br>
To get this working, you need  
<ol>
 <li>the java program <a href="caverot.jar">caverot.jar</a>
 <li>some html to tell the browser about the applet:
 <pre>
&lt;applet code="caverot.class" archive="/caving/caverot/caverot.jar"
           name="caverot" width="300" height="300">
&lt;param name="cave" value="http://www.yoursite.co.uk/cavefile.3dz">
&lt;/applet>
 </pre>
 Change the <tt>archive=</tt> entry to point to the program on your web server. Change the <tt>value=</tt> parameter
 to point to your cave file.
<li>Note that the cave data file must be a full URL - not relative! Caught me out, Jarv 2008.

<li>A cave data file in .3dz format. This is a gzip compressed text file containing a series of move/draw
 commands. Here's an example
 <pre>
0   0   0   0
1   -154   61   -73
0   0   0   0
1   100   72   640
1   192   341   944
1   192   341   523
0   192   341   944
1   192   341   1384
1   557   607   1712
1   580   882   1841
1   525   1226   1903
1   701   1138   2694
1   967   1166   2889
1   993   1327   2900
-1 -154 0 -73
-1 993 1327 2900
 </pre>
 The first column is a command: 0 is move, 1 is draw. The next three are x,y,z in cm. The last two lines
 are 
 <pre>
-1 xmin  ymin zmin
-1 xmax ymax zmax 
</pre>
Here's a small tool for converting survex <tt>.3d</tt> files <a href="3d2text.c">3d2text.c</a>
Compile it in with the survex source tree with something like
<pre>
gcc -o 3d2text 3d2text.c img.o useful.o message.o filename.o osdepend.o
</pre>
<i>With survex 1.0.32; Jarvist found the following to work:-</i><br>
<pre>
gcc -o 3d2text 3d2text.c img.o useful.o message.o filename.o osdepend.o cmdline.o -lm
</pre>

Run it with
<pre>
./3d2text cave.3d | gzip > cave.3dz
</pre>
</ol>
<hr>
That's it.<br>
If you're using windows, you'll need to get hold of gzip from <a href="http://www.gzip.org">http://www.gzip.org</a><br>
The source to the applet is <a href="caverot.java">here</a><br>
If you have any questions, you can mail me on <a href="mailto:clewingriffith@yahoo.com">clewingriffith@yahoo.com</a>

<?php require('../footer.php');?>
