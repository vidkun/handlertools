<?php
/* 
 * 
 * The three search forms on this page will be used to facilitate
 * faster searching of the related databases to retrieve more details
 * given said alarm. Each form builds a URL which includes "GET"
 * information or an anchor tag, so as to navigate directly to the
 * wanted results.
 * 
 */
 
switch ($_POST[ARMED]) {
    case 1:
		// "Windows NT Events Logs" was queried. Redirect a new header
		// to include form input.
		header("location: http://www.ultimatewindowssecurity.com/securitylog/encyclopedia/event.aspx?eventid=" . $_POST[logNumber1]);
        break;
    case 2:
        // "ASA Syslog ID" was queried. Redirect a new header to
		// include form input. Disclaimer: BIG page to load upon
		// redirect; redirect may not happen until fully loaded on some
		// browsers.
		header("location: http://www.cisco.com/en/US/docs/security/asa/asa84/system/message/logmsgs.html#" . $_POST[logNumber2]);
        break;
    case 3:
		// "Cisco's IPS NSDB" was queried. Redirect a new header to
		// include form input and subsig info if included.
		$x = $_POST[subLogNumber];
		if ( empty($_POST[subLogNumber]) )
			header("location: http://tools.cisco.com/security/center/viewIpsSignature.x?signatureId=" . $_POST[logNumber3]);
		else if ( $x == 'SubSig ID' )
			header("location: http://tools.cisco.com/security/center/viewIpsSignature.x?signatureId=" . $_POST[logNumber3]);
		else if ( !empty($_POST[subLogNumber]) )
			header("location: http://tools.cisco.com/security/center/viewIpsSignature.x?signatureId=" . $_POST[logNumber3] . "&signatureSubId=" . $_POST[subLogNumber]);
		else
			header("location: http://172.16.0.10/");
       break;
	case 4:
		// ARIN IP Lookup
		header("location: http://whois.arin.net/rest/ip/" . $_POST[logNumber4]);
		break;
    case 5:
		// "Fortinet IPS Database Search" was queried. Redirect a new header
		// to include form input.
		header("location: http://www.fortinet.com/ids/VID" . $_POST[logNumber5]);
        break;
    case 6:
		// "SonicWall IPS Signature Database" was queried. Redirect a new
		// header to include form input.
		header("location: https://www.mysonicwall.com/sonicalert/searchresults.aspx?ev=sig&sigid=" . $_POST[logNumber6]);
        break;
    case 7:
		// "SonicWall IPS Signature Database" was queried. Redirect a new
		// header to include form input.
		header("location: http://software.sonicwall.com/applications/ips/index.asp?ev=sig&sigid=" . $_POST[logNumber6]);
        break;
    case 8:
		// "ISC Port Look Up" was queried. Redirect a new
		// header to include form input.
		header("location: http://www.speedguide.net/port.php?port=" . $_POST[logNumber8]);
        break;
	default:
		// Closing PHP script. The following (x)HTML is being included
		// in the default case. Will be put to the output buffer and
		// shown on browser window.
		// DO NOT FORGET TO REOPEN PHP AND CLOSE THIS SWITCH CASE!
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Incident Handler Tools</title>

	<!-- The following line helps prevent slow loads from flashing the page "pre-CSS" -->
	<script type="text/javascript"></script>
	
	<!-- basic CSS files kept external; import from assets directory -->
	<style type="text/css" title="currentStyle" media="screen">
		@import "assets_10.0.16.172/069.css";
	</style>
	
</head>
<body>
<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>Incident Handler Tools</span></h1>
			<h2><span>Investigate logs and syslog IDs.</span></h2>
		</div>
		<div id="quickSummary">
			<p class="p1"><span>Incident Handler Tools! Investigate logs and syslog IDs.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="preamble">
			<h3><span>Windows NT Event Logs</span></h3>
			<form method="post" action="<?php echo $_SERVER[PHP_SELF] ?>">
				<p>Enter the digits of the NTSECURITY alert only.</p>
				<!-- http://www.ultimatewindowssecurity.com/securitylog/encyclopedia/event.aspx?eventid= -->
				<p><input type="text" size="12" maxlength="12" name="logNumber"><br />
				<input type="submit" value="submit" name="submit"></p>
				<input type="hidden" name="ARMED" value="1" />
			</form>
			<p><br /></p><p><br /></p>
		</div>

		<div id="participation">
			<h3><span>ASA Syslog ID</span></h3>
			<form method="post" action="<?php echo $_SERVER[PHP_SELF] ?>">
				<p>Enter 6-digit syslog ID only.</p>
				<!-- http://www.cisco.com/en/US/docs/security/asa/asa80/system/message/logmsgs.html# -->
				<p><input type="text" size="12" maxlength="12" name="logNumber"><br />
				<input type="submit" value="submit" name="submit"></p>
				<input type="hidden" name="ARMED" value="2" />
			</form>
			<p><br /></p><p><br /></p>
		</div>

		<div id="benefits">
			<h3><span>Cisco's IPS NSDB</span></h3>
			<form method="post" action="<?php echo $_SERVER[PHP_SELF] ?>">
				<p>Input signature ID number. The subsignature is 0 if left blank.</p>
				<!-- http://tools.cisco.com/security/center/viewIpsSignature.x?signatureId=3030&signatureSubId=0 -->
				<p>Signature ID: <input type="text" size="12" maxlength="12" name="logNumber"><br />
				Subsignature ID: <input type="text" size="12" maxlength="12" name="subLogNumber"><span style="color: #F00; font-style: italic">(*optional)</span><br />
				<input type="submit" value="submit" name="submit"></p>
				<input type="hidden" name="ARMED" value="3" />
			</form>
			<p><br /></p><p><br /></p>
		</div>
		<div id="footer"><blockquote><a href="/privacypolicy.html">Privacy Policy</a> | Hosted by <a href="http://www.dreamhost.com/r.cgi?1411757">DreamHost</a> | Submit Pull Requests on <a href="https://github.com/vidkun/handlertools">GitHub</a></blockquote></div>
	</div>
</div>
</body>
</html>
<?php } ?>