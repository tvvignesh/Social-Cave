<?php
if(isset($_GET["cavetype"]))
{
$ctype=$_GET["cavetype"];
}
echo 
"
<table border='0' id='crating' style='margin-top:10px;'>
			<tr><td style='font-family:Arial,Helvetica,sans-serif;font-size:17px;font-weight:bold;' class='thead' align='left'>Cave</td><td style='font-family:Arial,Helvetica,sans-serif;font-size:17px;font-weight:bold;'  class='thead'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cave Rating</td></tr>
";

require("mydbcon.php");
$chk=mysql_query("SELECT * FROM cavedb.caveinfo WHERE option3='$ctype' ORDER BY totalrating/noofrates DESC LIMIT 0,4");
while($c=@mysql_fetch_array($chk,MYSQL_ASSOC))
{
$rating=$c["totalrating"]/$c["noofrates"];
$cname=$c['cavename'];
$cid=$c['caveid'];
echo "<tr><td class='caverank'>1. <a href='caveprofile.php?caveid=$cid' style='color:black;text-decoration:none;'>$cname</a></td><td class='ratnum'>$rating</td></tr>";
}

echo "</table>";
?>