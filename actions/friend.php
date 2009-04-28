<?php
/**
 * Displays a list of all 'active' friends, i.e. friends whose status updates have not expired yet.
 */

$query = <<<SQL
	SELECT	u.name AS name, p.name AS pub, p.id AS pub_id, su.timestamp AS timestamp
	FROM	user u
			INNER JOIN status_update su ON (u.id = su.user_id)
			INNER JOIN pub p ON (p.id = su.pub_id)
	WHERE	su.timestamp > :expired AND
			u.id != :user_id
	ORDER BY u.name
SQL;

$stmnt = $db->prepare($query);
$stmnt->bindValue('expired', time()-$cfg['update']['expires'], PDO::PARAM_INT);
$stmnt->bindValue('user_id', $current_user['id'], PDO::PARAM_INT);
$stmnt->execute();

$friends = $stmnt->fetchAll(PDO::FETCH_ASSOC);

require TEMPLATE_DIR.'friends.php';