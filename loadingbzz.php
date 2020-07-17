<?php
require_once('config.php');

try{
	$querry = 'INSERT INTO ';

header("Location: books.php");
}
catch (PDOException $e){
	echo("error"); echo $e;
}
