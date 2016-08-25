<?php
$vid=$_GET["vid"];
$uid=$_GET["uid"];
require("mydbcon.php");
$chk1=mysql_query("SELECT * FROM cavedb.sign WHERE uid='$uid'") or die("OOPS! Unable to update the database! Contact the web admin!");
$c=@mysql_fetch_array($chk1);
if($c["verifycode"]==$vid)
{
	$chk=mysql_query("UPDATE cavedb.sign SET flag='1' WHERE uid='$uid'") or die("OOPS! Unable to update the database! Contact the web admin!");
	echo "
	<script>
		alert('Verification successful!');window.location.assign('index.php');
	</script>
	";
}
else
{
	echo "
	<script>
		alert('Verification Unsuccessful! Try clicking the link again!');window.location.assign('index.php');
	</script>
	";
}
?>