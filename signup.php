<?php
require_once('recaptchalib.php');
  $privatekey = "6Lc6MtcSAAAAACgDqRlymCI5wqpTyPaNbUo0NwuT";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("<a href='index.php'>Go back</a>
	<script type=\"text/javascript\">
	alert(\"The reCAPTCHA wasn't entered correctly. Go back and try it again. reCAPTCHA said: " . $resp->error . "\");
	window.location.replace('index.php');
	</script>
	");
  }
require("mydbcon.php");
   $var1=$_POST["fname"];
   $var2=$_POST["bdate"];
   $var3=$_POST["mnum"];
   $var4=$_POST["did"];
   $pass=$_POST["pass"];
   $pass=md5($pass);
   $var6=$_POST["lname"];
   $var7=$_POST["dpbox"];
   $var8=$_POST["dpbox1"];
   $var9=$_POST["byear"];
 do
{
$uid=mt_rand(100,99990);
$verifyid=mt_rand(100,99990);
mail("team@thesocialcave.com",$var4,"The Social cave verification link: <a href='http://www.thesocialcave.com/verify.php?vid=".$verifyid."&uid=".$uid."'>Click Here</a>");
$chk=mysql_query("SELECT * from cavedb.sign where uid='$uid'");
$v=@mysql_fetch_array($chk);
}while($v!="");
  
 $chk=mysql_query("INSERT INTO cavedb.sign(fname,bdate,mobile,emailid,password,flag,uid,lname,dpbox,bmonth,byear,verifycode) VALUES ('$var1','$var2','$var3','$var4','$pass','0','$uid','$var6','$var7','$var8','$var9','$verifyid')")
 or die ("INSERTION unsuccessfull!!");
 mysql_query("INSERT INTO user (uid,reviews,photos,articles,ranks,favs) VALUES ('$uid','0','0','0','0','0')") or die("OOPS! Unable to insert data!");
 if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  
   move_uploaded_file($_FILES["file"]["tmp_name"],
      "userprofile/upload/" . $_FILES["file"]["name"]);
  $url="userprofile/upload/" . $_FILES["file"]["name"];
  $chk=mysql_query("UPDATE cavedb.sign SET profpic='$url' WHERE uid=$uid");
  echo "<script type='text/javascript'>window.location.assign('index.php');alert('Sign Up Successful!');</script>";
  }
?>