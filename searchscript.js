$(document).ready(function(){
var opt1,opt2,opt3,ba,ac,bar,buffet,cards,delivery,music,outseat,veg,smoking,wifi,cwn,jff,nlyf,dance,dinein;
ac=bar=buffet=cards=delivery=music=outseat=veg=smoking=wifi=cwn=jff=nlyf=dance=dinein=0;
	$("#sresult input").change(function(){
		opt1=$("input[name=hangout]:checked").val();
		opt2=$("input[name=spend]:checked").val();
		opt3=$("input[name=wantdo]:checked").val();
		ba=$("input[name=appetit]:checked").val();
		cwn=$("input[name=nature]:checked").val();
		jff=$("input[name=fun]:checked").val();
		nlyf=$("input[name=nightlife]:checked").val();
		if(ba==undefined)
		ba=0;
		if(cwn==undefined)
		cwn=0;
		if(jff==undefined)
		jff=0;
		if(nlyf==undefined)
		nlyf=0;
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
		
		if (document.sresult.facilities_11.checked)
		{
			ac=1;
		}
		if (document.sresult.facilities_12.checked)
		{
			cards=1;
		}
		if (document.sresult.facilities_13.checked)
		{
			dance=1;
		}
		if (document.sresult.facilities_14.checked)
		{
			dinein=1;
		}
		if (document.sresult.facilities_15.checked)
		{
			outseat=1;
		}
		if (document.sresult.facilities_16.checked)
		{
			smoking=1;
		}
		
		//LOAD EVERYTHING AGAIN
		window.location.assign("search.php?option1="+opt1+"&option2="+opt2+"&option3="+opt3+"&ba="+ba+"&ac="+ac+"&bar="+bar+"&buffet="+buffet+"&cards="+cards+"&delivery="+delivery+"&music="+music+"&outseat="+outseat+"&veg="+veg+"&smoking="+smoking+"&wifi="+wifi+"&cwn="+cwn+"&jff="+jff+"&nlyf="+nlyf+"&dance="+dance+"&dinein="+dinein);
	});
});