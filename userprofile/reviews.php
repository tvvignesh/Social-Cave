<?php
require('mydbcon.php');
$uid=$_GET["uid"];
echo '<div id="caveranks">';
$var1=0;
$var2=2;
if(isset($_GET["start"])&&isset($_GET["end"]))
{
$var1=$_GET["start"]+2;
$var2=$_GET["end"]+2;
}
echo '<div id="crcontent">
<div id="head1">Cave Reviews</div>
<div class="details">';
$var=mysql_query("SELECT * from cavedb.cavereview WHERE uid='$uid' Limit $var1,$var2");
while($c=@mysql_fetch_array($var,MYSQL_ASSOC))
{
$cave=$c["caveid"];
$var2=mysql_query("SELECT * from cavedb.caveinfo WHERE caveid='$cave'");
$d=@mysql_fetch_array($var2,MYSQL_ASSOC);
echo '
<br>
<div class="head2">'.$d["cavename"].'</div>'
.$c["review"].
'<br>
<br>
Submitted on '.$c["treview"].
'<br>
<br>
<hr color="#dfdfdf" width="650px" height="0.3px">
<br>';
}
echo '</div>
<div id="kl"><a href="index.php?uid='.$uid.'&start=$var1&end=$var2&page=reviews">Keep Looking</a></div>
</div>
</div>
</div>
</div>';?>
<?php require("repeatuprof.php"); ?>
<script>
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Reviews .iopt").attr("class","iopt1");
});
</script>