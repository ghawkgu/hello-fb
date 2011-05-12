<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Access Info</title>

<style type="text/css">
body {
	background-color: #fff;
	margin: 40px;
	font-family: Lucida Grande, Verdana, Sans-serif;
	font-size: 14px;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 16px;
	font-weight: bold;
	margin: 24px 0 2px 0;
	padding: 5px 0 6px 0;
}

code {
	font-family: Monaco, Verdana, Sans-serif;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}
</style>
<link rel="stylesheet" href="<?= site_url("static/picnik/picnikbox_2_0.css") ?>" media="screen" type="text/css" />
</head>
<body>
<div id="fb-root"></div>
<h1>Request data</h1>
<h2>Signed request data</h2>

<pre>
<?= $signed_request?>
<?php var_dump($sr)?>
</pre>
<pre>
<?php var_dump($user_info)?>
</pre>
<pre>
<?php var_dump($raw_sr)?>
</pre>

<p><a href="javascript:void(0)" onclick="doAuth();" >Click here to test the OAuth</a></p>
<p><a href="http://www.picnik.com/service/?_api_key=22f6c61c0b65a18c0fd53998f5ba5497&_close_target=<?= site_url("static/picnik/picnikbox_close_2_0.html") ?>" class="pbox" >Test PBOX</a></p>

<p><br />Page rendered in {elapsed_time} seconds</p>

<script type="text/javascript" src="<?= site_url("static/picnik/picnikbox_2_0.js") ?>"></script>
<script>
  signedRequest = <?= $signed_request?>;
  window.fbAsyncInit = function() {
    FB.init({appId: '<?= $appinfo['id']?>', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/' + 'en_US' +'/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());

  function doAuth() {
      top.location.href = document.location.protocol + '//www.facebook.com/dialog/oauth/?scope=email,user_birthday,user_about_me&client_id=<?= $appinfo['id']?>&redirect_uri=' + document.location.protocol + '//apps.facebook.com/ghk_pages/&response_type=token&display=page';
  }
</script>
</body>
</html>
