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
		background-color: rgba(165,102,255,0.7);
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
		
	}
	
</style>

<script>
function chk(pp)
	{
		if(pp.userid.value=="")
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
							return true;
	}
</script>

<form name="pkc" method="post" action="Login-Ok.php" onsubmit="return chk(this)">
<html>
	<div class="login">
		<input type="text" name="userid" placeholder="userid">
		<input type="password" name="pwd" placeholder="password">
		<button> Login </button>
		<p>
		<?php 
		$ch=$_GET['ch'];
		if($ch=='1')
		{
		?>
		일치하는 회원정보가 없습니다
		<?php
		}
		?>	
		</p>
	</div>
</html>
</form>

<?php
	include '../bottom.php';
?>