<?php
require("mydbcon.php");
$cid=$_GET["caveid"];
if(!isset($_COOKIE["login"]))
{
die("<script>alert('OOPS! You must be logged in to post reviews! Please Login!');window.location.assign('index.php');</script>");
}
$uid=$_COOKIE["login"];
$chk=mysql_query("SELECT * FROM favourites WHERE caveid='$cid' AND uid='$uid'") or die("OOPS! Some error occured!");
$c=@mysql_fetch_array($chk);
if($c=="")
{
mysql_query("INSERT INTO favourites (caveid,uid) VALUES ('$cid','$uid')");
echo "
<script>
alert('The page has been successfully added to your favourites');window.location.assign('caveprofile.php?caveid=".$cid."');
</script>
";
}
else
{
mysql_query("DELETE FROM favourites WHERE caveid='$cid' AND uid='$uid'");
echo "
<script>
alert('The page has been successfully removed from your favourites');window.location.assign('caveprofile.php?caveid=".$cid."');
</script>
";
}
?>