<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php
$cookie_name = "legacy";
$cookie_value = "true";
?>
<?php if ($_COOKIE[$cookie_name] == $cookie_value): ?>
<?php include "legacy/header.php";?>
<?php else: ?>

<?php if ($_COOKIE["tangif"] == "true"): ?>
<style>
body{
  background-image: url("/caving/tangif.gif");
}
</style>
<?php endif; ?>

<head>
  <meta http-equiv="Content-Type" Content="text/html">
  <meta charset="utf-8">
  <meta Name="Generator" Content="Hand Coded">
  <link rel="stylesheet" type="text/css" media="print" href="/caving/print.css" title="style">
  <link rel="stylesheet" type="text/css" media="screen, projection" href="/caving/caving.css" title="style">
  <link rel="shortcut icon" href="http://www.union.ic.ac.uk/rcc/caving/favicon.ico" />

<!--Google Analytics Tracking-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80065-2', 'auto');
  ga('send', 'pageview');
</script>

<!--
  <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
  </script>
  <script type="text/javascript">
    _uacct = "UA-80065-2";
    urchinTracker();
  </script>
-->
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
    {lang: 'en-GB'}
  </script>
  <title>Imperial College Caving Club [ICCC]</title>
</head>


 <body>

 <?php
  function begintextdatelinkbox($title, $url, $right)
 {
    echo '<div class="content-box">
          <a href ="';
    echo  $url;
    echo  '"><h2 class="content-header-left">';
    echo $title;
    echo '</h2></a>
          <h2 class="content-header-right">';
    echo $right;
    echo '</h2>
          <div style="clear: both;"></div>
          <div class="content">';

  }
  function begintextdatebox($title, $right)
 {
    echo '<div class="content-box">
          <h2 class="content-header-left">';
    echo $title;
    echo '</h2>
          <h2 class="content-header-right">';
    echo $right;
    echo '</h2>
          <div style="clear: both;"></div>
          <div class="content">';

  }

  function begintextbox($title)
 {
    echo '<div class="content-box">
          <h2 class="content-header-center">';
    echo $title;
    echo '</h2>
          <div class="content">';

  }

  function beginredbox($title)
 {
    echo '<div class="content-box">
          <h2 class="content-header-center">';
    echo $title;
    echo '</h2>
          <div class="content">';

  }



 function endredbox()
 {
   echo '</div></div>',"\n";
 }

 function endtextbox()
 {
   echo '</div></div>',"\n";
 }

  function endtextdatebox()
 {
   echo '</div></div>',"\n";
 }

   function endtextdatelinkbox()
 {
   echo '</div></div>',"\n";
 }

 ?>

<script type="text/javascript">
    function toggleMenu()
    {
      var element = document.getElementById('menu');
      if(element.className == "menu-visible"){
        element.className = "menu-hidden";
      } else if (element.className == "menu-hidden") {
        element.className = "menu-visible";
     }
   }
</script>

<script type="text/javascript">
      window.onresize = function() {
        var element = document.getElementById('menu');
        if(element.className == "menu-visible"){
          element.className = "menu-hidden";
        }
      }
</script>

<div class="container">

<div class="left-col">
<div class="sidebar">
<?php include "menu.php";?>
</div>
</div>

<div class="centre-col">

<p class="menu" style="text-align:right">
<a class="menu" href="https://plus.google.com/u/0/b/114742080073184112874/"  rel="publisher"><b>G+</b></a>
&nbsp;|&nbsp;
<a class="menu" href="http://twitter.com/iccc"><b>Twitter @ICCC</b></a>
&nbsp;|&nbsp;
<a class="menu" href="http://www.facebook.com/pages/London-United-Kingdom/Imperial-College-Caving-Club-ICCC/173461250075"><b>Facebook</b></a>
&nbsp;|&nbsp;
<a class="menu" href="https://mailman.ic.ac.uk/mailman/listinfo/icu-caving-announce"><b>Mailing List</b></a>
&nbsp;|&nbsp;
<img src="/caving/iccc-email.gif">
</p>

<span style="min-height: 50px;">
<a align="left" style="display: inline-block; height: 0px;" href="javascript:toggleMenu()"><img class="menu-button" src="/caving/menu.png"></a>
<h1 align="right" style="margin-top: 0px; margin-bottom: 5px;">Imperial College Caving Club</h1>
</span>

<div class="menu-hidden" id="menu">
<?php include "menu.php";?>
</div>

<div class="main-content-box">

<?php endif; ?>
