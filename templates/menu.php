<? require TEMPLATE_DIR.'layout_head.php'; ?>
<h1>What now?</h1>
<ol>
  <li><a accesskey="1" href="?action=friend&amp;<?= url_token() ?>">Find a friend</a></li>
  <li><a accesskey="2" href="?action=pub&amp;<?= url_token() ?>">Go to a pub</a></li>
  <li><a accesskey="3" href="?action=status&amp;<?= url_token() ?>">Update status</a></li>
  <li><a accesskey="4" href="?action=logout">Logout</a></li>
</ol>
<? require TEMPLATE_DIR.'layout_foot.php'; ?>