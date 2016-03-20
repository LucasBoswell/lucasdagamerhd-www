<head>
<meta charset=utf-8 />
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2016 by mmcc (http://jsbin.com/cayake/2/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
<title>Video.js RTMP Example Embed</title>
  
  <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/4.11/video.js"></script>
  
</head>

<!-- first try HTML5 playback: if serving as XML, expand `controls` to `controls="controls"` and autoplay likewise -->
<!-- warning: playback does not work on iOS3 if you include the poster attribute! fixed in iOS4.0 -->
<video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640" height="268" 
  data-setup='{}'>
    <source src="rtmp://lucasdagamerhd.tv/live/test" type='rtmp/mp4'>
  </video>



<iframe src="http://static.u-pro.fr/vod/static/upro/player/uplayer/107/u-player.html?prot=rtmp&netConnection=rtmp://lucasdagamerhd.tv/live/test&source=rtmp://lucasdagamerhd.tv/live/test&live=1&chapter=disable&autoplay=1&scrubber=1&play=1&fullscreen=1&volume=1&time=1&bgColor=00000&controlColor=0,0,0,1&controlGradient=none&leftSliderColor=ffffff&rightSliderColor=ffffff&bufferSliderColor=000000&timeTextColor=ffffff&durationTextColor=787878&bgTooltipColor=000000&textTooltipColor=333333&buttonOverColor=ffffff" width="1280" height="720" border="0" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>