<? require TEMPLATE_DIR.'layout_head.php'; ?>
<h1>Login</h1>
<p><?= (!empty($message))?$message:'Please log in.'; ?></p>
<form action="?action=login" method="post">
  <p>
    <label for="user_name">Username</label>
    <input type="text" name="user_name" id="user_name" />
  </p>
  <p>
    <label for="user_password">Password</label>
    <input type="password" name="user_password" id="user_password" />
  </p>
  <p>
    <input type="submit" value="login" />
  </p>
</form>
<div id="nav"><?= menu_link() ?></div>
<? require TEMPLATE_DIR.'layout_foot.php'; ?>