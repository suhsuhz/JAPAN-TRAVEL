<?php
	include '../top.php';
?>

<style>
	
	.login {
		width: 30%;
		margin: 2% auto;
		padding: 3% 0;
		text-align: center;
	}
	
	.login input {
		border: 0.5px solid white;
		background-color: rgba(255,255,255,0);
	}
	
	.login input, .login button {
		color: white;
		font-size: 1.5rem;
		text-align: center;
		margin: 2% auto;
		display: inline-block;
		height: 2rem;
		width: 98%;
	}
	
	.login>button {
		background-color: rgba(165,102,255,0.6);
		margin-top: 6%;
	}
	
	.login>p {
		margin-top: 1%;
		font-size: 0.8rem;
		color: rgba(255,0,0,0.8);
	}
	
	@media only screen and (min-width:150px) and (max-width:600px){
		.login {
			width: 90%;
	}
	
</style>
<script>
function chk(pp)
	{
		if(pp.userid.value.length<5||pp.userid.value.length>10)
			{
				document.getElementById('alarm').innerHTML="ID는 5자~10자로 입력해주세요";
				pp.userid.focus();
				return false;
			}
			else if(pp.pwd.value.length<5||pp.pwd.value.length>15)
				{
					document.getElementById('alarm').innerHTML="비밀번호는 5자~15자로 입력해주세요";
					pp.pwd.focus();
					return false;
				}
		
		else if(pp.userid.value=="")
			{
				alert("please check yuor userid");
				pp.userid.focus();
				return false;
			}
		
			else if(pp.pwd.value=="")
				{
					alert("please check yuor password");
					pp.pwd.focus();
					return false;
				}
					
					else if(pp.email.value=="")
						{
							alert("please check yuor e-mail");
							pp.email.focus();
							return false;
						}
						
						else
							alert("가입해주셔서 감사합니다! 로그인 화면으로 넘어갑니다. enjoy your travel :D");
							return true;
	}
</script>

<form name="pkc" method="post" action="Join-Ok.php" onsubmit="return chk(this)">
<html>
	<div class="login">
		<input type="text" name="userid" placeholder="userid">
		<input type="password" name="pwd" placeholder="password">
		<input type="email" name="email" placeholder="e-mail">
		<button> Join </button>
		<p id="alarm"></p>
	</div>
</html>
</form>	
	
<?php
	include '../bottom.php';
?>