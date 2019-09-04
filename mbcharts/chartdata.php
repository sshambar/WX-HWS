<?php
require_once(dirname(__DIR__).'/load_settings.php');
if(! isset($_GET['csv'])) { die(); }
// Strict filter for filename...
$file = preg_replace('/[^a-z0-9_\-]/', '', $_GET['csv']);
if(empty($file)) { die(); }
// file from chartdata only...
$filename = $PWS_STATE . '/chartdata/' . $file . '.csv';
// check if it exists, access, etc
if(! is_file($filename)) { http_response_code(404); die(); }
if(! is_readable($filename)) { http_response_code(403); die(); }
$stat = @stat($filename);
$etag = sprintf('%x-%x-%x', $stat['ino'], $stat['size'], $stat['mtime'] * 1000000);

// still valid?
if(isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $etag) {
  header('Etag: "' . $etag . '"');
  http_response_code(304);
  die();
}
if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $stat['mtime']) {
  header('Last-Modified: ' . date('r', $stat['mtime']));
  http_response_code(304);
  die();
}

// send the file...
// CSV file
header('Content-Type: text/csv');

// File metadata
header('Last-Modified: ' . date('r', $stat['mtime']));
header('Etag: "' . $etag . '"');

//No cache
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');

//Define file size
header('Content-Length: ' . $stat['size']);

ob_clean();
flush();
if(@readfile($filename) === false) {
  http_response_code(403);
  die();
}
