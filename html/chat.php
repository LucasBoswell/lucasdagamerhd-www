<head>
	<title>Chat - Customer Module</title>
	<!-- JS HEAD -->
	<script src="js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- GOOGLE SIGN-IN HEAD -->
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="875623869607-hqd9eok3r385lrgvbvhoql1n416e9odn.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<style>
body {
    font:12px arial;
    color: #222;
    text-align:center;
    padding:35px; }
  
form, p, span {
    margin:0;
    padding:0; }
  
input { font:12px arial; }
  
a {
    color:#0000FF;
    text-decoration:none; }
  
    a:hover { text-decoration:underline; }
  
#wrapper, #loginform {
    margin:0 auto;
    padding-bottom:25px;
    background:#EBF4FB;
    width:504px;
    border:1px solid #ACD8F0; }
  
#loginform { padding-top:18px; }
  
    #loginform p { margin: 5px; }
  
#chatbox {
    text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:270px;
    width:430px;
    border:1px solid #ACD8F0;
    overflow:auto; }
  
#usermsg {
    width:395px;
    border:1px solid #ACD8F0; }
  
#submit { width: 60px; }
  
.error { color: #ff0000; }
  
#menu { padding:12.5px 25px 12.5px 25px; }
  
.welcome { float:left; }
  
.logout { float:right; }
  
.msgln { margin:0 0 2px 0; }
</style>

<script>
  function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	var profile = googleUser.getBasicProfile();

	// The ID token you need to pass to your backend:
	var id_token = googleUser.getAuthResponse().id_token;
	
	document.getElementById('welcome').innerText = "Welcome, " + profile.getName();
  };
  function signOut() {
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function () {
	  console.log('User signed out.');
	});
	document.getElementById('welcome').innerText = "Not signed in";
  }
  //If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
</script>

<body>

<div class="g-signin2" data-width="100" data-height="24" data-onsuccess="onSignIn" data-theme="dark"></div>
<a href="" onclick="signOut();">Sign out</a>
 
<div id="wrapper">
    <div id="menu">
        <p class="welcome"></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox"></div>
     
    <form name="message" action="post.php" method="get">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
</div>

</body>