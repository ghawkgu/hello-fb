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
<link rel="stylesheet" href="<?= preg_replace("/index\.php\?/", "", site_url("static/picnik/picnikbox_2_0.css")) ?>" media="screen" type="text/css" />
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
<p><a href="http://www.picnik.com/service/?_apikey=22f6c61c0b65a18c0fd53998f5ba5497&_expand_button=false&_import=http%3A//www.picnik.com/graphics/api/api_sample_1.jpg&_exclude=in&_close_target=<?= preg_replace("/index\.php\?/", "", site_url("static/picnik/picnikbox_close_2_0.html")) ?>&_export=<?= preg_replace("/index\.php\?/", "", site_url("picnik/export")) ?>" class="pbox" >Test PBOX</a></p>
<p><img id="editedImage" /></p>
<p><a href="javascript:void(0)" onclick="popUpPicnik();" >Pop up picnik window</a></p>
<p><br />Page rendered in {elapsed_time} seconds</p>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js">
  jQuery.noConflict(true);
</script>
<script type="text/javascript" src="<?= preg_replace("/index\.php\?/", "", site_url("static/picnik/picnikbox_2_0.js")) ?>">
PicnikBox.SetOverlayMargin(0);
</script>
<script type="text/javascript" >
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
  function popUpPicnik() {
      var url = "http://www.picnik.com/service/?_apikey=22f6c61c0b65a18c0fd53998f5ba5497&_expand_button=false&_import=http%3A//www.picnik.com/graphics/api/api_sample_1.jpg&_exclude=in&_close_target=<?= preg_replace("/index\.php\?/", "", site_url("picnik/close")) ?>&_export=<?= preg_replace("/index\.php\?/", "", site_url("picnik/export")) ?>&_export_method=GET&_export_agent=browser";
      window.open(url, "Editor", "status=0,toolbar=0,location=0,menubar=0,resizable=0,height=600,width=800");
  }
  function updateImage(url) {
      jQuery("#editedImage").attr("src", url);
  }
</script>
</body>
</html>
