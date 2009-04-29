<?php
/**
 * Sets everything up (establishes database connection, loads configuration file...).
 * Then it loads the necessary action.
 */

// more environment constant definitions
define('ACTION_DIR', BASE_DIR.'actions'.DIRECTORY_SEPARATOR);
define('TEMPLATE_DIR', BASE_DIR.'templates'.DIRECTORY_SEPARATOR);

// reading the configuration file
require BASE_DIR.'config.php';

// loading helper functions
require BASE_DIR.'helper.php';

// connecting to the database
$db = new PDO($cfg['db']['connection_string']);

// trying to identify the user via token in URL
$current_user = false;
if(!empty($_GET['session'])){
	// the user sent a token
	$stmnt = $db->prepare('SELECT * FROM user WHERE cookie_token = :token LIMIT 1');
	$stmnt->bindValue('token', $_GET['session'], PDO::PARAM_STR);
	if($stmnt->execute() == 1){
		// user found
		$current_user = $stmnt->fetch(PDO::FETCH_ASSOC);
	}
}

if($current_user === false){
	// if the user could not be identified, he now has to log in
	$action = 'login';
}elseif(empty($_GET['action'])){
	// the default action is showing the menu
	$action = 'menu';
}else{
	// user-specified action
	$action = $_GET['action'];
}

// if the client sends a X-Wap-Profile header, it is a mobile device
$mobile = array_key_exists('HTTP_X_WAP_PROFILE', $_SERVER);

// checking action against the whitelist of actions
if(in_array($action, $cfg['actions'])){
	// loading action code
	require ACTION_DIR.$action.'.php';
}else{
	// action is not in whitelist
	header('Status: 404 Not Found');
	require TEMPLATE_DIR.'error.php';
}