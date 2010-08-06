<?php
/**
 * This file contains helper methods which are used in the templates.
 */

/**
 * Generates a human readable representation of the time passed between $timestamp and now.
 *
 * @param int $timestamp a unix timestamp
 * @return Human readable representation
 */
function time_ago($timestamp){
	$delta = floor((time() - $timestamp)/60); // minutes
	if($delta < 10){
		return 'now';
	}elseif($delta < 60){
		return $delta.'min';
	}else{
		return floor($delta/60).'h';
	}
}

/**
 * Generates a link to the main menu.
 *
 * @return link to the main menu
 */
function menu_link(){
	return '<a accesskey="0" href="?action=menu&amp;'.url_token().'">«menu</a>';
}

/**
 * Generates a url token (session=TOKEN).
 *
 * @return token that can be appended to the url. Don't forget the ampersand!
 */
function url_token(){
	return ($_GET['session'] !== false)?'session='.$_GET['session']:'';
}