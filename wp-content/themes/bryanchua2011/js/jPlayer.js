// JavaScript Document
$(document).ready(function(){
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			title:"What Are Words (by Chris Medina)",
			oga:"../media/what_are_words.ogg"
		},
		{
			title:"Secrets (by OneRepublic)",
			oga:"../media/One_Republic___Secrets.ogg"
		},
		{
			title:"Good Life (by OneRepublic)",
			oga:"../media/onerepublic___good_life.ogg"
		},
		{
			title:"Your Guardian Angel (by The Red Jumpsuit Apparatus)",
			mp3:"../media/your_guardian_angel.mp3"
		},
		{
			title:"I Wanna Grow Old With You (by Adam Sandler)",
			mp3:"../media/Grow_Old_With_You.mp3"
		}
	], {
		swfPath: "../js",
		supplied: "oga, mp3",
		wmode: "window"
	});
	$("#jplayer_inspector_1").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});

});