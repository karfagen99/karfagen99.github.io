<?php
//include("db.php");
include ("query/query_dev.php");
include("config.php");

$db = DB::getInstance();
$tag = $db->query_($query_select_all_from_tags);
$pages = $db->query_($query_select_all_page);
// $data = $db->get_p();
$d = $db->get_id($query_select_from_join_on);
$tags = $db->get_tag($query_select_tag_page);
?>
<!DOCTYPE html>
<html>
<head>
	<title>#DEV_</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style_books.css">
</head>
<?php include ("blocks/header.php");?>
<main role="main">

	<nav class="navbar  bg-dark justify-content-center">
		<div class="d-flex justify-content-center">
  <a href="index.php" class="navbar-brand text-white">Main page</a>
  <a href="https://steamcommunity.com/id/neshark/" class="navbar-brand text-white">Steam</a>
  <a href="https://vk.com/maybuk97" class="navbar-brand item text-white">Vk</a>
  <a href="https://github.com/karfagen99" class="navbar-brand item text-white ">Github</a>
  <a href="https://gitlab.com/Eyeofgod" class="navbar-brand item text-white ">Gitlab</a>
  <a href="#" class="navbar-brand item text-white">Books</a>
		</div>
  <form class="form-inline" method="post">
    <input class="form-control mr-sm-2 "  name="search1" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <a href="addpost.php"><button type="button" class="btn btn-outline-warning ml-2">Добавить запись</button></a>
  </form>

</nav>
<div class="main-tab">
	<div class="tag-bar">

		<div class="navbar  bg-dark justify-content-center">
            <?php 	foreach ($tag as $tag):?>
				<div class="d-flex justify-content-center">
						<a href="#" class="navbar-brand text-white"><?php echo $tag['name']; ?></a>
				</div>
            <?php endforeach; ?>
		</div>
	</div>
    <?php foreach($pages as $page): ?>
	<div class="content m-3">
		<div class="own mb-5">
		<div class="tab-bottom d-flex justify-content-between ">
			<div class="avatar ml-2">
				<img src="img/book.png" width="100" height="100">

				<div class="tag mt-2"><a class="bottom-tag text-white"><?php echo $page['tag_id'] ?></a></div>
			</div>
					<div class="description ml-3">
						<h1 class="text-area-field "><?php echo $page['text'];?></h1>
						<button type="button" class="btn btn-secondary btn-lg btn-block">Перейти</button>
					</div>
				</div>
			</div>
		</div>
    <?php endforeach; ?>
	</div>
</main>

<!--<a href="#" class="navbar-brand text-white">ff</a>
 <a href="#" class="navbar-brand item text-white">#tag</a>
 <a href="#" class="navbar-brand item text-white ">#tag</a>
 <a href="#" class="navbar-brand item text-white">#tag</a>-->
<?php include ("blocks/footer.php");?>
