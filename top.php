<?php
session_start();
?>

<!doctype html>
<html>
  <head>
      <title>Travel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="/suhsuhz/JAPAN-TRAVEL/style.css">
  </head>

<body>
	
	<div id="wrapper">
	
	<header>
		<main id="main">
			<a href="/suhsuhz/JAPAN-TRAVEL/">
			<img src="https://user-images.githubusercontent.com/31497805/33162943-62e90242-d06f-11e7-8d9a-8dbe4d0bbdba.jpg" alt="메인사진">
			</a>
		</main>
		
		<nav>
			<ul>
				<li class="active"><a href="/suhsuhz/JAPAN-TRAVEL/">home</a></li>
				<li><a href="/suhsuhz/JAPAN-TRAVEL/Travel/Travel-content.php">travel</a></li>
				<li><a href="#">transpass</a></li>
				<li><a href="#">QnA</a></li>
			</ul>
		</nav>
	</header>
	<?php
	if($_SESSION["userid"]=="") {
	?>	
	<aside>
		<div class="member">
			<a href="/suhsuhz/JAPAN-TRAVEL/Login/Login-content.php">로그인</a>
			<a href="/suhsuhz/JAPAN-TRAVEL/Join/Join-content.php">회원가입</a>
		</div>
	</aside>
	<?php
	}
	else {
	?>
	<aside>
		<div class="member">
			<a href="#">회원정보</a>
			<a href="/suhsuhz/JAPAN-TRAVEL/Logout/Logout.php">로그아웃</a>
		</div>
	</aside>	
	<?php
	}
	?>