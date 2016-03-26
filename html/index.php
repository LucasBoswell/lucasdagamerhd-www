<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>LucasDaGamerHD.tv -CSGO, DayZ, And More</title>
	
	<!-- THEME HEAD -->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />		
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Play:400,700&amp;subset=latin,cyrillic-ext,greek,greek-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css' />
	
	<!-- JS HEAD -->
	<script src="js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- VIDEO.JS HEAD -->
	<link href="http://vjs.zencdn.net/5.8.0/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <script src="http://vjs.zencdn.net/5.8.0/video.js"></script>
	
	<!-- GOOGLE SIGN-IN HEAD -->
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="875623869607-hqd9eok3r385lrgvbvhoql1n416e9odn.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<!-- GOOGLE SIGN-IN SESSION SCRIPT -->
<script>
  function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	var profile = googleUser.getBasicProfile();
	console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	console.log('Full Name: ' + profile.getName());
	console.log('Given Name: ' + profile.getGivenName());
	console.log('Family Name: ' + profile.getFamilyName());
	console.log("Image URL: " + profile.getImageUrl());
	console.log("Email: " + profile.getEmail());

	// The ID token you need to pass to your backend:
	var id_token = googleUser.getAuthResponse().id_token;
	console.log("ID Token: " + id_token);
	
	document.getElementById('signedInAsName').innerText = "Signed in: " + profile.getName();
  };
  function signOut() {
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function () {
	  console.log('User signed out.');
	});
	document.getElementById('signedInAsName').innerText = "Not signed in";
  }
</script>

<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Shell -->
		<div class="shell">
			<!-- Header -->
			<div id="header">
				<div id="signedInAsName">Not signed in</div>
			    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
				<a href="" onclick="signOut();">Sign out</a>
				<div class="cl"></div>
			</div>
			<!-- END Header -->
			<!-- Navigation -->
			<div id="navigation">
				<ul>
					<li class="first"><a title="Home" href="#">Home</a></li>
					<li><a title="About" href="#">About </a></li>
					<li><a title="Services" href="#">Services</a></li>
					<li><a title="Projects" href="#">Projects</a></li>
				</ul>
				<div class="cl"></div>
			</div>
			<!-- END Navigation -->
			<!-- Slider -->
			<div style="display: table; margin: 0 auto;">
				<div id="slider" class="flexslider">
					<ul class="slides">
						<li>
							<img src="css/images/slide1.jpg"/>
						</li>
						<li>
							<img src="css/images/test.gif"/>
						</li>
						<li>
							<img src="css/images/slide2.jpg"/>
						</li>
					</ul>
				</div>
			</div>
			<!-- END Slider -->
			<!-- Video -->
			<p style="text-align: center; font-weight: bold; color: red; font-size: 52px;"></br>OFFLINE</br></br></p>
			<div id = "stream" style="display: table; margin: 0 auto;">
				<video id="my_video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="800" height="450" data-setup='{"loop": "true", "autoplay": true, "preload": "true"}'>
					<source src="rtmp://lucasdagamerhd.tv/live/test" type='rtmp/mp4'>
					<p class="vjs-no-js">
					  To view this video please enable JavaScript, and consider upgrading to a web browser that
					  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
					</p>
				</video>
			</div>
			<!-- End Video -->
			<div class="cl"></div></br>
			<!-- Footer -->
			<div id="footer">
				<p class="copy">Copyright 2016<span>|</span>LucasDaGamerHD.tv - All Rights Reserved.     </p>
				<div class="cl"></div>
			</div>
			<!-- END Footer -->
		</div>
		<!-- END Shell -->
	</div>
	<!-- END Wrapper -->
</body>
</html>