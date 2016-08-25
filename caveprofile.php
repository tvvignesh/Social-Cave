<?php
require("header.php");
require("caveprofiletop.php");
require("mydbcon.php");
$chk=mysql_query("SELECT * FROM caveinfo WHERE caveid='$cid'");
$c=@mysql_fetch_array($chk);
$place=$c["address"];
?>
<link rel="stylesheet" href="cave.css" />
<div>
<?php require("boundaryoptcp.php"); ?>
<div>
<div class="cavemap">
Cave Map
</div>
<div id='location'><?php echo "<b>Located at</b>: $place";?></div>
<div class="map_pic">
<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $place; ?>&zoom=13&size=500x250&sensor=false" onerror="alert('Sorry! Unable to load the map! Please check your internet connection or reload the page again!');"/>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Map .iopt").attr("class","iopt1");
});
</script>
<?php
require("footer.php");
?>