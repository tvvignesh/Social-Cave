<div id="caveranks">
<div id="crcontent">
<div id="head1">Cave Photos</div>
<div class="details">
<?php
require("mydbcon.php");
$uid=$_GET["uid"];
$var1=0;
$var2=2;
if(isset($_GET["start"])&&isset($_GET["end"]))
{
$var1=$_GET["start"]+2;
$var2=$_GET["end"]+2;
}
$var=mysql_query("SELECT * from cavedb.cavephotos WHERE uid='$uid' Limit $var1,$var2");
while($c=@mysql_fetch_array($var,MYSQL_ASSOC))
{
echo '
<br>
<div id="entry">
<div id="pic">
<img src="../'.$c["photourl"].'" width="420px" height="280px">
</div>
<div class="desc">';
$cave=$c["caveid"];
$var2=mysql_query("SELECT * from cavedb.caveinfo WHERE caveid='$cave'");
$d=@mysql_fetch_array($var2,MYSQL_ASSOC);
echo '<div class="head2">'.$d["cavename"].'</div>
<br>
Submitted on'.$c["time"].'
</div>
</div>
<br>
<hr color="#dfdfdf" width="650px" height="0.3px">';
}
echo '
<div id="kl"><a href="index.php?uid='.$uid.'&page=photos&start=$var1&end=$var2">Keep Looking</a></div>';
?>
</div>
</div>
</div>
</div>
<?php require("repeatuprof.php"); ?>
<script>
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Photos .iopt").attr("class","iopt1");
});
</script>