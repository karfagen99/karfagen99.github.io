<?php
$host = 'localhost';
$db_name = 'dev_site';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$driver = 'mysql';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try{
	$pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",$db_user,$db_pass,$options);
}catch(PDOException $e){
	die("GG");
}
$result = $pdo->query("SELECT * FROM tags");









//function get_page()

//	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
//		echo $row['name'];}
//	}












//$sql = 'SELECT * FROM tags WHERE name = :name';
//$stmt = $pdo->prepare($sql);
//$stmt->execute( [':name' => 'it']);
//$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
//echo '<pre>';
//var_dump($rows);
