<?php
require("header.php");
//if(!isset($_COOKIE["login"]))die("Access denied!");
//if($_COOKIE["login"]!=3012)die("Access denied!");
?>
<style type="text/css">
#footer
{
position: absolute;
left: 300px;
top: 1620px;
height: 180px;
width: 700px;
}
</style>
<div id="mcbox" style="height:2000px;">
<div id="cbox1" style="font-family:'Arial,Helvetica,sans-serif';height:inherit;">
<form name="adminform" method="post" action="adminprocess.php">
<fieldset style="padding:5px;">
<legend>Add a new cave</legend>
Cave name: <input type="text" name="cavename" /><br /><br />
Cave type: <input type="text" name="cavetype" /><br /><br />
Cave full description: <textarea name="cavefulldesc" rows="10" cols="100"/></textarea><br /><br />
Address: <br/>
<textarea rows="5" cols="40" name="address"></textarea>
<br/>
Is it a featured cave?
<input type="radio" name="fcave" value="1"
> Yes
<input type="radio" name="fcave" value="0"> No
<br /><br />
Is it inside/outside the city?
<br />
<input type="radio" name="cityloc" value="0"> Inside the City
<br />
<input type="radio" name="cityloc" value="1"> Outside the City
<br /><br />
Phone number: <input type="text" name="phone">
<br /><br />
<b><u>Cave Facilities:</u></b>
<br />
<input type="checkbox" value="ac" name="ac"> Air Conditioner
<br />
<input type="checkbox" value="bar" name="bar"> Bar
<br />
<input type="checkbox" value="buffet" name="buffet"> Buffet
<br />
<input type="checkbox" value="cards" name="cards"> Cards Accepted
<br />
<input type="checkbox" value="dance" name="dance"> Dance Floor
<br />
<input type="checkbox" value="dinein" name="dinein"> Dine-In
<br />
<input type="checkbox" value="homedelivery" name="homedelivery"> Home Delivery
<br />
<input type="checkbox" value="music" name="music"> Music
<br />
<input type="checkbox" value="seating" name="seating"> Outdoor Seating
<br />
<input type="checkbox" value="veg" name="veg"> Pure Vegetarian
<br />
<input type="checkbox" value="smoking" name="smoking"> Smoking Allowed
<br />
<input type="checkbox" value="snacks" name="snacks"> Snacks Available
<br />
<input type="checkbox" value="wifi" name="wifi"> Wifi
<br /><br />
<b><u>Cave photos:</b></u>
<br />
<input name="filesToUpload" id="filesToUpload" type="file" multiple="" onchange="makeFileList();"/>
<ul id="fileList"><li>No Files Selected</li></ul>
<b><u>Type of Cave</u></b>
<br />
<input type="checkbox" value="1" name="opt1"> Bon Appetit 
<input type="checkbox" value="2" name="opt1"> Connect with Nature
<input type="checkbox" value="3" name="opt1"> Just for Fun
<input type="checkbox" value="4" name="opt1"> Nightlife

<br /><br />
Who do you want to go with? 
<br />
<input type="radio" value="1" name="hangout"> Friends
<input type="radio" value="2" name="hangout"> Family
<input type="radio" value="3" name="hangout"> The Special One
<input type="radio" value="4" name="hangout"> Cool by myself
<br /><br />
How much do you want to spend?
<br />
<input type="radio" value="1" name="money"> I am broke
<input type="radio" value="2" name="money"> A little maybe
<input type="radio" value="3" name="money"> Money no problem
<br /><br />
<b><u>Under Bon Appetit</u></b>
<br />
<input type="radio" value="1" name="bonapp"> Bakery
<input type="radio" value="2" name="bonapp"> Cafe
<input type="radio" value="3" name="bonapp"> Fast Food
<input type="radio" value="4" name="bonapp"> Dine-In Restaurants
<br /><br />
<b><u>Under Connect with Nature</u></b>
<br />
<input type="radio" value="1" name="cwn"> Greenery
<input type="radio" value="2" name="cwn"> Worship Place
<input type="radio" value="3" name="cwn"> Water Body
<br /><br />
<b><u>Under Just for fun</u></b>
<br />
<input type="radio" value="1" name="jff"> Gaming
<input type="radio" value="2" name="jff"> Theatre
<input type="radio" value="3" name="jff"> Pool & Snooker
<input type="radio" value="4" name="jff"> Sports
<br /><br />
<b><u>Under Nightlife</u></b>
<br />
<input type="radio" value="1" name="nlyf"> Discotheque
<input type="radio" value="2" name="nlyf"> Bar
<br /><br />
<b><u>Require Menu?</u></b>
<br />
<input type="radio" value="1" name="menu"> Yes
<input type="radio" value="0" name="menu"> No
<div align="center"><input type="submit" value="Create this Cave"></div>
</fieldset>
</form>
</div>
</div>
<script type="text/javascript">
function makeFileList() {
			var input = document.getElementById("filesToUpload");
			var ul = document.getElementById("fileList");
			while (ul.hasChildNodes()) {
				ul.removeChild(ul.firstChild);
			}
			for (var i = 0; i < input.files.length; i++) {
				var li = document.createElement("li");
				li.innerHTML = input.files[i].name;
				ul.appendChild(li);
			}
			if(!ul.hasChildNodes()) {
				var li = document.createElement("li");
				li.innerHTML = 'No Files Selected';
				ul.appendChild(li);
			}
		}
</script>
<?php 
require("footer.php");
?>