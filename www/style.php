<?php
header('Content-type: text/css');
// date far in the future
header('Expires: '.gmdate("D, d M Y H:i:s", time()+365*24*60*60).' GMT');

ob_start("compress");
/**
 * Compresses all CSS
 */
function compress($buffer) {
  // remove all comments
  $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
  // remove all tabs, spaces, newlines, etc.
  $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    ', '      ', '       '), '', $buffer);
  return $buffer;
}
?>

*{
	font-size: small;
	}

body{
	margin: 0px;
	padding: 0px;
	background-color: #FFF0A5;
	font-family: sans-serif;
	}

div#header{
	color: #FFF;
	background-color: #4C1B1B;
	border-bottom: 1px solid #333;
	font-weight: bold;
	padding: 2px 7px;
	text-align: center;
}

div#content{
	padding: 2px 7px;
}

div#nav{
	text-align: center;
}

h1{
	font-size: medium;
	font-weight: bold;
	}

label{
	display: block;
}

td, th {
	font-weight: normal;
	margin: 0px;
	padding: 0px;
	}

th, tr.alt td{
	background-color: #000;
	color: #FFF;
}

<?
ob_end_flush();
?>