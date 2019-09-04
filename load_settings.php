<?php
// PWS_STATE should be an absolute path
if (isset($_SERVER['PWS_STATE'])) {
  $PWS_STATE = $_SERVER['PWS_STATE'];
} else {
  $PWS_STATE = __DIR__ . '/jsondata';
}
$PWS_SETTINGS = $PWS_STATE . '/settings1.php';
if (! is_readable($PWS_SETTINGS)) {
  if (is_readable('./settings1.php') && is_writable($PWS_STATE)) {
    // migrate settings1 to new location
    copy('./settings1.php', $PWS_SETTINGS);
  }
}
if(is_readable($PWS_SETTINGS)) {
  include $PWS_SETTINGS;
}
