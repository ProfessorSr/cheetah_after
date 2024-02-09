/**
 * This work, "Cheetah - https://www.cheetahwsb.com", is a derivative of "Dolphin Pro V7.4.2" by BoonEx Pty Limited - https://www.boonex.com/, used under CC-BY. "Cheetah" is licensed under CC-BY by Dean J. Bassett Jr.
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 */

(function( $ ){
	$.fn.dolEmbedly = function(options) {
        var o = $.extend({}, {'max-width':900}, options);
		var sEmbedlyKey = ch_get_param('sys_embedly_key');
		if(!sEmbedlyKey)
			return this;
        var eBox = $(this).parents('.wall-post-text, .dbContent, .boxContent');
        var iMaxWidth = eBox.size() ? eBox.innerWidth() : $(window).width() - 70;

        if (iMaxWidth > o['max-width']) iMaxWidth = o['max-width'];

		return this.each(function() {
			$(this).embedly({
                key: sEmbedlyKey,
                query: {maxwidth: iMaxWidth},
                // only videos/sound/images are supported, to generate own list goto http://embed.ly/tools/generator
                urlRe: /((https?:\/\/(.*yfrog\..*\/.*|www\.flickr\.com\/photos\/.*|flic\.kr\/.*|twitpic\.com\/.*|www\.twitpic\.com\/.*|twitpic\.com\/photos\/.*|www\.twitpic\.com\/photos\/.*|.*imgur\.com\/.*|twitgoo\.com\/.*|i.*\.photobucket\.com\/albums\/.*|s.*\.photobucket\.com\/albums\/.*|media\.photobucket\.com\/image\/.*|www\.mobypicture\.com\/user\/.*\/view\/.*|moby\.to\/.*|xkcd\.com\/.*|www\.xkcd\.com\/.*|imgs\.xkcd\.com\/.*|www\.asofterworld\.com\/index\.php\?id=.*|www\.asofterworld\.com\/.*\.jpg|asofterworld\.com\/.*\.jpg|www\.qwantz\.com\/index\.php\?comic=.*|23hq\.com\/.*\/photo\/.*|www\.23hq\.com\/.*\/photo\/.*|.*dribbble\.com\/shots\/.*|drbl\.in\/.*|.*\.smugmug\.com\/.*|.*\.smugmug\.com\/.*#.*|picasaweb\.google\.com.*\/.*\/.*#.*|picasaweb\.google\.com.*\/lh\/photo\/.*|picasaweb\.google\.com.*\/.*\/.*|img\.ly\/.*|www\.tinypic\.com\/view\.php.*|tinypic\.com\/view\.php.*|www\.tinypic\.com\/player\.php.*|tinypic\.com\/player\.php.*|www\.tinypic\.com\/r\/.*\/.*|tinypic\.com\/r\/.*\/.*|.*\.tinypic\.com\/.*\.jpg|.*\.tinypic\.com\/.*\.png|meadd\.com\/.*\/.*|meadd\.com\/.*|.*\.deviantart\.com\/art\/.*|.*\.deviantart\.com\/gallery\/.*|.*\.deviantart\.com\/#\/.*|fav\.me\/.*|.*\.deviantart\.com|.*\.deviantart\.com\/gallery|.*\.deviantart\.com\/.*\/.*\.jpg|.*\.deviantart\.com\/.*\/.*\.gif|.*\.deviantart\.net\/.*\/.*\.jpg|.*\.deviantart\.net\/.*\/.*\.gif|www\.fotopedia\.com\/.*\/.*|fotopedia\.com\/.*\/.*|photozou\.jp\/photo\/show\/.*\/.*|photozou\.jp\/photo\/photo_only\/.*\/.*|instagr\.am\/p\/.*|instagram\.com\/p\/.*|skitch\.com\/.*\/.*\/.*|img\.skitch\.com\/.*|www\.questionablecontent\.net\/|questionablecontent\.net\/|www\.questionablecontent\.net\/view\.php.*|questionablecontent\.net\/view\.php.*|questionablecontent\.net\/comics\/.*\.png|www\.questionablecontent\.net\/comics\/.*\.png|twitrpix\.com\/.*|.*\.twitrpix\.com\/.*|www\.someecards\.com\/.*\/.*|someecards\.com\/.*\/.*|some\.ly\/.*|www\.some\.ly\/.*|pikchur\.com\/.*|achewood\.com\/.*|www\.achewood\.com\/.*|achewood\.com\/index\.php.*|www\.achewood\.com\/index\.php.*|www\.whosay\.com\/.*\/content\/.*|www\.whosay\.com\/.*\/photos\/.*|www\.whosay\.com\/.*\/videos\/.*|say\.ly\/.*|ow\.ly\/i\/.*|mlkshk\.com\/p\/.*|lockerz\.com\/s\/.*|pics\.lockerz\.com\/s\/.*|d\.pr\/i\/.*|www\.eyeem\.com\/p\/.*|www\.eyeem\.com\/a\/.*|www\.eyeem\.com\/u\/.*|giphy\.com\/gifs\/.*|gph\.is\/.*|frontback\.me\/p\/.*|www\.fotokritik\.com\/.*\/.*|fotokritik\.com\/.*\/.*|vid\.me\/.*|galeri\.uludagsozluk\.com\/.*|gfycat\.com\/.*|tochka\.net\/.*|.*\.tochka\.net\/.*|4cook\.net\/recipe\/.*|.*youtube\.com\/watch.*|.*\.youtube\.com\/v\/.*|youtu\.be\/.*|.*\.youtube\.com\/user\/.*|.*\.youtube\.com\/.*#.*\/.*|m\.youtube\.com\/watch.*|m\.youtube\.com\/index.*|.*\.youtube\.com\/profile.*|.*\.youtube\.com\/view_play_list.*|.*\.youtube\.com\/playlist.*|www\.youtube\.com\/embed\/.*|youtube\.com\/gif.*|www\.youtube\.com\/gif.*|.*twitch\.tv\/.*|.*twitch\.tv\/.*\/b\/.*|www\.ustream\.tv\/recorded\/.*|www\.ustream\.tv\/channel\/.*|www\.ustream\.tv\/.*|ustre\.am\/.*|qik\.com\/video\/.*|qik\.com\/.*|qik\.ly\/.*|.*revision3\.com\/.*|.*\.dailymotion\.com\/video\/.*|.*\.dailymotion\.com\/.*\/video\/.*|collegehumor\.com\/video:.*|collegehumor\.com\/video\/.*|www\.collegehumor\.com\/video:.*|www\.collegehumor\.com\/video\/.*|telly\.com\/.*|www\.telly\.com\/.*|break\.com\/.*\/.*|www\.break\.com\/.*\/.*|vids\.myspace\.com\/index\.cfm\?fuseaction=vids\.individual&videoid.*|www\.myspace\.com\/index\.cfm\?fuseaction=.*&videoid.*|www\.metacafe\.com\/watch\/.*|www\.metacafe\.com\/w\/.*|blip\.tv\/.*\/.*|.*\.blip\.tv\/.*\/.*|video\.google\.com\/videoplay\?.*|.*viddler\.com\/v\/.*|liveleak\.com\/view\?.*|www\.liveleak\.com\/view\?.*|animoto\.com\/play\/.*|video214\.com\/play\/.*|dotsub\.com\/view\/.*|www\.overstream\.net\/view\.php\?oid=.*|www\.livestream\.com\/.*|new\.livestream\.com\/.*|www\.worldstarhiphop\.com\/videos\/video.*\.php\?v=.*|worldstarhiphop\.com\/videos\/video.*\.php\?v=.*|bambuser\.com\/v\/.*|bambuser\.com\/channel\/.*|bambuser\.com\/channel\/.*\/broadcast\/.*|www\.schooltube\.com\/video\/.*\/.*|bigthink\.com\/ideas\/.*|bigthink\.com\/series\/.*|sendables\.jibjab\.com\/view\/.*|sendables\.jibjab\.com\/originals\/.*|jibjab\.com\/view\/.*|www\.xtranormal\.com\/watch\/.*|socialcam\.com\/v\/.*|www\.socialcam\.com\/v\/.*|v\.youku\.com\/v_show\/.*|v\.youku\.com\/v_playlist\/.*|www\.snotr\.com\/video\/.*|snotr\.com\/video\/.*|www\.clipfish\.de\/.*\/.*\/video\/.*|www\.myvideo\.de\/watch\/.*|www\.vzaar\.com\/videos\/.*|vzaar\.com\/videos\/.*|www\.vzaar\.tv\/.*|vzaar\.tv\/.*|vzaar\.me\/.*|.*\.vzaar\.me\/.*|coub\.com\/view\/.*|coub\.com\/embed\/.*|www\.streamio\.com\/api\/v1\/.*|streamio\.com\/api\/v1\/.*|vine\.co\/v\/.*|www\.vine\.co\/v\/.*|www\.viddy\.com\/video\/.*|www\.viddy\.com\/.*\/v\/.*|www\.tudou\.com\/programs\/view\/.*|tudou\.com\/programs\/view\/.*|sproutvideo\.com\/videos\/.*|embed\.minoto-video\.com\/.*|iframe\.minoto-video\.com\/.*|play\.minoto-video\.com\/.*|dashboard\.minoto-video\.com\/main\/video\/details\/.*|api\.minoto-video\.com\/publishers\/.*\/videos\/.*|www\.brainshark\.com\/.*\/.*|brainshark\.com\/.*\/.*|23video\.com\/.*|.*\.23video\.com\/.*|goanimate\.com\/videos\/.*|brainsonic\.com\/.*|.*\.brainsonic\.com\/.*|lustich\.de\/videos\/.*|web\.tv\/.*|.*\.web\.tv\/.*|mynet\.com\/video\/.*|www\.mynet\.com\/video\/|izlesene\.com\/video\/.*|www\.izlesene\.com\/video\/|alkislarlayasiyorum\.com\/.*|www\.alkislarlayasiyorum\.com\/.*|59saniye\.com\/.*|www\.59saniye\.com\/.*|zie\.nl\/video\/.*|www\.zie\.nl\/video\/.*|app\.ustudio\.com\/embed\/.*\/.*|bale\.io\/.*|www\.allego\.com\/.*|clipter\.com\/c\/.*|sendvid\.com\/.*|www\.snappytv\.com\/.*|snappytv\.com\/.*|frankly\.me\/.*|streamable\.com\/.*|ticker\.tv\/v\/.*|videobio\.com\/playerjs\/.*|clippituser\.tv\/.*|www\.clippituser\.tv\/.*|www\.whitehouse\.gov\/photos-and-video\/video\/.*|www\.whitehouse\.gov\/video\/.*|wh\.gov\/photos-and-video\/video\/.*|wh\.gov\/video\/.*|www\.hulu\.com\/watch.*|www\.hulu\.com\/w\/.*|www\.hulu\.com\/embed\/.*|hulu\.com\/watch.*|hulu\.com\/w\/.*|.*crackle\.com\/c\/.*|www\.funnyordie\.com\/videos\/.*|www\.funnyordie\.com\/m\/.*|funnyordie\.com\/videos\/.*|funnyordie\.com\/m\/.*|www\.vimeo\.com\/groups\/.*\/videos\/.*|www\.vimeo\.com\/.*|vimeo\.com\/groups\/.*\/videos\/.*|vimeo\.com\/.*|vimeo\.com\/m\/#\/.*|player\.vimeo\.com\/.*|www\.ted\.com\/talks\/.*\.html.*|www\.ted\.com\/talks\/lang\/.*\/.*\.html.*|www\.ted\.com\/index\.php\/talks\/.*\.html.*|www\.ted\.com\/index\.php\/talks\/lang\/.*\/.*\.html.*|www\.ted\.com\/talks\/|.*nfb\.ca\/film\/.*|thedailyshow\.cc\.com\/videos\/.*|www\.thedailyshow\.com\/watch\/.*|www\.thedailyshow\.com\/full-episodes\/.*|www\.thedailyshow\.com\/collection\/.*\/.*\/.*|yahoo\.com\/movies\/.*|.*\.yahoo\.com\/movies\/.*|thecolbertreport\.cc\.com\/videos\/.*|www\.colbertnation\.com\/the-colbert-report-collections\/.*|www\.colbertnation\.com\/full-episodes\/.*|www\.colbertnation\.com\/the-colbert-report-videos\/.*|www\.comedycentral\.com\/videos\/index\.jhtml\?.*|www\.theonion\.com\/video\/.*|theonion\.com\/video\/.*|wordpress\.tv\/.*\/.*\/.*\/.*\/|www\.traileraddict\.com\/trailer\/.*|www\.traileraddict\.com\/clip\/.*|www\.traileraddict\.com\/poster\/.*|www\.trailerspy\.com\/trailer\/.*\/.*|www\.trailerspy\.com\/trailer\/.*|www\.trailerspy\.com\/view_video\.php.*|fora\.tv\/.*\/.*\/.*\/.*|www\.spike\.com\/video\/.*|www\.gametrailers\.com\/video.*|gametrailers\.com\/video.*|www\.koldcast\.tv\/video\/.*|www\.koldcast\.tv\/#video:.*|mixergy\.com\/.*|video\.pbs\.org\/video\/.*|www\.zapiks\.com\/.*|www\.trutv\.com\/video\/.*|www\.nzonscreen\.com\/title\/.*|nzonscreen\.com\/title\/.*|app\.wistia\.com\/embed\/medias\/.*|wistia\.com\/.*|.*\.wistia\.com\/.*|.*\.wi\.st\/.*|wi\.st\/.*|confreaks\.net\/videos\/.*|www\.confreaks\.net\/videos\/.*|confreaks\.com\/videos\/.*|www\.confreaks\.com\/videos\/.*|video\.allthingsd\.com\/video\/.*|videos\.nymag\.com\/.*|aniboom\.com\/animation-video\/.*|www\.aniboom\.com\/animation-video\/.*|grindtv\.com\/.*\/video\/.*|www\.grindtv\.com\/.*\/video\/.*|ifood\.tv\/recipe\/.*|ifood\.tv\/video\/.*|ifood\.tv\/channel\/user\/.*|www\.ifood\.tv\/recipe\/.*|www\.ifood\.tv\/video\/.*|www\.ifood\.tv\/channel\/user\/.*|logotv\.com\/video\/.*|www\.logotv\.com\/video\/.*|lonelyplanet\.com\/Clip\.aspx\?.*|www\.lonelyplanet\.com\/Clip\.aspx\?.*|streetfire\.net\/video\/.*\.htm.*|www\.streetfire\.net\/video\/.*\.htm.*|sciencestage\.com\/v\/.*\.html|sciencestage\.com\/a\/.*\.html|www\.sciencestage\.com\/v\/.*\.html|www\.sciencestage\.com\/a\/.*\.html|link\.brightcove\.com\/services\/player\/bcpid.*|bcove\.me\/.*|wirewax\.com\/.*|www\.wirewax\.com\/.*|canalplus\.fr\/.*|www\.canalplus\.fr\/.*|www\.vevo\.com\/watch\/.*|www\.vevo\.com\/video\/.*|pixorial\.com\/watch\/.*|www\.pixorial\.com\/watch\/.*|spreecast\.com\/events\/.*|www\.spreecast\.com\/events\/.*|showme\.com\/sh\/.*|www\.showme\.com\/sh\/.*|.*\.looplogic\.com\/.*|on\.aol\.com\/video\/.*|on\.aol\.com\/playlist\/.*|videodetective\.com\/.*\/.*|www\.videodetective\.com\/.*\/.*|khanacademy\.org\/.*|www\.khanacademy\.org\/.*|.*vidyard\.com\/.*|www\.veoh\.com\/watch\/.*|veoh\.com\/watch\/.*|.*\.univision\.com\/.*\/video\/.*|.*\.vidcaster\.com\/.*|muzu\.tv\/.*|www\.muzu\.tv\/.*|vube\.com\/.*\/.*|www\.vube\.com\/.*\/.*|.*boxofficebuz\.com\/video\/.*|www\.godtube\.com\/featured\/video\/.*|godtube\.com\/featured\/video\/.*|www\.godtube\.com\/watch\/.*|godtube\.com\/watch\/.*|mediamatters\.org\/mmtv\/.*|www\.clikthrough\.com\/theater\/video\/.*|www\.clipsyndicate\.com\/video\/playlist\/.*\/.*|www\.srf\.ch\/play\/.*\/.*\/.*\/.*\?id=.*|www\.mpora\.com\/videos\/.*|mpora\.com\/videos\/.*|vice\.com\/.*|www\.vice\.com\/.*|videodonor\.com\/video\/.*|api\.lovelive\.tv\/v1\/.*|www\.hurriyettv\.com\/.*|www\.hurriyettv\.com\/.*|video\.uludagsozluk\.com\/.*|www\.ign\.com\/videos\/.*|ign\.com\/videos\/.*|www\.askmen\.com\/video\/.*|askmen\.com\/video\/.*|video\.esri\.com\/.*|www\.zapkolik\.com\/video\/.*|.*\.iplayerhd\.com\/playerframe\/.*|.*\.iplayerhd\.com\/player\/video\/.*|plays\.tv\/video\/.*|espn\.go\.com\/video\/clip.*|espn\.go\.com\/.*\/story.*|abcnews\.com\/.*\/video\/.*|abcnews\.com\/video\/playerIndex.*|abcnews\.go\.com\/.*\/video\/.*|abcnews\.go\.com\/video\/playerIndex.*|washingtonpost\.com\/wp-dyn\/.*\/video\/.*\/.*\/.*\/.*|www\.washingtonpost\.com\/wp-dyn\/.*\/video\/.*\/.*\/.*\/.*|www\.boston\.com\/video.*|boston\.com\/video.*|www\.boston\.com\/.*video.*|boston\.com\/.*video.*|www\.facebook\.com\/photo\.php.*|www\.facebook\.com\/video\.php.*|www\.facebook\.com\/.*\/posts\/.*|fb\.me\/.*|www\.facebook\.com\/.*\/photos\/.*|www\.facebook\.com\/.*\/videos\/.*|cnbc\.com\/id\/.*\?.*video.*|www\.cnbc\.com\/id\/.*\?.*video.*|cnbc\.com\/id\/.*\/play\/1\/video\/.*|www\.cnbc\.com\/id\/.*\/play\/1\/video\/.*|cbsnews\.com\/video\/watch\/.*|plus\.google\.com\/.*|www\.google\.com\/profiles\/.*|google\.com\/profiles\/.*|www\.cnn\.com\/video\/.*|edition\.cnn\.com\/video\/.*|money\.cnn\.com\/video\/.*|today\.msnbc\.msn\.com\/id\/.*\/vp\/.*|www\.msnbc\.msn\.com\/id\/.*\/vp\/.*|www\.msnbc\.msn\.com\/id\/.*\/ns\/.*|today\.msnbc\.msn\.com\/id\/.*\/ns\/.*|msnbc\.msn\.com\/.*\/watch\/.*|www\.msnbc\.msn\.com\/.*\/watch\/.*|nbcnews\.com\/.*|www\.nbcnews\.com\/.*|multimedia\.foxsports\.com\/m\/video\/.*\/.*|msn\.foxsports\.com\/video.*|www\.globalpost\.com\/video\/.*|www\.globalpost\.com\/dispatch\/.*|theguardian\.com\/.*\/video\/.*\/.*\/.*\/.*|www\.theguardian\.com\/.*\/video\/.*\/.*\/.*\/.*|guardian\.co\.uk\/.*\/video\/.*\/.*\/.*\/.*|www\.guardian\.co\.uk\/.*\/video\/.*\/.*\/.*\/.*|bravotv\.com\/.*\/.*\/videos\/.*|www\.bravotv\.com\/.*\/.*\/videos\/.*|dsc\.discovery\.com\/videos\/.*|animal\.discovery\.com\/videos\/.*|health\.discovery\.com\/videos\/.*|investigation\.discovery\.com\/videos\/.*|military\.discovery\.com\/videos\/.*|planetgreen\.discovery\.com\/videos\/.*|science\.discovery\.com\/videos\/.*|tlc\.discovery\.com\/videos\/.*|video\.forbes\.com\/fvn\/.*|distrify\.com\/film\/.*|muvi\.es\/.*|video\.foxnews\.com\/v\/.*|video\.foxbusiness\.com\/v\/.*|www\.reuters\.com\/video\/.*|reuters\.com\/video\/.*|live\.huffingtonpost\.com\/r\/segment\/.*\/.*|video\.nytimes\.com\/video\/.*|www\.nytimes\.com\/video\/.*\/.*|nyti\.ms\/.*|www\.vol\.at\/video\/.*|vol\.at\/video\/.*|www\.spiegel\.de\/video\/.*|spiegel\.de\/video\/.*|www\.zeit\.de\/video\/.*|zeit\.de\/video\/.*|www\.rts\.ch\/play\/tv\/.*|soundcloud\.com\/.*|soundcloud\.com\/.*\/.*|soundcloud\.com\/.*\/sets\/.*|soundcloud\.com\/groups\/.*|snd\.sc\/.*|open\.spotify\.com\/.*|spoti\.fi\/.*|play\.spotify\.com\/.*|www\.last\.fm\/music\/.*|www\.last\.fm\/music\/+videos\/.*|www\.last\.fm\/music\/+images\/.*|www\.last\.fm\/music\/.*\/_\/.*|www\.last\.fm\/music\/.*\/.*|www\.mixcloud\.com\/.*\/.*\/|www\.radionomy\.com\/.*\/radio\/.*|radionomy\.com\/.*\/radio\/.*|www\.hark\.com\/clips\/.*|www\.rdio\.com\/#\/artist\/.*\/album\/.*|www\.rdio\.com\/artist\/.*\/album\/.*|www\.zero-inch\.com\/.*|.*\.bandcamp\.com\/|.*\.bandcamp\.com\/track\/.*|.*\.bandcamp\.com\/album\/.*|freemusicarchive\.org\/music\/.*|www\.freemusicarchive\.org\/music\/.*|freemusicarchive\.org\/curator\/.*|www\.freemusicarchive\.org\/curator\/.*|www\.npr\.org\/.*\/.*\/.*\/.*\/.*|www\.npr\.org\/.*\/.*\/.*\/.*\/.*\/.*|www\.npr\.org\/.*\/.*\/.*\/.*\/.*\/.*\/.*|www\.npr\.org\/templates\/story\/story\.php.*|huffduffer\.com\/.*\/.*|www\.audioboom\.com\/boos\/.*|audioboom\.com\/boos\/.*|boo\.fm\/b.*|www\.xiami\.com\/song\/.*|xiami\.com\/song\/.*|www\.saynow\.com\/playMsg\.html.*|www\.saynow\.com\/playMsg\.html.*|grooveshark\.com\/.*|radioreddit\.com\/songs.*|www\.radioreddit\.com\/songs.*|radioreddit\.com\/\?q=songs.*|www\.radioreddit\.com\/\?q=songs.*|www\.gogoyoko\.com\/song\/.*|hypem\.com\/premiere\/.*|bop\.fm\/s\/.*\/.*|clyp\.it\/.*|www\.dnbradio\.com\/.*|dnbradio\.com\/.*))|(https:\/\/(picasaweb\.google\.com.*\/.*\/.*#.*|picasaweb\.google\.com.*\/lh\/photo\/.*|picasaweb\.google\.com.*\/.*\/.*|skitch\.com\/.*\/.*\/.*|img\.skitch\.com\/.*|vidd\.me\/.*|vid\.me\/.*|gfycat\.com\/.*|.*youtube\.com\/watch.*|.*\.youtube\.com\/v\/.*|youtu\.be\/.*|.*\.youtube\.com\/playlist.*|www\.youtube\.com\/embed\/.*|youtube\.com\/gif.*|www\.youtube\.com\/gif.*|screen\.yahoo\.com\/.*\/.*|animoto\.com\/play\/.*|video214\.com\/play\/.*|www\.streamio\.com\/api\/v1\/.*|streamio\.com\/api\/v1\/.*|vine\.co\/v\/.*|www\.vine\.co\/v\/.*|mixbit\.com\/v\/.*|www\.brainshark\.com\/.*\/.*|brainshark\.com\/.*\/.*|23video\.com\/.*|.*\.23video\.com\/.*|brainsonic\.com\/.*|.*\.brainsonic\.com\/.*|www\.reelhouse\.org\/.*|reelhouse\.org\/.*|www\.allego\.com\/.*|clipter\.com\/c\/.*|app\.devhv\.com\/oembed\/.*|sendvid\.com\/.*|clipmine\.com\/video\/.*|clipmine\.com\/embed\/.*|clippituser\.tv\/.*|www\.clippituser\.tv\/.*|www\.vimeo\.com\/.*|vimeo\.com\/.*|player\.vimeo\.com\/.*|yahoo\.com\/movies\/.*|.*\.yahoo\.com\/movies\/.*|app\.wistia\.com\/embed\/medias\/.*|wistia\.com\/.*|.*\.wistia\.com\/.*|.*\.wi\.st\/.*|wi\.st\/.*|.*\.looplogic\.com\/.*|khanacademy\.org\/.*|www\.khanacademy\.org\/.*|.*vidyard\.com\/.*|.*\.stream\.co\.jp\/apiservice\/.*|.*\.stream\.ne\.jp\/apiservice\/.*|api\.lovelive\.tv\/v1\/.*|video\.esri\.com\/.*|mix\.office\.com\/watch\/.*|mix\.office\.com\/mix\/.*|mix\.office\.com\/embed\/.*|mix\.office\.com\/MyMixes\/Details\/.*|.*\.iplayerhd\.com\/playerframe\/.*|.*\.iplayerhd\.com\/player\/video\/.*|plays\.tv\/video\/.*|www\.facebook\.com\/photo\.php.*|www\.facebook\.com\/video\.php.*|www\.facebook\.com\/.*\/posts\/.*|fb\.me\/.*|www\.facebook\.com\/.*\/photos\/.*|www\.facebook\.com\/.*\/videos\/.*|plus\.google\.com\/.*|soundcloud\.com\/.*|soundcloud\.com\/.*\/.*|soundcloud\.com\/.*\/sets\/.*|soundcloud\.com\/groups\/.*|open\.spotify\.com\/.*|play\.spotify\.com\/.*|bop\.fm\/s\/.*\/.*|bop\.fm\/p\/.*|bop\.fm\/a\/.*|clyp\.it\/.*|sfx\.io\/.*)))/i
            });
		});
	};
})( jQuery );
