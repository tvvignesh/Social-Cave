<style type="text/css">
ul li
{
margin-left:47px;
}
li
{
list-style-image:url('images/heart.png');
}
</style>
<?php
require("mydbcon.php");
$uid=$_GET["uid"];
echo '
<div id="caveranks">
<div id="crcontent">
<div id="head1">Favourite Caves</div>
<div class="details"></div>
<br><ul>';
$var=mysql_query("SELECT * from cavedb.favs WHERE uid='$uid' Limit 0,5");
while($c=@mysql_fetch_array($var,MYSQL_ASSOC))
{
$cave=$c["caveid"];
$var2=mysql_query("SELECT * from cavedb.caveinfo WHERE caveid='$cave'");
$d=@mysql_fetch_array($var2,MYSQL_ASSOC);
$cave=$d["cavename"];
echo '<li><a href="../caveprofile.php?caveid='.$d["caveid"].'">'.$cave.'</a>. -'.$c["tfav"];
}
?>
<div id="kl"><a href="#">Keep Looking</a></div>
</div>
</div>
</div>
<?php require("repeatuprof.php"); ?>
<script>
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Favourites .iopt").attr("class","iopt1");
});
</script>