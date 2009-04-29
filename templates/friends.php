<? require TEMPLATE_DIR.'layout_head.php'; ?>
<h1>Find a friend</h1>
<? if(count($friends) > 0){ ?>
<p>The following people are currently around.</p>
<table>
    <tr>
      <th>Who</th>
      <th>Where</th>
      <th>When</th>
    </tr>
<?
$i = 0;
foreach ($friends as $f){
$i++;
?>
    <tr<?= ($i%2 == 0)?' class="alt"':'' ?>>
      <td><?= $f['name']; ?></td>
      <td><a href="?action=pub&amp;pub_id=<?= $f['pub_id']; ?>&amp;<?= url_token() ?>"><?= $f['pub']; ?></a></td>
      <td><?= time_ago($f['timestamp']); ?></td>
    </tr>
<? } ?>
</table>
<?
}else{
	echo '<p>Everyone seems to be at home.</p>';
}
?>
<div id="nav"><?= menu_link() ?></div>
<? require TEMPLATE_DIR.'layout_foot.php'; ?>