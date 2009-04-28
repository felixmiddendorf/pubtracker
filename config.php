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
// expiration time of the session cookie
$cfg['login']['expires'] = 365*24*60*60;
// cookie name
$cfg['login']['cookie_name'] = 'token';
// allowed actions (whitelist)
$cfg['actions'] = array('login', 'logout', 'menu', 'pub', 'friend', 'status');
// expiration time of updates in seconds
$cfg['update']['expires'] = 4*60*60;
?>