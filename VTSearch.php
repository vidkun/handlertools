<?php

require_once('VirusTotalApiV2.php');

/* Initialize the VirusTotalApi class. */
$api = new VirusTotalAPIV2('Your-API-key');

/*
function isValidMD5($md5 ='')
{
    return   preg_match('/^[a-f0-9]{32}$/', $md5);
}

function isURL($url)
{
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}
*/

/* Handle form data */
$query = $_POST["q"];

$report = $api->getURLReport($query);
$api->displayResult($report);
print($api->getTotalNumberOfChecks($report) . '<br>');
print($api->getNumberHits($report) . '<br>');
print($api->getReportPermalink($report, FALSE) . '<br>');

/* FAIL! WTF? */

?>