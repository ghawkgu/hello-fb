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
<p><a id="testLink" href="http://www.picnik.com/service/?_apikey=22f6c61c0b65a18c0fd53998f5ba5497&_expand_button=false&_import=http%3A//www.picnik.com/graphics/api/api_sample_1.jpg&_exclude=in&_close_target=<?= preg_replace("/index\.php\?/", "", site_url("static/picnik/picnikbox_close_2_0.html")) ?>&_export=<?= preg_replace("/index\.php\?/", "", site_url("picnik/export")) ?>&_export_method=GET&_export_agent=browser" class="pbox" >Test PBOX</a></p>

<script type="text/javascript" src="<?= preg_replace("/index\.php\?/", "", site_url("static/picnik/picnikbox_2_0.js")) ?>">
PicnikBox.SetOverlayMargin(0);
function updateImage() {
    if (!!fileurl) {
        parent.updateImage(fileurl);
    }
}
</script>
<?php /*
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js">
    _jq = jQuery.noConflict(true);
    _jq(function(){
        _jq("#testLink").trigger("click");
    });
</script>
*/ ?>
</body>
</html>
