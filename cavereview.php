<?php
require("header.php");
require("caveprofiletop.php");
?>
<div>
<?php require("boundaryoptcp.php"); ?>
<div class="cave_review">
Cave Reviews
</div>
<div class="review_area" style="padding-left:10px;">
<?php
require("mydbcon.php");
$var1=0;
$var2=5;
if(isset($_GET["p1"])&&isset($_GET["p2"]))
{$var1=$_GET["p1"]+5;$var2=$_GET["p2"]+5;}
$count=0;
$chk=mysql_query("SELECT * FROM cavereview WHERE caveid='$cid' LIMIT $var1,$var2");
while($c=@mysql_fetch_array($chk,MYSQL_ASSOC))
{
$count++;
	$review=$c["review"];
	$uid=$c["uid"];
	$chk1=mysql_query("SELECT * FROM sign WHERE uid='$uid'");
	$c1=@mysql_fetch_array($chk1);
	if($c1=="")
	$name="Unknown";
	else
	$name=$c1["fname"];
	
	echo "<br><br><b>".$name."</b> ". "posted: ".$review."<br><br><hr>";
}
if($count==0)
echo "There are no more reviews to show!<br><br>";
?>
<br><a href="cavereview.php?caveid=<?php echo $cid;?>&p1=<?php echo $var1;?>&p2=<?php echo $var2;?>">Show more reviews</a><hr><br>
    <div class="review_form">
       <form action="reviewpost.php" method="post">
          <textarea rows="8" cols="35" name="reviewcont">
          </textarea>
		  <input type="hidden" value="<?php echo $cid; ?>" name="caveid"/>
		  <br>
		  <input type="submit" value="Post your Review">
       </form>
    </div>

</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Reviews .iopt").attr("class","iopt1");
});
</script>
<?php
require("footer.php");
?>