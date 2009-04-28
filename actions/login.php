<?php
/**
 * Authentication logic.
 */

if(count($_POST) > 0 && !empty($_POST['user_name']) && !empty($_POST['user_password'])){
	$stmnt = $db->prepare('SELECT * FROM user WHERE name = :name LIMIT 1;');
	$stmnt->bindValue(':name', strtolower($_POST['user_name']), PDO::PARAM_STR);
	if(($stmnt->execute() == 1) && ($user = $stmnt->fetch(PDO::FETCH_ASSOC)) && ($user['password_hash'] == md5($_POST['user_password'].$user['password_salt']))){
		// correct credentials
		// generate a session token which will be used to identify the user
		$token = md5(microtime().$_POST['user_name']);
		// store it in the database
		$token_stmnt = $db->prepare('UPDATE user SET cookie_token = :token WHERE id = :id;');
		$token_stmnt->bindValue(':token', $token, PDO::PARAM_STR);
		$token_stmnt->bindValue(':id', $user['id'], PDO::PARAM_INT);
		$token_stmnt->execute();	
		// redirect to homepage
		header('Location: ?action=menu&session='.$token);
	}else{
		$message = 'Wrong username or password. Please try again.';
		require TEMPLATE_DIR.'login_form.php';
	}
}else{
	require TEMPLATE_DIR.'login_form.php';
}