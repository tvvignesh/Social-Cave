<?php
require("header.php");
require("caveprofiletop.php");
?>
<div>
<?php require("boundaryoptcp.php"); ?>
<div class="cave_photos">
Cave Photos
</div>
<script type="text/javascript">
$(document).ready(function()
{
$('#upload').click(function() {
    $('#myform input[type=file]').click();
$('#myform input:file').change(function(){
	if ($(this).val()){
			document.myform.submit();
		}
		});
	});});
</script>
<?php
$var1=0;
$var2=4;
require("mydbcon.php");
$piccount=mysql_query("SELECT COUNT(*) FROM cavedb.cavephotos WHERE caveid='$cid'") or die("<script>alert('OOPS!Unable to fetch data');window.location.assign('index.php');</script>");
$pc=mysql_fetch_array($piccount);
$piccount=$pc[0];
if(isset($_GET["ps"])&&isset($_GET["pe"])){$var1=$_GET["ps"]+1;$var2=$_GET["pe"]+1;}
if($var1>$piccount-1)
{
	$var1-=1;
}
if($var2>$piccount)
$var2=$piccount-1;
$chk=mysql_query("SELECT * FROM cavedb.cavephotos WHERE caveid='$cid' LIMIT $var1,$var2") or die("<script>alert('OOPS!Unable to fetch data');window.location.assign('index.php');</script>");
$count=1;
echo "<div class='photos_area'>";
while($c=@mysql_fetch_array($chk))
{
$url=$c["photourl"];
$uid1=$c["uid"];
$chk23=mysql_query("SELECT * FROM sign WHERE uid='$uid1'");
$c23=@mysql_fetch_array($chk23);
$photographer=$c23["fname"];
if($photographer=="")$photographer="Unknown";
$v1=$var1-2;
$v2=$var2-2;
	switch($count)
	{
		case 1:echo 
		"<div class='main_pic'> 
			<img src='$url' height='350' width='490'>
			<div id='uploadcontain' align='center'>$var1 of $piccount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photographer: <a href='userprofile/index.php?uid=$uid1' style='text-decoration:none;color:red;'>$photographer</a> &nbsp;&nbsp;&nbsp;
			
			
			<a href='cavephotos.php?caveid=$cid&ps=$v1&pe=$v2' style='text-decoration:none;color:white;'><span id='prev'>Previous</span></a>
			|
			
			<a href='cavephotos.php?caveid=$cid&ps=$var1&pe=$var2' style='text-decoration:none;color:white;'><span id='next'>Next</span></a>|<span id='upload'>Upload</span>
			</div></div>";break;
		case 2:$va=$var1;$vb=$var2;
		echo
		"<a href='cavephotos.php?caveid=$cid&ps=$va&pe=$vb'><div class='main_pic_1' id='pic1'>
			<img src='$url' height='150' width='150'>
		</div></a>";break;                                                      
		case 3:$v11=$var1+1;$v22=$var2+1;
		echo
		"<a href='cavephotos.php?caveid=$cid&ps=$v11&pe=$v22'><div class='main_pic_1' id='pic2'>
			<img src='$url' height='150' width='150'>
		</div></a>";break;
		case 4:$v111=$var1+2;$v222=$var2+2;
		echo
		"<a href='cavephotos.php?caveid=$cid&ps=$v111&pe=$v222'><div class='main_pic_1' id='pic3'>
			<img src='$url' height='150' width='150'>
		</div></a>";break;
	}
	$count++;
}
?>
<form id="myform" style="display:none;" name="myform" action="cavepicupload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="cavepic">
	<input type="hidden" name="caveid" value="<?php echo $cid?>" />
</form>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$(".iopt1").attr("class","iopt");
$("#Photos .iopt").attr("class","iopt1");
});
</script>
<?php
require("footer.php");
?>