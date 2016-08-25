<?php
$cid=$_GET["caveid"];
if(isset($_COOKIE["login"]))
{
$uid=$_COOKIE["login"];
}
else
{
die("
<script>
alert('Please Login to access this feature!');
window.location.assign('index.php');
</script>
");
}
require("mydbcon.php");
$d1=date("Y-m-d");
$chk=mysql_query("SELECT DATEDIFF(timevisit,'$d1') FROM uservisits WHERE userid='$uid' AND caveid='$cid' AND DATE(timevisit)='$d1'");
$c=@mysql_fetch_array($chk);
if($c!=""&&$c[0]==0)
{
die("
<script>
alert('You can press visited button only once in a day!');window.location.assign('caveprofile.php?caveid=".$cid."');
</script>
");
}
$chk1=mysql_query("SELECT * FROM uservisits WHERE caveid='$cid' AND userid='$uid'");
$c1=@mysql_fetch_array($chk1);
if($c1=="")
{
mysql_query("INSERT INTO rank (uid,caveid,urank) VALUES ('$uid','$cid','1')") or die("OOPS! An error occured in insertion of data!");
}
else
{
	$num_rows = mysql_num_rows($chk1);
	if($num_rows==5)
	{
		mysql_query("INSERT INTO rank (uid,caveid,urank) VALUES ('$uid','$cid','2')") or die("OOPS! An error occured in insertion of data!");
	}
}
mysql_query("INSERT INTO uservisits (caveid,userid) VALUES ('$cid','$uid')") or die("OOPS! An error occured!".mysql_error());
echo
"
<script>
window.location.assign('caveprofile.php?caveid=".$cid."');
</script>
";
?>