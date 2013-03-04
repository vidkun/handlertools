<?php

require_once('VirusTotalApiV2.php');

/* Check if query is an MD5 hash */
function isValidMD5($md5 ='')
{
    return   preg_match('/^[a-f0-9]{32}$/', $md5);
}

/* Check if query is an URL */
function isURL($url)
{
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

/* Handle form data */
$query = $_POST["q"];

/*if(isValidMD5($query)){
	$report = $api->getFileReport($query);
	$api->displayResult($report);
	print('Submission Date: ' . $api->getSubmissionDate($report) . '<br>');
	print('Report Permalink: ' . $api->getReportPermalink($report, TRUE) . '<br>');
} */
if(isURL($query)){
	$report = $api->getURLReport($query);
	if($report == 0){
		$result = $api->scanURL($query);
		$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
		$api->displayResult($result);
	}
	else{
	$api->displayResult($report);
	print('Total Checks: ' . $api->getTotalNumberOfChecks($report) . '<br>');
	print('Number of Hits: ' . $api->getNumberHits($report) . '<br>');
	print('Report Permalink: ' . $api->getReportPermalink($report, FALSE) . '<br>');
	}
}
else{
	$report = $api->getFileReport($query);
	$api->displayResult($report);
	print('Submission Date: ' . $api->getSubmissionDate($report) . '<br>');
	print('Report Permalink: ' . $api->getReportPermalink($report, TRUE) . '<br>');
}


/* Initialize the VirusTotalApi class. */
$api = new VirusTotalAPIV2('Your-API-key');

/* Upload and scan a local file. */
/* $result = $api->scanFile('Relativ-path-to-a-local-file-to-scan'); */
/* $scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
/* $api->displayResult($result); */

/* Get a file report. */
$report = $api->getFileReport('Hash-of-a-file-to-check-for-a-report');
$api->displayResult($report);
print($api->getSubmissionDate($report) . '<br>');
print($api->getReportPermalink($report, TRUE) . '<br>');

/* Scan an URL. */
$result = $api->scanURL('URL-to-scan');
$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
$api->displayResult($result);

/* Get an URL report. */
$report = $api->getURLReport('URL-to-check-for-a-report');
$api->displayResult($report);
print($api->getTotalNumberOfChecks($report) . '<br>');
print($api->getNumberHits($report) . '<br>');
print($api->getReportPermalink($report, FALSE) . '<br>');

/* Comment on a file. */
/* $report = $api->makeComment('Hash-of-a-file-to-comment-on', 'Your-comment'); */
/* $api->displayResult($report); */

/* Comment on an URL. */
/* $report = $api->makeComment('URL-to-comment-on', 'Your-comment'); */
/* $api->displayResult($report); */
?>