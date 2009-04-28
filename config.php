<?php
/**
 * This is the configuration file.
 */

/**
 * Globally accessible array which holds the configuration
 */
$cfg = array();
// PDO connection string
$cfg['db']['connection_string'] = 'sqlite:'.BASE_DIR.'/db/data.db';
// allowed actions (whitelist)
$cfg['actions'] = array('login', 'logout', 'menu', 'pub', 'friend', 'status');
// expiration time of updates in seconds
$cfg['update']['expires'] = 4*60*60;
?>