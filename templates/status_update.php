<? require TEMPLATE_DIR.'layout_head.php'; ?>
<h1>Update your status</h1>
<? if($last){ ?>
<p>Last status: <?= $last['name'] ?> (<?= time_ago($last['timestamp']) ?>)</p>
<? } ?>
<form action="?action=status" method="post">
  <p>
    <label for="pub">Current pub</label>
    <select name="pub_id" id="pub">
<? foreach($pubs as $p){ ?>
      <option value="<?= $p['id'] ?>"<?= ($last != false && $last['id'] == $p['id'])?' selected="selected"':'' ?>><?= $p['name'] ?></option>
<? } ?>      
    </select>
  </p>
  <p>
    <input type="submit" value="update" /> <a href="?action=menu">cancel</a>
  </p>
</form>
<div id="nav"><?= menu_link() ?></div>
<? require TEMPLATE_DIR.'layout_foot.php'; ?>