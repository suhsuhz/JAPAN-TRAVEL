<?php
	include '../top.php';
?>

<style>
	.logout {
		text-align: center;
	}
	.logout-img img {
		width: 24%;
		margin: 2% auto 0 auto;
		display: block;
	}
	.logout-img h2 {
		font-size: 0.8rem;
		color: rgba(255,255,255,0.7);
		margin-bottom: 3%;
	}
	
	.text p {
		color: rgba(255,255,255,1);
		margin-bottom: 1%;
	}
	
	.text a {
		text-decoration: none;
		margin: 1% 1%;
	}

</style>

<html>	
		<article class="logout">
			<div class="logout-img">
				<img src="/suhsuhz/JAPAN-TRAVEL/image/kobe.jpg" alt="일본사진">
				<h2>enjoy your travel</h2>
			</div>
			<div class="text">
				<p>정말 로그아웃 하시겠습니까?</p>
				<a href="Logout-Ok.php"><font color="red">YES</font></a>
				<a href="#">NO</a>
			</div>
		</article>
</html>
<?php
	include '../bottom.php';
?>