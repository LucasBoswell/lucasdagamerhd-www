<!-- first try HTML5 playback: if serving as XML, expand `controls` to `controls="controls"` and autoplay likewise -->
<!-- warning: playback does not work on iOS3 if you include the poster attribute! fixed in iOS4.0 -->
<video width="640" height="360" controls>
	<!-- MP4 must be first for iPad! -->
	<source src="rtmp://lucasdagamerhd.tv/live/test.MP4" type="video/mp4" /><!-- Safari / iOS video    -->
	<source src="rtmp://lucasdagamerhd.tv/live/test.OGV" type="video/ogg" /><!-- Firefox / Opera / Chrome10 -->
	<!-- fallback to Flash: -->
	<object width="640" height="360" type="application/x-shockwave-flash" data="__FLASH__.SWF">
		<!-- Firefox uses the `data` attribute above, IE/Safari uses the param below -->
		<param name="movie" value="__FLASH__.SWF" />
		<param name="flashvars" value="controlbar=over&amp;image=__POSTER__.JPG&amp;file=rtmp://lucasdagamerhd.tv/live/test.MP4" />
		<!-- fallback image. note the title field below, put the title of the video there -->
		<img src="__VIDEO__.JPG" width="640" height="360" alt="__TITLE__"
		     title="No video playback capabilities, please download the video below" />
	</object>
</video>


<iframe src="http://static.u-pro.fr/vod/static/upro/player/uplayer/107/u-player.html?prot=rtmp&netConnection=rtmp://lucasdagamerhd.tv/live/test&source=rtmp://lucasdagamerhd.tv/live/test&live=1&chapter=disable&autoplay=1&scrubber=1&play=1&fullscreen=1&volume=1&time=1&bgColor=00000&controlColor=0,0,0,1&controlGradient=none&leftSliderColor=ffffff&rightSliderColor=ffffff&bufferSliderColor=000000&timeTextColor=ffffff&durationTextColor=787878&bgTooltipColor=000000&textTooltipColor=333333&buttonOverColor=ffffff" width="1280" height="720" border="0" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>