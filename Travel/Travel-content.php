<?php
	include '../top.php';
?>

<style>
	.travel-content a {
		text-decoration: none;
	}

	.travel-content {
		text-align: center;
		margin: 5% 0;
	}
	
	article {
		display: inline-block;
		width: 47%;
		margin: 0 auto;		
		text-align: center;
	}
	
	article h2 {
		color: rgba(255,255,255,0.7);
		margin: 3% 0;
	}
	
	article img {
		width: 100%;
		height: 400px;
	}
	
	article p {
		color: rgba(153,0,133,0.7);
		font-weight: 600;
		padding-top: 1%;
		
	}
	
	.kansai {
		margin-right: 1%;
	}
	
	.mie {
		margin-left: 1%;
	}
	
	@media only screen and (min-width: 150px) and (max-width: 600px) {
	
		article {
			display: inline;
		}
	}
	
</style>

<html>
	<div class="travel-content">
	
		<article class="kansai">
			<a href="#">
				<h2>오사카, 교토, 나라를 모두 볼 수 있는 간사이</h2>
				<img src="../image/kansai.jpg" alt="간사이 사진">
				<p>travel to KANSAI</p>
			</a>
		</article>
	
		<article class="mie">
			<a href="#">
				<h2>사무라이의 고향 미에현</h2>
				<img src="../image/mie1.jpg" alt="미에현 사진">
				<p>travel to MIE</p>
			</a>	
		</article>
	
	</div>
</html>
<?php
	include '../bottom.php';
?>