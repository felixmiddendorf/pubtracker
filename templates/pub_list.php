<? require TEMPLATE_DIR.'layout_head.php'; ?>
<h1>Pubs</h1>
<ol>
<? foreach($pubs as $p){ ?>
  <li>
<? if($p['people'] > 0){ ?>
    <a href="?action=pub&amp;pub_id=<?= $p['id']; ?>"><?= $p['name']; ?></a> <?= ($p['people'] != NULL)?'('.$p['people'].')':''; ?>
<? }else{ ?>
    <?= $p['name'] ?>
<? } ?>
  </li>
<? } ?>
</ol>
<div id="nav"><?= menu_link() ?></div>
<? require TEMPLATE_DIR.'layout_foot.php'; ?>