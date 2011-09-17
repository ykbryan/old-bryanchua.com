<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Freelance web programmer and web master" />
<title>Bryan's blog 2.0 - My Online Workspace</title>
<link rel="shortcut icon" href="images/favicon.ico">
<link type="text/css" href="css/base.css" rel="stylesheet" />
<link type="text/css" href="css/items.css" rel="stylesheet" />
<link type="text/css" href="css/areas.css" rel="stylesheet" />
<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" />
<link type="text/css" href="css/humanity/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
<link type="text/css" href="css/jplayer.blue.monday.css" rel="stylesheet" />
<script src="js/google.js"></script>
<script src="js/jquery-1.5.1.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script src="js/jquery.jscrollpane.min.js"></script>
<script src="js/jquery.jplayer.min.js"></script>
<style>
body{
	background:url(images/bg.jpg) repeat;
}
#floor{
	min-height:500px;
	width:100%;
	overflow:hidden;
}
.tab_bg{
	width:620px;
	height:420px;
	position:absolute;
	margin-top:30px;
	margin-right:0px;
	background-color:#FFF;
	opacity:0.7;
	z-index:997;
}
.tab{
	margin:10px;
	width:600px;
	height:400px;
	position:absolute;
	margin-top:30px;
	margin-right:0px;
	overflow:auto;
	z-index:998;
}
#menu{
	position:fixed;
	bottom:0px;
	background:url(images/bg_wall_top.gif) repeat-x;
	width:100%;
	z-index:999;
}
#menu span{
	padding:15px;
	color:#FE7;
	margin:1px;
}
#menu span.left{
	float:left;
}
#menu span.right{
	float:right;
}
#loading_img{
	position:fixed;
	bottom:120px;
	z-index:999;
	width:100%;
	text-align:center;
}
#loading_screen{
	position:fixed;
	width:100%;
	height:100%;
	opacity:0.5;
	background-color:#FFF;
	z-index:998;
}
.clickable{
	z-index:999;
}
.clickable:hover, img#iphone:hover, a:hover{
	cursor:pointer;
}
#player{
	width:420px;
	height:60px;
	top:0px;
	right:0px;
	position:absolute;
	z-index:50;
	overflow:hidden;
}
.jp-audio{
	position:absolute;
	right:-360px;
}
.box{
	position:absolute;
	width:0px;
	height:500px;
	top:210px;
	right:0px;
	overflow:hidden;
}
.proficiency{
	 text-decoration:none; color:#444; float:left; padding:10px;
}
img#itunes{
	opacity:0.5;
}
img#itunes:hover{
	opacity:1;
}
li.index_li{
	font-size:10px; margin:0px 20px 10px 0px; float:left; list-style-type:disc;
}
</style>
</head>

<body>
<div id="loading">
    <div id="loading_screen"></div>
    <div id="loading_img"><div style="margin-left:auto; margin-right:auto"><img src="images/loading.gif" alt="loading..." /><br /><br />one moment please..</div></div>
</div>
<div id="player">
    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    
    <div class="jp-audio">
    	<img src="images/itunes.png" id="itunes" class="clickable" alt="iTunes" />
        <div class="jp-type-single">
            <div id="jp_interface_1" class="jp-interface">
                <ul class="jp-controls">
                    <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                    <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                    <li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
                    <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                    <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                </ul>
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value"></div>
                </div>
                <div class="jp-current-time"></div>
                <div class="jp-duration"></div>
            </div>
        </div>
    </div>
</div>

<div id="menu">
	<span class="left"><a id="link_home">home</a> . <a id="#">thanks for viewing</a> . <a id="#">made on a mac</a></span>
    <span class="right">best viewed at 1280 x 1024 resolution . <u><a href="./">my online workspace</a></u> © 2003-2011</span>
</div>
<div id="area">
	<div id="area_social" class="clickable">
    	<div style="font-family: 'CaviarDreamsRegular', sans-serif; font-weight: lighter; font-size:20px; text-transform: uppercase; z-index:50; padding-top:40px; color:#FFC; display:none">
        	&lt;&lt; push back
        </div>
    </div>
    <div id="area_keyboard" class="clickable"></div>
    <div id="area_mouse" class="clickable"></div>
    <div id="area_mbp" class="clickable"></div>
</div>
<div id="floor">
    <img src="images/png_rest.png" id="rest" alt="rest" />
	<img src="images/png_keyboard.png" id="keyboard" alt="keyboard" />
    <img src="images/png_magicmouse.png" id="mouse" alt="mouse" />
	<img src="images/png_table.png" id="table" alt="table" />
    <img src="images/png_comp.png" id="cables" alt="cables" />
    <img src="images/png_monitor.png" id="monitor" alt="monitor" />
    <img src="images/png_mbp.png" id="mbp" alt="mbp" />
    <!--<img src="images/ipad.png" id="ipad" />-->
    <img src="images/png_chair.png" id="chair" alt="chair" />
    <img src="images/png_carpet.png" id="carpet" alt="carpet" />
    <div id="regal">
	<img src="images/png_regal.png" alt="regal" />
    </div>
</div>

<div id="index_box" class="box">
    <div style="width:620px; height:30px; background:url(images/png_tab_top.png) no-repeat; margin-top:0px; right:0px; position:absolute; opacity:0.7; z-index:50"></div>
    <div class="tab_bg"></div>
    <div style="width:620px; height:30px; background:url(images/png_tab.png) no-repeat; margin-top:450px; right:0px; position:absolute; opacity:0.7;; z-index:50"></div>
    <div class="tab">
        <div style="font-family: 'CaviarDreamsRegular', sans-serif; font-weight: lighter; font-size:80px; text-transform: uppercase; z-index:50">
            <ul>
            <li class="index_li" style="margin-top:70px">HTML5</li>
            <li class="index_li" style="margin-top:70px">CSS3</li>
            <li class="index_li" style="margin-top:70px">JSP</li>
            <li class="index_li" style="margin-top:70px">PHP</li>
            <li class="index_li" style="margin-top:70px">Javascript</li>
            <li class="index_li" style="margin-top:70px">SQL</li>
            <li class="index_li" style="margin-top:70px">EJBQL</li>
            <li class="index_li" style="margin-top:70px">WSDL</li>
            <li class="index_li" style="margin-top:70px">Java</li>
            <li class="index_li" style="margin-top:70px">C</li>
            <li class="index_li" style="margin-top:70px">VB.NET</li>
            <li class="index_li" style="margin-top:70px">jQuery</li>
            </ul>
            WEB DESIGN <br />IN PROGRESS...
            <ul>
            <li class="index_li" style="margin-top:10px">Dreamweaver</li>
            <li class="index_li" style="margin-top:10px">Photoshop</li>
            <li class="index_li" style="margin-top:10px">MAMP</li>
            <li class="index_li" style="margin-top:10px">XAMPP</li>
            <li class="index_li" style="margin-top:10px">MySQL</li>
            <li class="index_li" style="margin-top:10px">Apache HTTP Server</li>
            <li class="index_li" style="margin-top:10px">Oracle Database 10g</li>
            </ul>
        </div>
    </div>
</div>
<div id="mbp_box" class="box">
    <div style="width:620px; height:30px; background:url(images/png_tab_top.png) no-repeat; margin-top:0px; right:0px; position:absolute; opacity:0.7; z-index:50"></div>
    <div class="tab_bg"></div>
    <div style="width:620px; height:30px; background:url(images/png_tab.png) no-repeat; margin-top:450px; right:0px; position:absolute; opacity:0.7;; z-index:50"></div>
    <div class="tab">
        <div style="font-family: 'CaviarDreamsRegular', sans-serif; font-weight: lighter; font-size:15px; text-transform: uppercase; z-index:50">
            
            <div style="font-size:40px; padding-top:10px">my macbook pro</div>
            <p>release date: February 26, 2008</p>
            <br />
            <div style="font-size:25px">display</div>
            <div style="font-size:15px">15.4", matte, LCD, 1,440 × 900, with LED backlighting</div>
            
            <div style="font-size:25px; padding-top:10px">processor</div>
            <div style="font-size:15px">2.4 GHz (T8300) Intel Core 2 Duo Penryn with 3 MB on-chip L2 cache</div>
            
            <div style="font-size:25px; padding-top:10px">SSD / memory</div>
            <div style="font-size:15px">(intel 320) 120GB / 4gb</div>
            
            <div style="font-size:25px; padding-top:10px">graphics</div>
            <div style="font-size:15px">Nvidia Geforce 8600M GT with 256 MB</div>
           	
            <div style="font-size:25px; padding-top:10px">operating system</div>
            <div style="font-size:15px">Mac OS X 10.7 "Lion"</div>
        </div>
    </div>
</div>
<div id="keyboard_box" class="box">
    <div style="width:620px; height:30px; background:url(images/png_tab_top.png) no-repeat; margin-top:0px; right:0px; position:absolute; opacity:0.7; z-index:50"></div>
    <div class="tab_bg"></div>
    <div style="width:620px; height:30px; background:url(images/png_tab.png) no-repeat; margin-top:450px; right:0px; position:absolute; opacity:0.7;; z-index:50"></div>
    <div class="tab">
        <div style="font-family: 'CaviarDreamsRegular', sans-serif; font-weight: lighter; font-size:20px; text-transform: uppercase; z-index:50">
            <div style="font-size:40px; padding-top:10px; padding-bottom:20px">proficiency</div>
            
            <a href="http://www.php.net" target="_blank"><span class="proficiency" style="font-size:30px">PHP</span></a>
            <div class="proficiency" style="font-size:20px">JSP</div>
            <div class="proficiency" style="font-size:30px">Java</div>
            <div class="proficiency" style="font-size:20px">C</div>
            <div class="proficiency" style="font-size:30px">VB.NET</div>
            <div class="proficiency" style="font-size:20px">HTML5</div>
            <div class="proficiency" style="font-size:30px">CSS3</div>
            <div class="proficiency" style="font-size:20px">jQuery</div>
            <div class="proficiency" style="font-size:30px">SQL</div>
            <div class="proficiency" style="font-size:20px">EJBQL</div>
            <div class="proficiency" style="font-size:30px">WSDL</div>
            <div class="proficiency" style="font-size:30px">Dreamweaver</div>
            <div class="proficiency" style="font-size:20px">Photoshop</div>
            <div class="proficiency" style="font-size:30px">Lightroom</div>
            <div class="proficiency" style="font-size:20px; padding-bottom: 30px">Netbeans IDE</div>
            <div class="proficiency" style="font-size:20px">MAMP/XAMPP</div>
            <div class="proficiency" style="font-size:30px">Apache HTTP Server</div>
            <div class="proficiency" style="font-size:20px; padding-bottom: 30px">Glassfish</div>
            <div class="proficiency" style="font-size:30px">MySQL</div>
            <div class="proficiency" style="font-size:20px">Oracle Express Edition 10g</div>
        </div>
    </div>
</div>

<div id="blog_box" class="box">
    <div style="width:620px; height:30px; background:url(images/png_tab_top.png) no-repeat; margin-top:0px; right:0px; position:absolute; opacity:0.7; z-index:50"></div>
    <div class="tab_bg"></div>
    <div style="width:620px; height:30px; background:url(images/png_tab.png) no-repeat; margin-top:450px; right:0px; position:absolute; opacity:0.7;; z-index:50"></div>
    <div class="tab">
        <div style="font-family: 'CaviarDreamsRegular', sans-serif; font-weight: lighter; font-size:20px; text-transform: uppercase; z-index:50">
            <div style="font-size:40px; padding-top:10px; padding-bottom:20px">proficiency</div>

            <a href="http://www.php.net" target="_blank"><span class="proficiency" style="font-size:30px">PHP</span></a>
            <div class="proficiency" style="font-size:20px">JSP</div>
            <div class="proficiency" style="font-size:30px">Java</div>
            <div class="proficiency" style="font-size:20px">C</div>
            <div class="proficiency" style="font-size:30px">VB.NET</div>
            <div class="proficiency" style="font-size:20px">HTML5</div>
            <div class="proficiency" style="font-size:30px">CSS3</div>
            <div class="proficiency" style="font-size:20px">jQuery</div>
            <div class="proficiency" style="font-size:30px">SQL</div>
            <div class="proficiency" style="font-size:20px">EJBQL</div>
            <div class="proficiency" style="font-size:30px">WSDL</div>
            <div class="proficiency" style="font-size:30px">Dreamweaver</div>
            <div class="proficiency" style="font-size:20px">Photoshop</div>
            <div class="proficiency" style="font-size:30px">Lightroom</div>
            <div class="proficiency" style="font-size:20px; padding-bottom: 30px">Netbeans IDE</div>
            <div class="proficiency" style="font-size:20px">MAMP/XAMPP</div>
            <div class="proficiency" style="font-size:30px">Apache HTTP Server</div>
            <div class="proficiency" style="font-size:20px; padding-bottom: 30px">Glassfish</div>
            <div class="proficiency" style="font-size:30px">MySQL</div>
            <div class="proficiency" style="font-size:20px">Oracle Express Edition 10g</div>
        </div>
    </div>
</div>
<script>
var settings = {
	showArrows: false,
	autoReinitialise: true
};
var pane = $(".tab");
pane.jScrollPane(settings);
var contentPane = pane.data('jsp').getContentPane();

$(function(){
	$("div#loading").ajaxStart(function() {
        $(this).show();
		$("button").button("option", "disabled", true);
    });
	$("div#loading").ajaxStop(function() {
        $(this).hide();
		$("button").button("option", "disabled", false);
    });
	
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				oga: "media/music.ogg"
			}).jPlayer("play");
		},
		ended: function (event) {
			$(this).jPlayer("play");
		},
		swfPath: "../js",
		supplied: "oga"
	});
});

$("img#itunes").click(function(){
	if($(this).hasClass("itunes_pushed")){
		$("div.jp-audio").stop().animate({ right: "-360px" }, "slow");
		$(this).removeClass("itunes_pushed");
	}else{
		$("div.jp-audio").stop().animate({ right: "0px" }, "slow");
		$(this).addClass("itunes_pushed");
	}
});

$("div#area_social").click(function(){
	if($(this).hasClass("regal_pushed")){
		$("div#area_social div").hide();
		$("div#regal").animate({ left: "-200px", top: "250px" }, "slow");
		$("img#rest").animate({ left: "190px", top: "100px" }, "slow");
		$("img#keyboard").animate({ left: "250px", top: "250px" }, "slow");
		$("img#mouse").animate({ left: "450px", top: "265px" }, "slow");
		$("img#chair").animate({ left: "200px" }, "slow");
		$("div#area_chair").css("left", "260px");
		$(this).css("width", "125px").css("height", "30px").css("top", "590px").css("left", "0px").removeClass("regal_pushed");
	}else{
		$("div#regal").animate({ left: "0px", top: "360px" }, "slow", function(){
			$("div#area_social div").show();
		});
		$("div#area_chair").css("left", "410px");
		$("img#rest").animate({ left: "165px", top: "55px" }, "slow");
		$("img#keyboard").animate({ left: "220px", top: "200px" }, "slow");
		$("img#mouse").animate({ left: "420px", top: "210px" }, "slow");
		$("img#chair").animate({ left: "350px" }, "slow");
		$(this).css("width", "150px").css("height", "300px").css("top", "415px").css("left", "240px").addClass("regal_pushed");
	}
});
var mouse_moved = 0;
$("div#area_mouse").stop().click(function(){
    mouse_moved++;
    if(mouse_moved == 5){
        alert('there is nothing, so stop clicking!');
    }
	if($(this).hasClass("mouse_pushed")){
		$("img#mouse").stop().animate({ top:"265px", left:"450px" }, "slow");
		$(this).css("top", "255px").css("left", "450px").removeClass("mouse_pushed");
	}else{
		$("img#mouse").stop().animate({ top:"275px", left:"460px" }, "slow");
		$(this).css("top", "265px").css("left", "460px").addClass("mouse_pushed");
		$("div#portfolio").stop().animate({ top:"275px", left:"460px" }, "slow");
	}
	$(".box").stop().animate({width: "0px"}, "slow");
	$("img#iphone, div#area_keyboard, div#area_mbp").removeClass("pushed");
});

$("div#area_mbp").click(function(){
	$("img#iphone, div#area_keyboard").removeClass("pushed");
	$(".box").stop().animate({width: "0px"}, "slow");
	
	if($(this).hasClass("pushed"))
		$(this).removeClass("pushed");
	else{
		$("div#mbp_box").stop().animate({width: "620px"}, "slow");
		$(this).addClass("pushed");
	}
});
$("div#area_keyboard").click(function(){
	$("img#iphone, div#area_mbp").removeClass("pushed");
	$(".box").stop().animate({width: "0px"}, "slow");
	
	if($(this).hasClass("pushed"))
		$(this).removeClass("pushed");
	else{
		$("div#keyboard_box").stop().animate({width: "620px"}, "slow");
		$(this).addClass("pushed");
	}
});

$("img#iphone").click(function(){
	$("div#area_keyboard, div#area_mbp").removeClass("pushed");
	$(".box").stop().animate({width: "0px"}, "slow");
	
	if($(this).hasClass("pushed"))
		$(this).removeClass("pushed");
	else{
		$("div#contact").stop().animate({width: "470px"}, "slow");
		$(this).addClass("pushed");
	}
});
$("a#link_contact").click(function(){$("img#iphone").click();});

$("a#link_home").click(function(){
	$(".box").stop().animate({width: "0px"}, "slow");
    $("div#floor img").removeClass("pushed");
	$("div#index_box").stop().animate({width: "620px"}, "slow");
});

//$("div#mbp_box").hide();
$("button").button();
$("input, select, textarea").addClass("ui-widget, ui-state-default, ui-corner-all");

$(window).load(function() {
	$("div#loading").hide();
	$("div#index_box").stop().animate({width: "620px"}, "slow");
	//$("div#test").stop().animate({height: "100%"}, "slow");
});
</script>
</body>
</html>