<? require TEMPLATE_DIR.'layout_head.php'; ?>
<h1>Go to a pub</h1>
<ol>
<?
$i = 0;
foreach($pubs as $p){
	$i++;
?>
  <li>
	<? if($p['people'] > 0){ ?>
    <a accesskey="<?= $i ?>" href="?action=pub&amp;pub_id=<?= $p['id']; ?>&amp;<?= url_token() ?>"><?= $p['name']; ?></a> <?= ($p['people'] != NULL)?'('.$p['people'].')':''; ?>
	<? }else{ ?>
    <?= $p['name'] ?>
	<? } ?>
  </li>
<? } ?>
</ol>
<div id="nav"><?= menu_link() ?></div>
<? require TEMPLATE_DIR.'layout_foot.php'; ?>