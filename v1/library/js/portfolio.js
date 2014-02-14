var TINY={};

function T$(i){return document.getElementById(i)}
function T$$(e,p){return p.getElementsByTagName(e)}

TINY.accordion=function(){
	function slider(n){this.n=n; this.a=[]}
	slider.prototype.init=function(t,e,m,o,k){
		var a=T$(t), i=s=0, n=a.childNodes, l=n.length; this.s=k||0; this.m=m||0;
		for(i;i<l;i++){
			var v=n[i];
			if(v.nodeType!=3){
				this.a[s]={}; this.a[s].h=h=T$$(e,v)[0]; this.a[s].c=c=T$$('div',v)[0]; h.onclick=new Function(this.n+'.pr(0,'+s+')');
				if(o==s){h.className=this.s; c.style.height='auto'; c.d=1}else{c.style.height=0; c.d=-1} s++
			}
		}
		this.l=s
	};
	slider.prototype.pr=function(f,d){
		for(var i=0;i<this.l;i++){
			var h=this.a[i].h, c=this.a[i].c, k=c.style.height; k=k=='auto'?1:parseInt(k); clearInterval(c.t);
			if((k!=1&&c.d==-1)&&(f==1||i==d)){
				c.style.height=''; c.m=c.offsetHeight; c.style.height=k+'px'; c.d=1; h.className=this.s; su(c,1)
			}else if(k>0&&(f==-1||this.m||i==d)){
				c.d=-1; h.className=''; su(c,-1)
			}
		}
	};
	function su(c){c.t=setInterval(function(){sl(c)},20)};
	function sl(c){
		var h=c.offsetHeight, d=c.d==1?c.m-h:h; c.style.height=h+(Math.ceil(d/5)*c.d)+'px';
		//c.style.opacity=h/c.m; c.style.filter='alpha(opacity='+h*100/c.m+')'; HIDDEN FOR IE CLEARYTYPE ISSUE
		if((c.d==1&&h>=c.m)||(c.d!=1&&h==1)){if(c.d==1){c.style.height='auto'} clearInterval(c.t)}
	};
	return{slider:slider}
}();

function whatTime(){
	var d=new Date();
	var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var time=new Array("4am","5am","6am","7am","8am","9am","10am","11am","noon","1pm","2pm","3pm","4pm","5pm","6pm","7pm","8pm","9pm","10pm","11pm","midnight","1am","2am","3am");
	if (weekday[d.getUTCDay()]=="Saturday" || weekday[d.getUTCDay()]=="Sunday"){document.write("It's " + weekday[d.getUTCDay()] + " so I'm probably taking advantage of Brooklyn. <small><3</small>");}
	else if (d.getUTCHours()<=11 && d.getUTCHours()>=4){document.write("It's around " + time[d.getUTCHours()] + " ...I'm probably dreaming.");}
	else if (d.getUTCHours()>11 && d.getUTCHours()<=17){document.write("Good Morning! I'm likely savoring/inhaling coffee from one of my 5+ coffee-making machines. Now's the best time to chat with me!");}
	else if (d.getUTCHours()>17 && d.getUTCHours()<=23){document.write("There's a good chance I'm at my computer now, say hello!");}
	else{document.write("It's evening so I'm either celebrating a great day and cooking/eating or have forgotten the time and am still at my computer. Say hello and find out.");}
}


$(function() {
$(".gallery-thumb").click(function() {
var image = $(this).attr("rel");
//$('#gallery-main-image').hide();
$('#gallery-main-image').fadeIn('slow');
$('#gallery-main-image').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb1").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image1').hide();
$('#work-main-image1').fadeIn('fast');
$('#work-main-image1').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb2").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image2').hide();
$('#work-main-image2').fadeIn('fast');
$('#work-main-image2').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb3").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image3').hide();
$('#work-main-image3').fadeIn('fast');
$('#work-main-image3').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb4").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image4').hide();
$('#work-main-image4').fadeIn('fast');
$('#work-main-image4').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb5").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image5').hide();
$('#work-main-image5').fadeIn('fast');
$('#work-main-image5').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb6").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image6').hide();
$('#work-main-image6').fadeIn('fast');
$('#work-main-image6').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb7").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image6').hide();
$('#work-main-image7').fadeIn('fast');
$('#work-main-image7').html('<img src="' + image + '"/>');
return false;
	});
$(".work-thumb8").click(function() {
var image = $(this).attr("rel");
//$('#work-main-image6').hide();
$('#work-main-image8').fadeIn('fast');
$('#work-main-image8').html('<img src="' + image + '"/>');
return false;
	});
$("#h2-about").click(function(){
  $.getScript("http://www.goodreads.com/review/grid_widget/3616839.Christina's%20currently-reading%20book%20montage?cover_size=small&amp;num_books=&amp;order=d&amp;shelf=currently-reading&amp;sort=date_added&amp;widget_id=1274087465");
  //$.getScript("http://feeds.delicious.com/v2/js/lalaalaaa?title=&count=5&sort=date&tags");
});

});
$(document).ready(function() {
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); 
	$(".tab_content:first").show(); 
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); 
		$(this).addClass("active"); 
		$(".tab_content").hide(); 
		var activeTab = $(this).find("a").attr("href"); 
		$(activeTab).show();
		return false;
	});
});
    $(function () {
        $('.tip').each(function () {
            var distance = 10;
            var time = 250;
            var hideDelay = 500;
            var hideDelayTimer = null;
            var beingShown = false;
            var shown = false;
            var trigger = $('.trigger', this);
            var info = $('.popup', this).css('opacity', 0);


            $([trigger.get(0), info.get(0)]).mouseover(function () {
                if (hideDelayTimer) clearTimeout(hideDelayTimer);
                if (beingShown || shown) {
                    // don't trigger the animation again
                    return;
                } else {
                    // reset position of info box
                    beingShown = true;

                    info.css({
                        display: 'block'
                    }).animate({
                        top: '-=' + distance + 'px',
                        opacity: 1
                    }, time, 'swing', function() {
                        beingShown = false;
                        shown = true;
                    });
                }

                return false;
            }).mouseout(function () {
                if (hideDelayTimer) clearTimeout(hideDelayTimer);
                hideDelayTimer = setTimeout(function () {
                    hideDelayTimer = null;
                    info.animate({ top: '+=' + distance + 'px', opacity: 0 }, time, 'swing', function () { shown = false; info.css('display', 'none'); }); }, hideDelay);
                return false;
            });
        });
    });