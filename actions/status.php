<?php
/**
 * Allows the user to update his status.
 */

if(count($_POST) == 0){
	$lastStmnt = $db->prepare('SELECT p.id AS id, p.name AS name, su.timestamp AS timestamp FROM status_update su INNER JOIN pub p ON (su.pub_id = p.id) WHERE su.user_id = :user_id AND su.timestamp > :expired ORDER BY timestamp DESC LIMIT 1;');
	$lastStmnt->bindValue('user_id', $current_user['id'], PDO::PARAM_INT);
	$lastStmnt->bindValue('expired', time()-$cfg['update']['expires'], PDO::PARAM_INT);

	$last = ($lastStmnt->execute() == 1)?$lastStmnt->fetch(PDO::FETCH_ASSOC):false;
	
	$pubs = $db->query('SELECT * FROM pub ORDER BY name;')->fetchAll(PDO::FETCH_ASSOC);

	require TEMPLATE_DIR.'status_update.php';
}else{
	// delete all exisiting status updates
	$deleteStmnt = $db->prepare('DELETE FROM status_update WHERE user_id = :user_id;');
	$deleteStmnt->bindValue('user_id', $current_user['id'], PDO::PARAM_INT);
	$deleteStmnt->execute();
	
	// a new status update is created
	$insertStmnt = $db->prepare('INSERT INTO status_update (pub_id, user_id, timestamp) VALUES (:pub_id, :user_id, :timestamp);');
	$insertStmnt->bindValue('user_id', $current_user['id'], PDO::PARAM_INT);
	$insertStmnt->bindValue('pub_id', $_POST['pub_id'], PDO::PARAM_INT);
	$insertStmnt->bindValue('timestamp', time(), PDO::PARAM_INT);
	$insertStmnt->execute();
	
	header('Location: ?action=menu');
}