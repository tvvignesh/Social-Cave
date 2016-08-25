$(document).ready(function(){
var hangout,spend,appetit,nature,fun,nightlife,ac,bar,cards,buffet,delivery,music,outseat,veg,smoking,wifi,dance,dinein;
ac=bar=buffet=cards=delivery=music=outseat=veg=smoking=wifi=dance=dinein=0;
fun=nightlife=nature=appetit=0;
	$("#sresult").change(function(){
	if ($("input[name=appetit]").length > 0){
		appetit=$("input[name=appetit]:checked").val();
		if(appetit==undefined)appetit=0;
	}
	if ($("input[name=nature]").length > 0){
		nature=$("input[name=nature]:checked").val();
		if(nature==undefined)nature=0;
	}
	if ($("input[name=fun]").length > 0){
		fun=$("input[name=fun]:checked").val();
		if(fun==undefined)fun=0;
	}
	if ($("input[name=nightlife]").length > 0){
		nightlife=$("input[name=nightlife]:checked").val();
		if(nightlife==undefined)nightlife=0;
	}
		hangout=$("input[name=hangout]:checked").val();
		if(hangout==undefined)hangout=0;
		spend=$("input[name=spend]:checked").val();
		if(spend==undefined)spend=0;
		
		if (document.sresult.facilities_1.checked)
		{
			ac=1;
		}
		if (document.sresult.facilities_2.checked)
		{
			bar=1;
		}
		if (document.sresult.facilities_3.checked)
		{
			buffet=1;
		}
		if (document.sresult.facilities_4.checked)
		{
			cards=1;
		}
		if (document.sresult.facilities_5.checked)
		{
			delivery=1;
		}
		if (document.sresult.facilities_6.checked)
		{
			music=1;
		}
		if (document.sresult.facilities_7.checked)
		{
			outseat=1;
		}
		if (document.sresult.facilities_8.checked)
		{
			veg=1;
		}
		if (document.sresult.facilities_9.checked)
		{
			smoking=1;
		}
		if (document.sresult.facilities_10.checked)
		{
			wifi=1;
		}
		if ($("input[name=facilities_11]").length > 0){
			if (document.sresult.facilities_11.checked)
			{
				dance=1;
			}
		}
		if ($("input[name=facilities_12]").length > 0){
			if (document.sresult.facilities_12.checked)
			{
				dinein=1;
			}
		}
		if ($("input[name=facilities_13]").length > 0){
			if (document.sresult.facilities_13.checked)
			{
				music=1;
			}
		}
		if ($("input[name=facilities_14]").length > 0){
			if (document.sresult.facilities_14.checked)
			{
				outseat=1;
			}
		}
		if ($("input[name=facilities_15]").length > 0){
			if (document.sresult.facilities_15.checked)
			{
				smoking=1;
			}
		}
		option=document.sresult.option.value;
		//LOAD EVERYTHING AGAIN
		window.location.assign("categories.php?ac="+ac+"&bar="+bar+"&buffet="+buffet+"&cards="+cards+"&delivery="+delivery+"&music="+music+"&outseat="+outseat+"&veg="+veg+"&smoking="+smoking+"&wifi="+wifi+"&dinein="+dinein+"&appetit="+appetit+"&nature="+nature+"&fun="+fun+"&nightlife="+nightlife+"&hangout="+hangout+"&spend="+spend+"&option3="+option);
	});
});