<?php include('/home/users/website/rcc/caving/head.php');?>

<script type="text/javascript">
    function displayImage(previmage, prevext, image, ext, nextimage, nextext)
    {
    
      var highlighted = document.getElementsByClassName("highlighted");
      if (highlighted[0] != null)
      {
	highlighted[0].style.border = "none";
	highlighted[0].className =  highlighted[0].className.replace( /(?:^|\s)highlighted(?!\S)/g , '' );
      }
      
      var thumbnail = document.getElementById(image + '.' + ext);
      thumbnail.style.border = "5px solid white";
      thumbnail.className += " highlighted";
      
      var element = document.getElementById('maindisplay');
      element.src = "";
      var imagename = image + '.' + ext;
      element.src = imagename;
      
      var mainlink = document.getElementById('mainlink');
      mainlink.href = image + '--orig.' + ext;
      
      var previous = document.getElementById('prevlink');
      previous.href = '#';
      previous.setAttribute("onclick","return false");
      if (previmage != "" & prevext != "")
      {
          previous.href = document.getElementById(previmage + '.' + prevext).href;
          previous.setAttribute("onclick","");
      }
      
      var next = document.getElementById('nextlink');
      next.href = '#';
      next.setAttribute("onclick","return false");
      if (nextimage != "" & nextext != "")
      {
          next.href = document.getElementById(nextimage + '.' + nextext).href;
          next.setAttribute("onclick","");
      }
     }
}
</script>
<style>
body {
  height:100%;
  overflow: scroll;
}
.prevlink {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
  width: 50%;
  }
.nextlink {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
  width: 50%;
  }
.link-container {
  display: table;
  width: 100%;
}
.maindisplay {
  max-width: 780px;
  max-height: 600px;
}

.image-wrapper {
  height: 600px;
  display: table;
  width: 100%;
}
.image-cell {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}

.r-sidebar {
  float:right;
  width: 185px;
}

.thumb_box {
  height: 150px;
  /*width: 100%;*/
  overflow-y: scroll;
  overflow-x: hidden;
  bottom: 5px;
  /*position: absolute;8/
}

</style
</head>

<?php include('/home/users/website/rcc/caving/begin.php');?>

<?php 

echo '<div class="image-wrapper"><div class="image-cell"><a id="mainlink"><img class="maindisplay" id="maindisplay" alt="Click thumbnails below to see image. Click image to get original"></a></div></div>' . "\n";

echo '<div class="link-container">' . "\n";
echo '<div class="prevlink"><a id="prevlink">Previous</a></div>' . "\n";
echo '<div class="nextlink" ><a id="nextlink">Next</a></div><br>' . "\n";
echo '<div style="clear: both;"></div>' . "\n";
echo '</div>' . "\n";

echo '<div class="thumb_box">' . "\n";

$files = array();

foreach (scandir('.') as $file)
{
    $file_parts = pathinfo($file);
    if (strcasecmp($file_parts['extension'], 'gif') == 0 || strcasecmp($file_parts['extension'], 'jpg') == 0 ||strcasecmp($file_parts['extension'], 'png') == 0)
    {
        if (strpos($file, '--thumb') == false and strpos($file, '--orig') == false)
        {
            $files[] = $file;
        }
    }
}

$prev_file_parts = null;

foreach ($files as $key=>$file) {
    if ( ($key - 1) >= 0)
    {
        $prev_file_parts = pathinfo($files[$key - 1]);
    }
    if ( ($key + 1) <= count($files))
    {
        $next_file_parts = pathinfo($files[$key + 1]);
    }
    $file_parts = pathinfo($file);

    echo '<a id=' . $file_parts['filename'] . '.' . $file_parts['extension'] . ' href="javascript:displayImage(&quot;' . $prev_file_parts['filename'] . '&quot;,&quot;' . $prev_file_parts['extension'] . '&quot;,&quot;' . $file_parts['filename'] . '&quot;,&quot;' . $file_parts['extension'] . '&quot;,&quot;' . $next_file_parts['filename'] . '&quot;,&quot;' . $next_file_parts['extension'] . '&quot;)">' . "\n";
    echo '<img id="image-' . $file_parts['filename'] . '.' . $file_parts['extension'] . '" src="' . $file_parts['filename'] . '--thumb.' . $file_parts['extension'] . '"></a>' . "\n";
    
    $next_file_parts = null;
}

$prev_file_parts = null;
$next_file_parts = null;
$file_parts = pathinfo($files[0]);
if ( ($key + 1) <= count($files))
{
    $next_file_parts = pathinfo($files[$key + 1]);
}

echo '</div>' . "\n";

include('/home/users/website/rcc/caving/end.php');

echo '<div class="r-sidebar">';

begintextbox("Directories");

echo '<div class="dirlist">' . "\n";
foreach (scandir('.') as $file)
{
    $file_parts = pathinfo($file);
    if(is_dir($file) and $file != ".")
    {
        echo "<a href=$file/>$file</a>";
        echo "<br>" . "\n";
    }
}   
echo '</div>' . "\n";
endtextbox();
echo '</div>' . "\n";

include('/home/users/website/rcc/caving/foot.php');
?>