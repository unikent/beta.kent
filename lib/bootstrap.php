<?php
/**
 * Bootstrap Theme helper
 */

require_once $_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php";

// get config
if (file_exists(dirname(__FILE__)."/config.php")) {
	include dirname(__FILE__) . "/config.php";
}

include "theme-helper.php";
