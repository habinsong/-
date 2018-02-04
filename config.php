<?php
$ADMIN_INFO = NULL;
$DEFAULT_KEYBOARD = NULL;
// Update your base url.
define("BASE_URL", "http://ec2-13-124-24-51.ap-northeast-2.compute.amazonaws.com/");
// Only access kakao server or not.
define("IP_CHECK", TRUE);
// Show all warnings or not.
define("DEBUG", FALSE);

include_once __DIR__ . '/keyboard.config.php';
include_once __DIR__ . '/admin.config.php';
?>