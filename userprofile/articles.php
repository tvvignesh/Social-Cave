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
echo '
<div id="crcontent">
<div id="head1">Aricles from the Blog</div>
<div class="details">
<br>';
$var=mysql_query("SELECT * from cavedb.articles WHERE uid='$uid' Limit $var1,$var2");
while($c=@mysql_fetch_array($var,MYSQL_ASSOC))
{
echo '
<div class="head2">'.$c["title"].'</div>
'.$c["content"].'
<br>
<br>'
.$c["tarticle"].'
<br>
<br>
<hr color="#dfdfdf" width="650px" height="0.3px">
<br>';
}
?>
<div id="kl"><a href="#">Keep Looking</a></div>
</div>
</div>
</div>
</div>
<?php require("repeatuprof.php"); ?>
<script>
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Articles .iopt").attr("class","iopt1");
});
</script>