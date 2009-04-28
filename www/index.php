<?php
// defining environment constants
define('BASE_DIR',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('WWW_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);

// loading front controller
require BASE_DIR.'front_controller.php';
?>