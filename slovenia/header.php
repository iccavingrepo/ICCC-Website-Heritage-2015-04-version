<?php require('../../mainheader.php');?> <style>  A:link {color: #40B080; }  A.menu:link {color: #40B080; }  TD.titlemenu { background-color : #106040 }  TD.menu {background-color : #021208 }</style>   <table border="0" cellspacing="3" cellpadding="3" width="100%"> <tr> <td valign="top" width="180"> <center><img src="/caving/slovenia/miglogo.png"></center><br> <img src="/caving/spacer.png"></img><br>  

<center><a href="/caving/index.php"><strong>Back to ICCC...</strong></a>
</center>
<center><img src="/caving/iccc-email.gif"></center>

<br>
<?php begintextbox("General");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/report/caves.php"><b>The Caves of Migovec</b></a> <br>
<a class="menu" href="/caving/slovenia/intro/slov_intro.php">Slovenia Introduction</a> <br>
<a class="menu" href="/caving/slovenia/MigSurveyData">Survey Repositiory</a> <br>
<a class="menu" href="https://github.com/jarvist/migovecsurveydata">GitHub</a> <br>
<a class="menu" href="http://migovec.wordpress.com/">Migovec Blog</a>
<?php endtextbox();?>

<?php begintextbox("Random Slovenia Photo");?>
<p class="menu">
<?php
$fp=fopen("/home/www/htdocs/rcc/caving/slovenia/photorand/basemax","r");
$picmax=fgets($fp);
fclose($fp);

list($picmaxn)=sscanf($picmax,"%d");
$pic=rand(1,$picmaxn);

echo '#',$pic,'/',$picmax,'<br>';

$fp = fopen ("/home/www/htdocs/rcc/caving/slovenia/photorand/base.db","r");
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
?>
<!--  <br>
  <a class="menu" href="/caving/photorand.php">More Randomness</a>
  <br>-->
  <br><b><a class="menu" href="/caving/photo_archive/slovenia">All Slovenia Photos</a></b>
</p>
<?php endtextbox();?>

<?php begintextbox("Z Miga na Kuk 2013");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2013/">Z Miga na Kuk 2013</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2013/">2013 Photos</a><br>
</p>
<?php endtextbox();?>


<?php begintextbox("Sledi Vetra 2012");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2012/">Sledi Vetra 2012</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2012/">2012 Photos</a><br>
</p>
<?php endtextbox();?>

<?php begintextbox("Izgubljeni Raj 2011");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2011/">Izgubljeni Raj 2011</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2011/">2011 Photos</a><br>
<a class="menu" href="/caving/slovenia/slov2011/tweets_2011.php">2011 Tweets</a></br>
</p>
<?php endtextbox();?>

<?php begintextbox("Vodna Sled 2010");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2010/">Vodna Sled 2010</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2010/">2010 Photos</a><br>
<a class="menu" href="/caving/slovenia/slov2010/tweets_2010.php">2010 Tweets</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2009-12-Recce/">Winter Recce Photos</a><br>
</p>
<?php endtextbox();?>


<?php begintextbox("Brezzvezdna No&#269; 2009");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2009/">Brezzvezdna No&#269; 2009</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2009">2009 Photos</a><br>
<a class="menu" href="/caving/slovenia/slov2009/tweets_2009.php">2009 Tweets</a><br>
</p>
<?php endtextbox();?>

<?php begintextbox("Votla Gora 2008");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2008/">Votla Gora 2008</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2008">2008 Photos</a><br>
<a class="menu" href="/caving/slovenia/slov2008/tweets_2008.php">2008 Tweets</a><br>
</p>
<?php endtextbox();?>

<?php begintextbox("Slovenia 2007");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2007/">2007 Writeup</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2007/dirindex.html">2007 Photos</a><br>
<a class="menu" href="/caving/slovenia/slov2007/Migovec_2007_student_prospectus.pdf">Student Prospectus</a><br>
</p>
<?php endtextbox();?>

<?php begintextbox("Slovenia Recce 2006");?>
<p class="menu">
<a class="menu" href="/caving/wiki/index.php?n=Main.OneBoyAndHisJammer">Incomplete Writeup</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2006-Yossarian/dirindex.html">Photos</a>
</p>
<?php endtextbox();?>

<?php begintextbox("Slovenia 2005");?>
<p class="menu">
<a class="menu" href="/caving/slovenia/slov2005/GW2005_20051220cdr.pdf">2005 GW Survey</a><br>
    <a class="menu" href="/caving/slovenia/slov2005/slov2005-prospectus.php">Prospectus</a><br>
<a class="menu" href="/caving/slovenia/slov2005/updates.php">Expedition Updates</a>
<a class="menu" href="/caving/photo_archive/slovenia/2005/dirindex.html">Photos</a>

</p>    
<?php endtextbox();?>

<?php begintextbox("Slovenia 2004");?>  
  <p class="menu"> 
    <a class="menu" href="/caving/slovenia/slov2004/slov2004.php">Expedition Updates</a><br>
    <a class="menu" href="/caving/slovenia/slov2004/felix_2004.php">Felix Article</a><br>
    <a class="menu" href="/caving/slovenia/slov2004/GW2004_20040919.pdf">2004 GW Survey</a><br>
    <a class="menu" href="/caving/photo_archive/slovenia/2004/">Photos</a><br>
  </p> 
<?php endtextbox();?> 

<?php begintextbox("Slovenia 2003");?>  
  <p class="menu">        
    <a class="menu" href="/caving/slovenia/slov2003/slov2003.php">Expedition Findings</a>     <br>        
    <a class="menu" href="/caving/slovenia/slov2003/slov03felix.php">Felix Article</a>     <br>        
    <a class="menu" href="/caving/slovenia/slov2003/surveys2003.php">Surveys</a>     <br>        
  <a class="menu" href="/caving/photo_archive/slovenia/2003/">Photos</a><br>
  </p> 
<?php endtextbox();?> 

<?php begintextbox("Slovenia 2001");?>  
  <p class="menu">       
    <a class="menu" href="/caving/slovenia/slov2001/slov2001.php"  > Expedition Findings </a>     <br>       
    <a class="menu" href="/caving/slovenia/slov2001/survey.php"> Surveys </a>     <br>	
  <a class="menu" href="/caving/photo_archive/slovenia/2001/">Photos</a><br>
  </p> 
<?php endtextbox();?> 

<?php begintextbox("Slovenia 2000");?>  
  <p class="menu">        
    <a class="menu" href="/caving/slovenia/slov2000/slov2000.php"  >Expedition Findings </a><br>        
<a class="menu" href="/caving/slovenia/slov2000/2000_slov_report.pdf">2000 Report</a><br>
<a class="menu" href="/caving/slovenia/slov2000/2000_slov_felix_article.pdf">2000 Felix Article</a><br>
<a class="menu" href="/caving/slovenia/slov2000/Leads00/">Leads in 2000</a><br>
<a class="menu" href="/caving/slovenia/slov2001/Migovec2000.pdf"> M18 Survey </a><br>   
<a class="menu" href="/caving/slovenia/slov2000/migovec2000.zip">Survey Originals</a><br>
<a class="menu" href="/caving/photo_archive/slovenia/2000/">Photos</a><br>
</p> 
<?php endtextbox();?> 

<?php begintextbox("Early History");?>  <!--<p class="menu">-->  
<p class="menu">
<a class="menu" href="/caving/slovenia/slov_cookbook.pdf">Cookbook</a><br>
<a class="menu" href="/caving/slovenia/1998_scuz_diary.pdf">Scuz's 1998 Diary</a><br>
<a class="menu" href="/caving/slovenia/1998_slov_report.pdf">1998 Report</a><br>
<a class="menu" href="/caving/slovenia/1999_slov_report.pdf">1999 Report</a><br>
<a class="menu" href="/caving/slovenia/1997_slov_report.pdf">1997 Report</a><br>
    <a class="menu" href="/caving/slovenia/report/BirthOfExpedition.php"><b>Birth of Expedition</b></a>     
<br>
    <a class="menu" href="/caving/slovenia/report/1994.php">1994 Expo</a> 
<br>   
    <a class="menu" href="/caving/slovenia/report/1995recce.php" >1995 winter recce</a>
<br>
    <a class="menu" href="/caving/slovenia/report/1995.php" >1995</a>            
</p> 
<?php endtextbox();?>     

<?php begintextbox("Links");?>  <!--<p class="menu">-->  
  <p> 
    <a class="menu" href="http://www.jamarska-zveza.si/eng/first.html" target="_blank">
      <center>Speleological Association of Slovenia</center></a>
  </p>
<?php endtextbox();?>     

<td valign="top" width="100%"> 
<h1>Tolminski Migovec Cave Exploration</h1>  

<!--<h2>2011 Dates: Fri 15th July 2011 -- Sun 15th August (4 weeks)</h2>-->
<h1>SLOVENIA</h1> 
