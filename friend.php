<?php include('header.php');?>

<h1>Friend Connect Members List</h1>
<!-- Include the Google Friend Connect javascript library. -->
<script type="text/javascript" src="http://www.google.com/friendconnect/script/friendconnect.js"></script>

<!-- Define the div tag where the gadget will be inserted. -->
<div id="div-1228400049591" style="width:282px;border:1px solid #cccccc;"></div>
<!-- Render the gadget into a div. -->
<script type="text/javascript">
var skin = {};
skin['HEIGHT'] = '385';
skin['BORDER_COLOR'] = '#cccccc';
skin['ENDCAP_BG_COLOR'] = '#000030';
skin['ENDCAP_TEXT_COLOR'] = '#DDDDDD';
skin['ENDCAP_LINK_COLOR'] = '#0000FF';
skin['ALTERNATE_BG_COLOR'] = '#ffffff';
skin['CONTENT_BG_COLOR'] = '#bbbbbb';
skin['CONTENT_LINK_COLOR'] = '#0000FF';
skin['CONTENT_TEXT_COLOR'] = '#222222';
skin['CONTENT_SECONDARY_LINK_COLOR'] = '#7777cc';
skin['CONTENT_SECONDARY_TEXT_COLOR'] = '#EEEEEE';
skin['CONTENT_HEADLINE_COLOR'] = '#333333';
google.friendconnect.container.setParentUrl('/rcc/caving/' /* location of rpc_relay.html and canvas.html */);
google.friendconnect.container.renderMembersGadget( { id: 'div-1228400049591',site: '16779245959702693642'}, skin);
</script>

<h1>Friend Connect Sign-in Gadget</h1>
<!-- Include the Google Friend Connect javascript library. -->
<script type="text/javascript" src="http://www.google.com/friendconnect/script/friendconnect.js"></script>
<!-- Define the div tag where the gadget will be inserted. -->
<div id="div-1228401830486" style="width:282px;border:1px solid #cccccc;"></div>
<!-- Render the gadget into a div. -->
<script type="text/javascript">
var skin = {};
skin['BORDER_COLOR'] = '#44aa44';
skin['ENDCAP_BG_COLOR'] = '#99ff99';
skin['ENDCAP_TEXT_COLOR'] = '#333333';
skin['ENDCAP_LINK_COLOR'] = '#0000cc';
skin['ALTERNATE_BG_COLOR'] = '#bbffbb';
skin['CONTENT_BG_COLOR'] = '#aaffff';
skin['CONTENT_LINK_COLOR'] = '#cc6600';
skin['CONTENT_TEXT_COLOR'] = '#222222';
skin['CONTENT_SECONDARY_LINK_COLOR'] = '#ff6600';
skin['CONTENT_SECONDARY_TEXT_COLOR'] = '#ff6600';
skin['CONTENT_HEADLINE_COLOR'] = '#333333';
skin['ALIGNMENT'] = 'center';
google.friendconnect.container.setParentUrl('/rcc/caving/' /* location of rpc_relay.html and canvas.html */);
google.friendconnect.container.renderSignInGadget( { id: 'div-1228401830486', site: '16779245959702693642'},skin);
      </script>
<?php include('footer.php');?>
