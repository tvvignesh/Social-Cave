var option3;
$(document).ready(function(){
$('.cat').click(function(){
var option3 = $(this).attr('name');
var url="../categories.php?&option3="+option3;
window.location.assign(url);
});

});