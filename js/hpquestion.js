var option1;
var option2;
var option3;
$(document).ready(function(){
$('#cbtn').click(function() {
$("#cbox1").hide("slide", { direction: "left" }, 1000,function(){
$("#cbox1s1").show("slide", { direction: "right" }, 1000,function(){});
});
    });
	
$('#cbtns1').click(function() {
$("#cbox1s1").hide("slide", { direction: "right" }, 1000,function(){
$("#cbox1").show("slide", { direction: "left" }, 1000,function(){});
});
    });
	
$('.hang').click(function() {
$("#cbox1s1").hide("slide", { direction: "left" }, 1000,function(){
$("#cbox1s2").show("slide", { direction: "right" }, 1000,function(){});
});
    });
	
$('#cbtns2').click(function() {
$("#cbox1s2").hide("slide", { direction: "right" }, 1000,function(){
$("#cbox1s1").show("slide", { direction: "left" }, 1000,function(){});
});
    });

$('.money').click(function() {
$("#cbox1s2").hide("slide", { direction: "left" }, 1000,function(){
$("#cbox1s3").show("slide", { direction: "right" }, 1000,function(){});
});
    });
	
$('#cbtns3').click(function() {
$("#cbox1s3").hide("slide", { direction: "right" }, 1000,function(){
$("#cbox1s2").show("slide", { direction: "left" }, 1000,function(){});
});
    });
	
	
$('#menu2').hover(function(){
$('#menu2').css({"background":"url('images/mhoverbg.png')","background-repeat":"no-repeat","padding-bottom":"20px"});
	},function(){
	$('#menu2').css({"background-image":"none"});
	});
	
$('#categories').hover(function(){
$('#menu2').css({"background":"url('images/mhoverbg.png')","background-repeat":"no-repeat","padding-bottom":"20px"});},function(){
$('#menu2').css({"background-image":"none"});
	});
	
$('.hang').click(function(){
option1 = $(this).attr('name');
});

$('.money').click(function(){
option2 = $(this).attr('name');
});

$('.choose').click(function(){
option3 = $(this).attr('name');
var url="search.php?option1="+option1+"&option2="+option2+"&option3="+option3;
window.location.assign(url);
});

$('#home').click(function(){

window.location.assign("index.php");
});

$('#csform').keypress(function(e) {
	if(e.KeyCode == '13') {
	e.preventDefault();
	document.namesearch.submit();
	}
});

$('#signupbtn').click(function() {
$("#cbox1").hide("slide", { direction: "left" }, 1000,function(){
$("#title").show("slide", { direction: "right" }, 1000,function(){});
});
    });
	
    

	});
function myfunc1()
{
  var e = document.getElementById("categories");
       if(e.style.display == 'none')
          e.style.display = '';
       else
          e.style.display = 'none';	
}

