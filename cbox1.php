<div id="mcbox">
<div id="cbox1" style="left:20px;">
Your one place destination for all the hangouts in your city
<br><br>
     <div id="icbox" align="left" style="font-size:35px;width:440px;height:200px;position:relative;left:62px;top:-30px;z-index:1;">
	 Start looking for your favourite   
     places/"caves" as we like to call it’
	 </div>
	 <div style="position:relative;top:-270px;left:340px;width:750px;">
	 <img src="images/ip1image.png">
	 </div>
	 <div id="cbtn" style="width:190px;height:100px;">
		<img src="images/clickbtn.png" id="clickbtn">
	</div>
</div>

<div id="cbox1s1" style="left:20px;display:none;">
<div style="position:relative;left:280px;">Who do you want to hangout with?</div>
     <div id="icboxs1" align="left" style="width:800px;height:600px;position:relative;left:15px;top:-450px;">
		<img src="images/ip1s1image.png">
	 </div>
	 <div style="position:relative;top:-1000px;left:530px;width:200px;">
		<ul id="hangout">
			<li class="hang" id="family" name="1">Family</li>
			<li class="hang" id="friends" name="2">Friends</li>
			<li class="hang" id="special" name="3">The special one</li>
			<li class="hang" id="myself" name="4">Cool by myself</li>
		</ul>
	 </div>
	 <div id="cbtns1" style="width:190px;height:100px;">
		<img src="images/backbtn.png" id="clickbtns1">
	</div>
</div>
<div id="cbox1s2" style="left:20px;display:none">
How much do you want to spend?
<br><br>
     <div id="icboxs1" align="left" style="width:800px;height:600px;position:relative;left:350px;top:-40px;">
		<img src="images/ip1s2image.jpg">
	 </div>
	 <div style="position:relative;top:-580px;left:60px;width:240px;">
		<ul id="spend">
			<li class="money" id="broke" title="Less than Rs. 100" name="1">I'm Broke</li>
			<li class="money" id="lil" title="Rs. 100 - 250" name="2">A little Maybe</li>
			<li class="money" id="more" title="More than Rs. 250" name="3">Money no problem</li>
		</ul>
	 </div>
	  <div id="cbtns2" style="position:absolute;top:298px;left:120px;cursor:pointer">
		<img src="images/backbtn.png" id="clickbtns1">
	</div>
</div>
<div id="cbox1s3" style="left:20px;display:none;">
<div style="position:relative;left:280px;font-size:40px;">What do you want to do?</div>
     <div id="icboxs1" align="left" style="width:800px;height:600px;position:relative;left:15px;">
		<img src="images/ip1s1image.png">
	 </div>
	 <div style="position:relative;top:-545px;left:580px;width:390px;font-size:40px;">
		<ul id="categ"><span id="ch" style="position:relative;top:-30px;width:400px;">Choose one of our categories</span>
			<li class="choose" id="bon2" name="1">Bon appetit</li>
			<li class="choose" id="con2" name="2">Connect with nature</li>
			<li class="choose" id="fun2" name="3">Just for fun</li>
			<li class="choose" id="night2" name="4">Nightlife</li>
		</ul>
	 </div>
	 <div id="cbtns3" style="width:190px;height:100px;position:absolute;top:340px;left:610px;cursor:pointer">
		<img src="images/backbtn.png" id="clickbtns1">
	</div>
</div >
<div id = "title" style="font-size:25px;left:20px;display:none;">
<form name="form" action="signup.php" method="post" enctype="multipart/form-data" >
</br>
NAME &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp <input type="text" name="fname" placeholder= "FIRST NAME" size="24" maxlength="24" >&nbsp &nbsp  
<input type="text" name="lname" placeholder=" LAST NAME" size="22" maxlength="22"></br></br>
SEX&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
<select name="dpbox">
<option value="" SELECTED >- Select One -</option>
<option value="1st">MALE</option>
<option value="2nd">FEMALE</option>
</select>
<BR/><br/>
BIRTH DATE &nbsp <input type="text" name= "bdate" placeholder= "DATE" size="12" maxlength="12">
&nbsp <select name="dpbox1"> 
<option value="" SELECTED >- Select Month -</option>
<option value="1st">JANUARY</option>
<option value="2nd">FEBRUARY</option>
<option value="3rd">MARCH</option>
<option value="4th">APRIL</option>
<option value="5th">MAY</option>
<option value="6th">JUNE</option>
<option value="7th">JULY</option>
<option value="8th">AUGUST</option>
<option value="9th">SEPTEMBER</option>
<option value="10th">OCTOBER</option>
<option value="11th">NOVEMBER</option>
<option value="12th">DECEMBER</option>
</select>
&nbsp <input type="text" name= "byear" placeholder= "YEAR" size="12" maxlength="12"><br/><br/>
MOBILE NO. &nbsp <input type = "text" name = "mnum" size = "20" maxlength= "20"><br/><br/>
Email-ID &nbsp &nbsp <input type= "text" name = "did" placeholder="Email-Id" size = "40" maxlength= "40"><br/><br/>
PASSWORD &nbsp &nbsp <input type="password" name= "pass" size="50" maxlength="50"/><br/><br/>

<label for="file">UPLOAD &nbsp  </label>
<input type="file" name="file" id="file" /> 
<br />
<div id="captchadisp" style="position:relative;top:-70px;left:600px;">
<?php
          require_once('recaptchalib.php');
          $publickey = "6Lc6MtcSAAAAACgDqRlymCI5wqpTyPaNbUo0NwuT"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
</div>
<input type= "submit" class= "myButton" value= "CREATE MY ACCOUNT"/>
</form>
</div>
</div>