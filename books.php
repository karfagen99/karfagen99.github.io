<?php
require_once 'bd.php'; 

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
  <a href="#" class="navbar-brand text-white">Steam</a>
  <a href="https://vk.com/maybuk97" class="navbar-brand item text-white">Vk</a>
  <a href="https://github.com/karfagen99" class="navbar-brand item text-white ">Github</a>
  <a href="#" class="navbar-brand item text-white">Books</a>
		</div>
  <form class="form-inline ">
    <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<div class="main-tab">
	
			
		


	
	<div class="tag-bar">
		<?php     
		$tage = get_tag();
		foreach ($tage as $gg): ?>
		<div class="navbar  bg-dark justify-content-center">

				<div class="d-flex justify-content-center">


  <a href="#" class="navbar-brand text-white">#<?php echo $gg?>;</a>



 <!-- <a href="#" class="navbar-brand text-white">#tag</a>
  <a href="#" class="navbar-brand item text-white">#tag</a>
  <a href="#" class="navbar-brand item text-white ">#tag</a>
  <a href="#" class="navbar-brand item text-white">#tag</a>-->
				</div>
<?php endforeach; ?>
		</div>	
	</div>








	<div class="content m-3">
		<?php 
		$page = get_page();
		foreach ($page as $pages): ?>
		<?php $tag = get_key($pages["tag_id"]);?>
		


		<div class="own mb-5">
		<div class="tab-bottom d-flex justify-content-between ">
			<div class="avatar ml-2">
				<img src="img/book.png" width="100" height="100">
				<div class="tag mt-2"><a class="bottom-tag text-white"><?php echo $tag["name"]; ?></a></div>
			</div>
					<div class="description ml-3">
						<h1 class="text-area-field "><?php echo $pages["text"]; ?></h1>

						<button type="button" class="btn btn-secondary btn-lg btn-block">Перейти</button>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		

	</div>

</main>
<?php include ("blocks/footer.php");?>