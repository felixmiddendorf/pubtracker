<?
if($mobile){
	header('Content-Type: application/xhtml+xml; charset=utf-8');
?>
<?= '<?xml version="1.0" encoding="utf-8"?>'."\n"; ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?
}else{
	header('Content-Type: application/vnd.wap.xhtml+xml; charset=utf-8');
?>
<?= '<?xml version="1.0" encoding="utf-8"?>'."\n"; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<? } ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title><?= ($current_user)?$current_user['name']:'PubTracker'; ?></title>
  <link rel="stylesheet" type="text/css" href="./style.css" media="all" />
</head>
<body>
<div id="header">
  PubTracker
</div>
<div id="content">