<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

	include_once "ez_sql_core.php";
	include_once "ez_sql_mysql.php";
	$db = new ezSQL_mysql('u453794882_king','gamabeta','u453794882_king','localhost'); 

	$song = $db->get_row("SELECT * FROM songs ORDER BY RAND() LIMIT 1");

	$artist = $song->artist;
	$songname = $song->title;
	$url = $song->url;
	$separator = '|';
	echo $url.$separator.$artist.$separator.$songname;
}

?>
