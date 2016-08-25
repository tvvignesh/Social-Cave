<?php
require("mydbcon.php");
$uid=$_GET["uid"];
echo '
<div id="caveranks">
<div id="crcontent">
<div id="head1">Cave Ranks</div>
<div class="details">
';
$var1=0;
$var2=4;
if(isset($_GET["start"])&&isset($_GET["end"]))
{
$var1=$_GET["start"]+4;
$var2=$_GET["end"]+4;
}
$var=mysql_query("SELECT * from cavedb.rank WHERE uid='$uid' Limit $var1,$var2");
while($c=@mysql_fetch_array($var,MYSQL_ASSOC))
{
$a=$c["uid"];
echo '
<br>
Became a ';
switch($c["urank"])
{
case 1:echo "'Cave Wanderer'"; break;
case 2:echo "'Cave Lover'";break;
case 3:echo "'Cave Addict'";break;
case 4:echo "'Cave Monarch'";break;
}
$cave=$c["caveid"];
//echo $cave;
$var2=mysql_query("SELECT * from cavedb.caveinfo WHERE caveid='$cave'");
$d=@mysql_fetch_array($var2,MYSQL_ASSOC);
$cave=$d["cavename"];
//echo $cave;
echo ' at <a href="../caveprofile.php?caveid='.$d["caveid"].'">'.$cave.'</a>
<span class="timestamp">. - '.$c["trank"].'</span>
<a href="http://twitter.com/home?status=http://www.thesocialcave.com/caveprofile.php?caveid=$cave" target="_blank"><img src="images\twtlogo.png" class="social"></a>
<a href="http://www.facebook.com/sharer.php?u=http://www.thesocialcave.com/caveprofile.php?caveid=$cave" title="Share on Facebook..." target="_blank"><img src="images\fblogo.png" class="social"></a>
<br>
<br>';
}

echo '
<div id="kl"><a href="index.php?uid='.$uid.'&start=$var1&end=$var2&page=ranks">Keep Looking</a></div>';
?>
</div>
</div>
</div>
</div>
<?php require("repeatuprof.php"); ?>
<script>
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Ranks .iopt").attr("class","iopt1");
});
</script>