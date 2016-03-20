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
    <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
    <video id="example_video_1" class="video-js" width="640" height="264" controls="controls" preload="auto" poster="http://video-js.zencoder.com/oceans-clip.png">
      <source src="rtmp://lucasdagamerhd.tv/live/test" type="rtmp/mp4">
      <!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
      <object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash"
        data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
        <param name="allowfullscreen" value="true" />
        <param name="flashvars" value='config={"playlist":["http://video-js.zencoder.com/oceans-clip.png", {"url": "http://video-js.zencoder.com/oceans-clip.mp4","autoPlay":false,"autoBuffering":true}]}' />
        <!-- Image Fallback. Typically the same as the poster image. -->
        <img src="http://video-js.zencoder.com/oceans-clip.png" width="640" height="264" alt="Poster Image"
          title="No video playback capabilities." />
      </object>
    </video>
  </div>
  <!-- End VideoJS -->

</body>
</html>


<iframe src="http://static.u-pro.fr/vod/static/upro/player/uplayer/107/u-player.html?prot=rtmp&netConnection=rtmp://lucasdagamerhd.tv/live/test&source=rtmp://lucasdagamerhd.tv/live/test&live=1&chapter=disable&autoplay=1&scrubber=1&play=1&fullscreen=1&volume=1&time=1&bgColor=00000&controlColor=0,0,0,1&controlGradient=none&leftSliderColor=ffffff&rightSliderColor=ffffff&bufferSliderColor=000000&timeTextColor=ffffff&durationTextColor=787878&bgTooltipColor=000000&textTooltipColor=333333&buttonOverColor=ffffff" width="1280" height="720" border="0" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>