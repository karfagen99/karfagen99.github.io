<?php
$host = 'localhost';
$database = 'dev_site'; 
$user = 'root'; 
$password = ''; 


$db = new PDO("mysql:host=$host; dbname=$database", $user, $password);

function get_page(){
	global $db;
	$pages = $db->query("SELECT * FROM page");
	return $pages;
}



function get_key($id){
	global $db;
	$tags = $db->query("SELECT * FROM tags WHERE id = $id");
	
 foreach ($tags as $tag) {

	return $tag;
}
}

function get_tag() {
	global $db;
	$row_tag = $db->query("SELECT name FROM tags");
	foreach ($row_tag as $tagg) {
		return $tagg;
	}
}



