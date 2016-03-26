<?php
 function login(){
 session_start();
 $this->lib_include();
 $api = new Google_Client();
 $api->setApplicationName("LucasDaGamerHD");
 $api->setClientId('875623869607-hqd9eok3r385lrgvbvhoql1n416e9odn.apps.googleusercontent.com');
 $api->setClientSecret('w2lI2dmsHVJ7NmfgE0q5BkDe');
 $api->setAccessType('online');
 $api->setScopes(array('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'));
 $api->setRedirectUri('http://www.lucasdagamerhd.tv/login.php');
 $service = new Google_PlusService($api);
 $oauth2 = new Google_Oauth2Service($api);
 $api->authenticate();
 $_SESSION['token'] = $api->getAccessToken();
 if (isset($_SESSION['token'])) {
 $set_asess_token = $api->setAccessToken($_SESSION['token']);
 }
 if ($api->getAccessToken()) {
 $data = $service->people->get('me');
 $user_data = $oauth2->userinfo->get(); 
 echo $user_data;
 ?>
