<div id="sidebar">
    <div id="profile">
        <img src="<?php bloginfo('template_directory'); ?>/images/quotes/opportunity.jpg" width="100px" class="img_wrapper" />
        <h2>an optimist</h2>
        <p>sees the opportunity in every difficulty; a pessimist sees the difficulty in every opportunity</p>
        <em style="color:#4B4C41; font-size:10px; float:right">- Sir Winston Churchill</em>
        <!-- Successful people are always looking for opportunities to help others. Unsuccessful people are always asking, "What's in it for me?" - Brian Tracy-->
    </div>
    <div id="music">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio">
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface">
                    <!-- start SIDEBAR TITLE -->
                    <div class="sidebar-title">
                        <span style="color:#F6F7ED; font-family: Arial; font-size: 20px; text-shadow:#6C6C63 0 2px 0">MP3</span> stream
                        <div id="mp3controller">
                             <!-- controls and toggles are hidden -->
                            <ul class="jp-controls">
                                <li><a href="javascript:;" class="jp-stop" tabindex="1"> stop</a> . </li>
                            </ul>                    
                            <ul class="jp-toggles">
                                <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat off"> no repeat </a></li>
                                <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat"> repeat </a></li>
                            </ul>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end SIDEBAR TITLE -->
                </div>
                <div class="sidebar-content">
                    <!-- if the browser support -->
                    <div class="jp-playlist">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                    <!-- if the browser does not support -->
                    <div class="jp-no-solution">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="twitter">
        <div class="sidebar-title">
            <span style="color:#F6F7ED; font-family: Arial; font-size: 20px; text-shadow:#6C6C63 0 2px 0">TWITTER</span> stream
        </div>
        <div class="sidebar-content">
            <div id="twitterstream">&nbsp;</div>
        </div>
    </div>
    
    <div id="flickr">
        <div class="sidebar-title">
            <span style="color:#F6F7ED; font-family: Arial; font-size: 20px; text-shadow:#6C6C63 0 2px 0">FLICKR</span> stream
        </div>
        <div class="sidebar-content" style="padding:10px; width:280px">
            <ul id="cbox" class="thumbs"></ul>
        </div>
    </div>
</div>