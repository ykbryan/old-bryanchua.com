/*
	* Developed by J.P. Given
	* http://johnpatrickgiven.com
	
	******************************************************************************************************
	* NOTE: DON'T DELETE ANY VARIABLES FROM THIS PAGE.  IF YOU DON'T USE A SERVICE SIMPLY LEAVE IT BLANK.*
	******************************************************************************************************
	
	* This file is required for the plug in to work.  Do not erase any of the Javascript variables on this page.
	* If you don't use one of the services below simply leave the value blank ('').
	
	* NOTE: all RSS feed links need to be fully qualified URLs.  ie http://...
*/

// Twitter RSS.  My Twitter RSS feed is in here as an example.
sss.TWITTER_RSS = 'https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=me_bryanchua&fetch=+Fetch+RSS+';

// LastFM RSS.
sss.LASTFM_RSS = 'http://ws.audioscrobbler.com/1.0/user/bryanchua/recenttracks.rss';

// Facebook RSS.
// How do you get it?  It's annoying but here's how.
// After logging in click the link to your profile.
// Scroll down the page and on the left hand side there is a section called "Links".
// Click "See All"
// On the right you'll see a link to the RSS FEED.  Click it.
// Grab that URL.
sss.FACEBOOK_RSS = '';//https://www.facebook.com/feeds/notifications.php?id=579410785&viewer=579410785&key=AWi3T15_GSlPysgR&format=rss20';

// Flickr RSS.
sss.FLICKR_RSS = 'http://api.flickr.com/services/feeds/photos_public.gne?id=67370375@N02&tags=photoblog&lang=en-us&format=rss_200';

// Delicious RSS.
sss.DELICIOUS_RSS = '';

//Tumblr RSS.
sss.TUMBLR_RSS = '';

//Wordpress RSS.
sss.WORDPRESS_RSS = 'http://www.bryanchua.com/feed/';

//Posterous RSS.
sss.POSTEROUS_RSS = '';

// How many to display.  Recommend no more than 25 since RSS only goes back so far.  0 = show all.
sss.LIMIT = 15;



