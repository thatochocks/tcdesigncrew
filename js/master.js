// JavaScript Document//
$(document).ready(function(){
	document.all["loading"].style.visibility="visible";
	gps();
	loadContent();	
	menuClick();
	$('.menu').animate({'margin-Bottom':'-'+$(".navigation").outerHeight()+'px'},2000);
	for(var i = 1; i<=6; i++)
		{
			$('#'+i).click(function(e){
				if(menuhidden)
				{}
				else
				{
					$('.menu').stop().animate({'margin-Bottom':'-'+$(".navigation").outerHeight()+'px'},300); 
					menuhidden=true;
				}
			});
		}
		 $("#owl").owlCarousel({
 autoPlay : 3000, // Show next and prev buttons
slideSpeed : 300,
paginationSpeed : 400,
singleItem:true
});
	document.all["loading"].style.visibility="hidden";
	});
///////////////////////gps///////////////////////////////////
	function gps(){
	$('html,body,#container').css({'overflow':'hidden'})
	$('.content').fadeOut(0);
	scrollToElement($('#2'));	
	}
/////////////////////////start point///////////////////////////////////	
	function scrollToElement(ele) {
    $('html, body').animate({scrollTop: ele.offset().top}).animate({scrollLeft: ele.offset().left},1);
	$('#menu').css({'bottom':'0%'})
	$('#2 .content').fadeIn(5000);
	pag = 2;
}

/////////////////////page load////////////////////
var pag =2;
var xmlhttp;
var cur="";
function loadContent(){
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
	  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    document.getElementById("gallery").innerHTML=xmlhttp.responseText;
	  }
	}
		var h= screen.availHeight;
		var w= screen.availWidth;
		xmlhttp.open("GET","6.php?height="+h+"&width="+w,false);
	xmlhttp.send();
}

///////////////////////////galleria//////////////////////////////////
function gal(){

	var d= 0;
	if (pag == 6){
	$('.works .thumb').stop().each(function(i, obj) {
			$(obj).delay(d).show(500, 'easeOutBack');
			d=d+65;
	})
	}
	else
	{
		$('.works .thumb').stop().each(function(i, obj) {
			$(obj).delay(d).hide(500, 'easeInBack');
			d=d+10;
	});
	}
}



///////////////////////////////title display/////////////////////////////////


function tweener(i){
	switch(i)
	{
		case '#4':{
			$('.logo, .social').stop().fadeOut(1500);
			$('#panel').stop().animate({'height':'0%', 'width':'100%'},1500,'easeInOutExpo').fadeIn(0).animate({'height':'100%', 'width':'18%','font-size':'50pt'},1500,'easeInOutExpo');
			break;}
		default:{
			$('.logo, .social').stop().fadeIn(1500);
			$('#panel').stop().animate({'height':'0%'},1500,'easeInOutExpo').fadeOut(0);
			break;}
		}
}





////////////////////no scroll///////////////////////////
 window.addEventListener("keydown", function(e) {
     // space and arrow keys
     if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
         e.preventDefault();
     }
 }, false);










///////////////////menu hide/////////////////////////
var menuhidden = true;
	$('.menu .navpointer a').click(function(){

		if(menuhidden){
		$('.menu').stop().animate({'margin-Bottom':'0'},300);
		menuhidden = false;
		}
		else
		{
			$('.menu').stop().animate({'margin-Bottom':'-'+$(".navigation").outerHeight()+'px'},300);
			menuhidden=true;
		}
	});









/////////////////////menu click///////////////////////
function menuClick(){$('.menu .navigation a').click(function(){
	var spl = $.attr(this, 'href').split("");
	if (pag!=spl[1])
	{
		cur = pag;
		$('#'+pag+' .content').stop().fadeOut(1000);
		pag=spl[1];
    	$('html, body').animate({
        scrollTop: $('#'+pag ).offset().top,
    	scrollLeft: $('#'+pag).offset().left}, 2000,'easeInOutExpo');
		var col;
		var op;
		switch ($.attr(this, 'href'))
		{
			case "#1": {col="#531481"; break;}
			case "#2": {col="#000"; break;}
			case "#3": {col="#0F3"; break;}
			case "#4": {col="#900"; break;}
			case "#5": {col="#1a1a1a"; break;}
			case "#6": {col="#09f"; break;}
			default  : {col="#000"; break;}
		}
		$('#webcolor').delay(0).animate({backgroundColor: col},2000);
		if(pag == 6)
		{
			setTimeout(gal, 3000);
			$('#'+pag+' .content').delay(500).fadeIn(5000);
		}
		else if(cur == 6)
		{
			setTimeout(gal, 0);
			$('#'+pag+' .content').delay(500).fadeIn(5000);
		}
		else{
			$('#'+pag+' .content').delay(500).fadeIn(5000);
			}
		setTimeout(tweener($.attr(this, 'href')),0);
		setTimeout(twee, 10000);
    //return false;
	}
});
}

