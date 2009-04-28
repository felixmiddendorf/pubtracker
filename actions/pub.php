<?php
/**
 * Displays a list of pubs and the names of people who are currently in these pubs.
 */

if(empty($_GET['pub_id'])){
	// TODO Get this frickin' calculation right!
	$query = <<<SQL
				SELECT	p.id AS id, p.name AS name, COUNT(su.user_id) AS people
				FROM	pub p 
						LEFT OUTER JOIN status_update su ON (su.pub_id = p.id)
				WHERE	(su.timestamp IS NULL OR su.timestamp > :expired)
						--AND (su.user_id IS NULL OR su.user_id != :user_id)
				GROUP BY p.id, p.name
				ORDER BY people DESC, p.name
SQL;
	$stmnt = $db->prepare($query);
	$stmnt->bindValue('expired', time()-$cfg['update']['expires'], PDO::PARAM_INT);
	#$stmnt->bindValue(':user_id', $current_user['id'], PDO::PARAM_INT);
	$stmnt->execute();
	$pubs = $stmnt->fetchAll(PDO::FETCH_ASSOC);
	
	require TEMPLATE_DIR.'pub_list.php';
}else{
	$query = <<<SQL
				SELECT	u.name AS name, su.timestamp AS timestamp
				FROM	pub p
						INNER JOIN status_update su ON (p.id = su.pub_id)
						INNER JOIN user u ON (su.user_id = u.id)
				WHERE	su.timestamp > :expired AND
						p.id = :pub_id AND
						u.id != :user_id
				ORDER BY su.timestamp DESC;
SQL;
	$friendsStmnt = $db->query($query);
	$friendsStmnt->bindValue('expired', time()-$cfg['update']['expires'], PDO::PARAM_INT);
	$friendsStmnt->bindValue('pub_id', $_GET['pub_id'], PDO::PARAM_INT);
	$friendsStmnt->bindValue('user_id', $current_user['id'], PDO::PARAM_INT);
	$friendsStmnt->execute();
	
	$friends = $friendsStmnt->fetchAll(PDO::FETCH_ASSOC);
	
	$pubStmnt = $db->prepare('SELECT * FROM pub WHERE id = :id;');
	$pubStmnt->bindValue('id', $_GET['pub_id'], PDO::PARAM_INT);
	$pubStmnt->execute();
	
	$pub = $pubStmnt->fetch(PDO::FETCH_ASSOC);
	
	require TEMPLATE_DIR.'pub_detail.php';
}