<div id="divleft">
<div id="tophalf">

<div id="usersummary">
<?php

require("mydbcon.php");
$uid=$_GET["uid"];
$chk=mysql_query("SELECT * FROM rank WHERE uid='$uid'");
$c=@mysql_fetch_array($chk);
	if($c!="")$num_rows = mysql_num_rows($chk);
	else
	$num_rows=0;
	$rankno=$num_rows;
	
$chk=mysql_query("SELECT * FROM favourites WHERE uid='$uid'") or die("Sorry!Unable to fetch data!");
$c=@mysql_fetch_array($chk);
if($c=="")$favnum=0;
else
$favnum = mysql_num_rows($chk);
	
$var2=mysql_query("SELECT * from sign WHERE uid='$uid'");
$d=@mysql_fetch_array($var2,MYSQL_ASSOC);
echo '
<div id="profpic" style="position:relative;left:-245px;">
<img src="../'.$d["profpic"].'" height="297" width="235">
</div>
<div id="uname" style="position:relative;left:-170px;">
'.$d["fname"].' '.$d["lname"].'
</div>

<br>
<div class="details" style="position:relative;left:-170px;">
Indore, Madhya Pradesh, India
<br><br>'
.$d["emailid"].
'<br><br>';
$var=mysql_query("SELECT * from cavedb.user WHERE uid='$uid'");
$c=@mysql_fetch_array($var,MYSQL_ASSOC);
echo '
<table>
<tr>
<td class="head">Reviews:</td>
<td class="col2">'.$c["reviews"].'</td>
</tr>
<tr>
<td class="head">Photos:</td>
<td class="col2">'.$c["photos"].'</td>
</tr>
<!--<tr>
<td class="head">Articles:</td>
<td class="col2">'.$c["articles"].'</td>
</tr>-->
<tr>
<td class="head">Ranks:</td>
<td class="col2">'.$rankno.'</td>
</tr>
<tr>
<td class="head">Favorites:</td>
<td class="col2">'.$favnum.'</td>
</tr>
</table>
</div>
</div>
</div>';

?>