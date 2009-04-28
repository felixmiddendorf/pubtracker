<? require TEMPLATE_DIR.'layout_head.php'; ?>
<h1>Pub: <?= $pub['name'] ?></h1>
<? if(count($friends) > 0){ ?>
<ul>
<? foreach($friends as $f){ ?>
  <li><?= $f['name']; ?> (<?= time_ago($f['timestamp']); ?>)</li>
<? } ?>
</ul>
<?
}else{
	echo '<p>No one there.</p>';	
}
?>
<div id="nav"><?= menu_link() ?> <a href="?action=pub&amp;<?= url_token() ?>">‹pubs</a></div>
<? require TEMPLATE_DIR.'layout_foot.php'; ?>