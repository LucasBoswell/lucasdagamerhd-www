<html>
<head>
  <meta charset="utf-8" />
  <title>Stream Test</title>

  <!-- Include the VideoJS Library -->
  <script src="video.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">

    // Add VideoJS to all video tags on the page when the DOM is ready
    VideoJS.setupAllWhenReady();

  </script>

  <!-- Include the VideoJS Stylesheet -->
  <link rel="stylesheet" href="video-js.css" type="text/css" media="screen" title="Video JS">
</head>
<body>

  <!-- Begin VideoJS -->
  <div class="video-js-box">	
	<video width="640" height="360" controls autoplay>
		<source src="rtmp://lucasdagamerhd.tv/live/test"  type="video/mp4" />
		<object width="640" height="360" type="application/x-shockwave-flash" data="rtmp://lucasdagamerhd.tv/live/test">
			<param name="movie" value="rtmp://lucasdagamerhd.tv/live/test" />
			<param name="flashvars" value="autostart=true&amp;controlbar=over&amp;image=__POSTER__.JPG&amp;file=rtmp://lucasdagamerhd.tv/live/test" />
			<img src="https://static.pexels.com/photos/4198/field-sport-ball-america.jpg" width="640" height="360" alt="JUST A WEE TEST" title="No video playback capabilities, please download the video below" />
		</object>
	</video>
  </div>
  <!-- End VideoJS -->

</body>
</html>


<!--<iframe src="http://static.u-pro.fr/vod/static/upro/player/uplayer/107/u-player.html?prot=rtmp&netConnection=rtmp://lucasdagamerhd.tv/live/test&source=rtmp://lucasdagamerhd.tv/live/test&live=1&chapter=disable&autoplay=1&scrubber=1&play=1&fullscreen=1&volume=1&time=1&bgColor=00000&controlColor=0,0,0,1&controlGradient=none&leftSliderColor=ffffff&rightSliderColor=ffffff&bufferSliderColor=000000&timeTextColor=ffffff&durationTextColor=787878&bgTooltipColor=000000&textTooltipColor=333333&buttonOverColor=ffffff" width="1280" height="720" border="0" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>-->