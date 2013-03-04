<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="copyright" content="Copyright 2013, All Rights Reserved" />
		
	<title>Incident Handler Tools</title>
	<script type="text/javascript" src="assets/functions.js"></script>
	<style type="text/css" title="currentStyle" media="screen">
			@import "/assets/main.css";
	</style>
	
</head>

<body>

	<div id="container">
		<div id="header">
			<h1>Incident Handler Tools</h1>
		</div>
		<div id="leftcolumn">
		<div id="content">
			<div id="ipstools">
				<dl>
					<dt>VirusTotal Lookup</dt>
					<dd><form action="https://www.virustotal.com/latest-scan/" id="vt-search-box">
						<input type="text" style="color: #adb4ba;" name="q" size="18" value="Hash/URL Value" onfocus="clearDefaultandCSS(this)" />
						<input type="submit" name="Submit" class="clsSearchButton" />
						</form>
					</dd>
					<dt>SNORT Rule Search</dt>
					<dd><form action="http://www.snort.org/search/results" id="rule-search-box">
									<input type="text" style="color: #adb4ba;" name="q" size="18" value="Signature ID" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									</form>
					</dd>
					<dt>Cisco's IPS Signature DB</dt>
					<dd><form method="post" action="logQueryTool.php">
									<input name="logNumber3" type="text" style="color: #adb4ba;" value="Signature ID" tabindex="1" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" tabindex="3" /><br />
									<input name="subLogNumber" type="text" style="color: #adb4ba;" value="SubSig ID" tabindex="2" onfocus="clearDefaultandCSS(this)" />
									<span style="font-size:.7em;"><em>(optional)</em></span>
									<input type="hidden" name="ARMED" value="3" />
									</form>
					</dd>
					<dt>Fortinet IPS Database</dt>
					<dd><form method="post" action="logQueryTool.php">
									<input name="logNumber5" type="text" style="color: #adb4ba;" value="Fortinet Sig IDs" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="ARMED" value="5" />
									</form>
					</dd>
					<dt>Sonic Wall FW/IPS</dt>
					<dd><form method="post" action="logQueryTool.php">
									<input name="logNumber6" type="text" style="color: #adb4ba;" value="SonicALERT" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="ARMED" value="6" />
									</form><br />
									<form method="post" action="logQueryTool.php">
									<input name="logNumber6" type="text" style="color: #adb4ba;" value="ApplicationALERT" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="ARMED" value="7" />
									</form>
					</dd>
				</dl>
			</div>
			<div id="logtools">
				<dl>
					<dt>Windows NT Event Logs</dt>
					<dd><form method="post" action="logQueryTool.php">
									<input name="logNumber1" type="text" style="color: #adb4ba;" value="Search NT Event Logs" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="ARMED" value="1" /><br />
									<span style="font-size: 0.7em;"><strong>Example:</strong> NTMICROSOFT-WINDOWS-SECURITY-AUDITING<span style="color:red;">4634</span></span><br />
									<span style="font-size: 0.7em;"><strong>Use:</strong> <span style="color:red;">4634</span></span><br />
									<span style="font-size: 0.7em;"><strong>Example:</strong> NTSECURITY<span style="color:red;">538</span></span><br />
									<span style="font-size: 0.7em;"><strong>Use:</strong> <span style="color:red;">538</span></span>
									</form>
					</dd>
					<dt>Cisco ASA Syslog IDs</dt>
					<dd><form method="post" action="logQueryTool.php">
									<input name="logNumber2" type="text" style="color: #adb4ba;" value="Search Syslog IDs" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="ARMED" value="2" />
									</form><span style="font-size:.7em;"><em>Enter 6-digit syslog ID only.</em></span>
					</dd>
				</dl>
			</div>
			<div id="generaltools">
				<dl>
					<dt>ARIN Whois Look Up</dt>
					<dd><form method="post" action="logQueryTool.php">
									<input name="logNumber4" type="text" style="color: #adb4ba;" value="A.B.C.D" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="ARMED" value="4" />
									</form>
					</dd>
					<dt>SANS Port/IP Look Up</dt>
					<dd><form action="http://isc.sans.edu/search.html" name="searchform" method="post">
									<input type="hidden" value="339442878c22dffc5a9247fb4c499d26d36b8a32" name="token" />
									<input type="text" style="color: #adb4ba;" value="Port or IP" name="ip" label="site/port/ip search" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="index" value="GO" />
									</form><span style="font-size:.7em;"><em>Port or IP trending tool.</em></span>
					</dd>
					<dt>*NIX Time Stamp Converter</dt>
					<dd><form method="post" action="nixtime.php">
									<input name="nixTime" type="text" style="color: #adb4ba;" value="21600" onfocus="clearDefaultandCSS(this)" />
									<input type="submit" name="Submit" class="clsSearchButton" />
									<input type="hidden" name="ARMED" value="1" />
									</form>
					</dd>
				</dl>
			</div>
			<hr />
			<div id="footer"><blockquote><a href="/privacypolicy.html">Privacy Policy</a> | Hosted by <a href="http://www.dreamhost.com/r.cgi?1411757">DreamHost</a> | Submit Pull Requests on <a href="https://github.com/vidkun/handlertools">GitHub</a></blockquote></div>
			</div>
		</div>
		</div>
		<div id="rightcolumn">
			<script type="text/javascript"><!--
			google_ad_client = "ca-pub-6028214744384250";
			/* HandlerTools Sidebar */
			google_ad_slot = "1607483478";
			google_ad_width = 160;
			google_ad_height = 600;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>
	</div>

</body>
</html>
