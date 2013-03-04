<?php
/* 
 * This is the *NIX Time Converter.
 * 
 * The following form will calculate a human readable 
 * date and time.
 *
 */
 
if ($_POST[ARMED] == 1) {
function unix_timestamp_to_human ($timestamp = "", $format = 'D d M Y - H:i:s')
{
    if (empty($timestamp) || ! is_numeric($timestamp)) $timestamp = time();
    return ($timestamp) ? date($format, $timestamp) : date($format, $timestamp);
}

// $unix_time = "1251208071";

$OUT = unix_timestamp_to_human($_POST[nixTime]); //Return: Tue 25 Aug 2009 - 14:47:51 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="msthemecompatible" content="no" />
	<meta name="revisit-after" content="1 days" />
	<meta name="robots" content="NONE" />
	<meta name="language" content="en-us" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="copyright" content="Copyright 2011, All Rights Reserved" />
	<meta name="resource-type" content="document/html" />
	<title>Incident Handler Tools</title>
	<!-- The following line helps prevent slow loads from flashing the page "pre-CSS" -->
	<script type="text/javascript" src="/assets/functions.js"></script>
	<!-- basic CSS files kept external; import from assets directory -->
	<style type="text/css" title="currentStyle" media="screen">
		@import "assets/main.css";
	</style>
</head>
<body>
<div id="fixed">
	<div id="intro">
		<h1><span>Incident Handler Tools</span></h1>
	</div>
	<div id="content">
		<div id="title">
			<h1><span><a href="/" style="text-decoration: none">Incident Handler Tools</a></span></h1>
			<hr />
		</div>
		<div id="textBlock">
			<h3><span>*NIX Time Convertor</span></h3>
			<p><strong><b>Parsing Complete!</b></strong></p>
			<p style="font-family: Courier New, monospaced; font-size:12pt;"><?php echo $OUT ?></p>
			<p><a href="javascript:history.go(-1)"> - back - </a></p>
		</div>
		<div id="footer"></div>
	</div>
</div>
</body></html>
<?php
	} else {
?>
<html><head><title>*NIX Time Converter!</title></head><body><h1>FORM ERROR: ARMED VALUE INCORRECT</h1><p>Submit a pull request on <a href="https://github.com/vidkun/handlertools">GitHub</a></p></body></html>
<?php } ?>