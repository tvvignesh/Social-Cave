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
<div class="cave_facilities">
Cave Facilities
</div>
<style type="text/css">
td:nth-child(even)
{
padding-right:70px;
}
</style>
<div class="facilities_area">
<?php
	$chk=mysql_query("SELECT * FROM caveinfo WHERE caveid='$cid'") or die("OOPS! Unable to fetch the data from the database!");
	$c=@mysql_fetch_array($chk);
	global $count;
	$count=0;
	function trprint()
	{
		if($GLOBALS["count"]%2==0)echo "</tr><tr>";
	}
	echo '<table id="tb1"  ><tr>';
	if($c["ac"]==1)
	{
	echo '<td  style="padding-right:15px; padding-bottom:15px; "> <img src="Air Conditioner.jpg" /></td><td style="padding-bottom:15px;">Air Conditioner</td>';$count++;trprint();
	}
	if($c["music"]==1)
	{
	echo '<td style="padding-right:15px; padding-bottom:15px;"><img src="Music.jpg" /></td><td style="padding-bottom:15px;">Music</td>';$count++;trprint();
	}
	if($c["bar"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Bar.jpg" /></td><td style="padding-bottom:15px;">Bar</td>';$count++;trprint();
	}
	if($c["buffet"]==1)
	{
	echo '<td style="padding-bottom:15px;"><img src="Buffet.jpg" /></td><td style="padding-bottom:15px;">Buffet</td>';$count++;trprint();
	}
	if($c["cards"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Cards Accepted.jpg" /></td><td style="padding-bottom:15px;">Cards Accepted</td>';$count++;trprint();
	}
	if($c["delivery"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img id="HDimg" src="Home Delivery.jpg" /></td><td style="padding-bottom:15px;">Home Delivery</td>';$count++;trprint();
	}
	if($c["music"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Bar.jpg" /></td><td style="padding-bottom:15px;">Bar</td>';$count++;trprint();
	}
	if($c["seating"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Outdoor Seating.jpg" /></td><td style="padding-bottom:15px;">Outdoor Seating</td>';$count++;trprint();
	}
	if($c["vegetarian"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Pure Vegetarian.jpg" />/td><td style="padding-bottom:15px;">Pure Vegetarian</td>';$count++;trprint();
	}
	if($c["smoking"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Smoking Allowed.jpg" /></td><td style="padding-bottom:15px;">Smoking Allowed</td>';$count++;trprint();
	}
	if($c["wifi"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Wifi.jpg" /></td><td style="padding-bottom:15px;">Wifi</td>';$count++;trprint();
	}
	if($c["dance"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Dance Floor.jpg" /></td><td style="padding-bottom:15px;">Dance Floor</td>';$count++;trprint();
	}
	if($c["dinein"]==1)
	{
	echo '<td style=" padding-bottom:15px;"><img src="Snacks Available.jpg" /></td><td style="padding-bottom:15px;">Snacks Available</td>';$count++;trprint();
	}
	echo "</table>";
?>
</div>
<script type="text/javascript">
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Facilities .iopt").attr("class","iopt1");
});
</script>
<?php
require("footer.php");
?>