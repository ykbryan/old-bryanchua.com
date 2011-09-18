	</div>
</div>
<div id="footer">
    <div class="wrapper">
        <div style="width:375px; border-left:1px solid #8E8E80; min-height:100px; margin:20px 0px 20px 0px; float:left">
        	<div style="padding:10px; margin-left:20px">
            	<img src="<?php bloginfo('template_directory'); ?>/images/profile.png" class="img_wrapper" style="float:left; margin-right:20px; margin-bottom:20px">
                <p><span style="color:#F6F7ED; font-family: Arial; font-size: 20px; text-shadow:#6C6C63 0 2px 0">ABOUT</span> me</p>
                <em style="font-size:10px">coming soon</em>
            </div>
        </div>
        <div style="width:300px; border-left:1px solid #8E8E80; min-height:100px; margin:20px 0px 20px 0px; float:left">
        	<div style="padding:10px; float:left; margin-left:15px;">
                <img src="<?php bloginfo('template_directory'); ?>/images/jquery.png" width="20" style="float:left; padding-top:10px; margin-right:20px">
                <span style="color:#F6F7ED; font-size:12px">built</span>
                <span style="color:#58584F; text-shadow: #909083 0 1px 0;"> using</span> <br />
                <em style="font-size:12px"><a href="http://www.jquery.com">jQuery</a></em>
            </div>
        	<div style="padding:10px; float:left">
                <img src="<?php bloginfo('template_directory'); ?>/images/jqueryui.png" width="20" style="float:left; padding-top:10px; margin-right:15px">
                <span style="color:#F6F7ED; font-size:12px">built</span>
                <span style="color:#58584F; text-shadow: #909083 0 1px 0;"> using</span> <br />
                <em style="font-size:12px"><a href="http://www.jqueryui.com">jQuery UI</a></em>
            </div>
        	<div style="padding:10px; margin-left:15px; float:left">
                <img src="<?php bloginfo('template_directory'); ?>/images/apple.png" width="20" style="float:left; padding-top:10px; margin-right:20px">
                <span style="color:#F6F7ED; font-size:12px">made</span>
                <span style="color:#58584F; text-shadow: #909083 0 1px 0;"> on</span> <br />
                <em style="font-size:12px"><a href="http://www.apple.com">Mac</a></em>
            </div>
        	<div style="padding:10px; margin-left:15px; float:left">
                <img src="<?php bloginfo('template_directory'); ?>/images/wordpress.png" width="25" style="float:left; padding-top:10px; margin-right:15px">
                <span style="color:#F6F7ED; font-size:12px">powered</span>
                <span style="color:#58584F; text-shadow: #909083 0 1px 0;"> by</span> <br />
                <em style="font-size:12px"><a href="http://www.wordpress.com">Wordpress</a></em>
            </div>
        	<div style="padding:10px; margin-left:20px; float:left">
                <img src="<?php bloginfo('template_directory'); ?>/images/godaddy-logo-only.png" width="20" style="float:left; padding-top:10px; margin-right:15px">
                <span style="color:#F6F7ED; font-size:12px">hosted</span>
                <span style="color:#58584F; text-shadow: #909083 0 1px 0;"> by</span> <br />
                <em style="font-size:12px"><a href="http://www.godaddy.com">GoDaddy</a></em>
            </div>
        </div>
        <div style="width:240px; border-left:1px solid #8E8E80; min-height:100px; margin:20px 0px 20px 0px; float:left; padding:10px">
        	<?php get_search_form(); ?>
        </div>
    </div>
</div>
<div id="copyright">
    <div class="wrapper">
        <div style="float:left">
            2003 - 2011 copyright by Bryan Chua
        </div>
        <div style="float:right">
            contact me
        </div>
    </div>
</div>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>


<script>
(function(){
  var count = 0,
  list = [
	{
	  service: 'twitter',
	  user: 'me_bryanchua'
	}
  ];

  Date.prototype.toISO8601 = function(date) {
	  var pad = function (amount, width) {
		  var padding = "";
		  while (padding.length < width - 1 && amount < Math.pow(10, width - padding.length - 1))
			  padding += "0";
		  return padding + amount.toString();
	  }
	  date = date ? date : new Date();
	  var offset = date.getTimezoneOffset();
	  return pad(date.getFullYear(), 4)
		  + "-" + pad(date.getMonth() + 1, 2)
		  + "-" + pad(date.getDate(), 2)
		  + "T" + pad(date.getHours(), 2)
		  + ":" + pad(date.getMinutes(), 2)
		  + ":" + pad(date.getUTCSeconds(), 2)
		  + (offset > 0 ? "-" : "+")
		  + pad(Math.floor(Math.abs(offset) / 60), 2)
		  + ":" + pad(Math.abs(offset) % 60, 2);
  };

  $("#twitterstream").lifestream({
	limit: 10,
	list: list,
	feedloaded: function(){
	  count++;
	  // Check if all the feeds have been loaded
	  if( count === list.length ){
		$("#twitterstream li").each(function(){
		  var element = $(this),
			  date = new Date(element.data("time"));
		  element.append(' <abbr class="timeago" title="' + date.toISO8601(date) + '">' + date + "</abbr>");
		})
		$("#twitterstream .timeago").timeago();
	  }
	}
  });
  
})();


$('#cbox').jflickrfeed({
	limit: 10,
	qstrings: {
		id: '67370375@N02'
	},
	itemTemplate: '<li>'+
					'<a rel="flickr" href="{{image}}" title="{{title}}">' +
						'<img src="{{image_s}}" alt="{{title}}" />' +
					'</a>' +
				  '</li>'
}, function(data) {
	$('#cbox a').colorbox();
});


$(".img_wrapper, .article-body img").hover(function(){
	$(this).stop().animate({backgroundColor: "#5A5A4E"});
}, function(){
	$(this).stop().animate({backgroundColor: "#6A6A5E"});
});
$("div#lifestream a, #footer .wrapper a, .article-footer a, .article-body a").live("mouseenter", function(){
	$(this).stop().animate({borderBottomColor: "#BBE9ED"});
});
$("div#lifestream a, #footer .wrapper a, .article-footer a, .article-body a").live("mouseleave", function(){
	$(this).stop().animate({borderBottomColor: "#8D8E7F"});
});
$("input.searchKeyword").live("mouseenter", function(){
	$(this).stop().animate({backgroundColor: "#F6F7ED"});
});
$("input.searchKeyword").live("mouseleave", function(){
	if(!$(this).val())
		$(this).stop().animate({backgroundColor: "#838375"});
});

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20790316-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
