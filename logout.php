<?php
setcookie("randid",'$rid',time()-3600);
setcookie("login",'$uid',time()-3600);
echo "<script>alert('You have been successfully Logged Out');window.location.assign('index.php');</script>";
?>