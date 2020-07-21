<?php
require_once "config.php";
$db = DB::getInstance(); 
 

?>

<main role="main">
<div class="wrapper">
	<nav class="navbar  bg-dark justify-content-center">
		<div class="d-flex justify-content-center">
	<a href="index.php" class="navbar-brand text-white">Main page</a>
  <a href="https://steamcommunity.com/id/neshark/" class="navbar-brand text-white">Steam</a>
  <a href="https://vk.com/maybuk97" class="navbar-brand item text-white">Vk</a>
  <a href="https://github.com/karfagen99" class="navbar-brand item text-white ">Github</a>
  <a href="https://gitlab.com/Eyeofgod" class="navbar-brand item text-white ">Gitlab</a>
  <a href="#" class="navbar-brand item text-white">Books</a><h1 class="warn">(in dev)</h1>
		</div>

  <form class="form-inline ">
    <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button><h1 class="warn">(in dev)</h1>
  </form>
</nav>

<div class="main-tab">
	<div class="container m-0 p-0">
		<div class="tab-info">
			<div class="d-flex justify-content-between">
				<div class="main-tab-info">
				<div class="d-flex flex-row mb-5">
					<div class="ava-info d-flex flex-row">
						<div class="avatar">
						<img src="img/adm.png" width="100" height="100">
						<div class="tab-bottom bg-dark d-flex flex-column">
						<a class="tab-bottom-tag text-danger">Administrator</a>
				</div>
			</div>
		</div>


				<div class="text-area d-flex flex-column">
				<h1 class="text-area-field ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>

				<button type="button" class="btn btn-secondary btn-lg btn-block">Перейти</button>

</div>





</main>
<script src="../base.js"></script>
<script src="../plugins/modal.js"></script>
<script src="../index.js"></script>
