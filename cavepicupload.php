<?php
$cid=$_POST["caveid"];
if(!isset($_COOKIE["login"]))die("<script>alert('You must Login to access this feature');window.location.assign('index.php');</script>");
$uid=$_COOKIE["login"];
if ($_FILES["cavepic"]["error"] > 0)
  {
  echo "Error: " . $_FILES["cavepic"]["error"] . "<br />";
  }
else
  {
   move_uploaded_file($_FILES["cavepic"]["tmp_name"],
      "caveuploads/" . $_FILES["cavepic"]["name"]);
	  $picurl="caveuploads/" . $_FILES["cavepic"]["name"];
	  require("mydbcon.php");
	  mysql_query("INSERT INTO cavephotos (uid,caveid,photourl) VALUES ('$uid','$cid','$picurl')") or die("<script>alert('OOPS! An error occured while uploading!');window.location.assign('index.php');</script>");
	  $chk=mysql_query("SELECT * FROM user WHERE uid='$uid'") or die("OOPS! Unable to fetch data!");
$c=@mysql_fetch_array($chk);
if($c!="")
{
	mysql_query("UPDATE user SET photos=photos+1 WHERE uid='$uid'") or die("OOPS! Unable to insert data!");
}
	  echo "<script>alert('UPLOADING SUCCESSFUL');window.location.assign('cavephotos.php?caveid=$cid');</script>";
  }
?>