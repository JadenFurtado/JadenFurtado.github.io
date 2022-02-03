<!DOCTYPE html>
<html>
<head>
	<title>Attack examle</title>
</head>
<body>
	<script type="text/javascript">
		
			alert("1)User is redirected to my site through dirty link");
			alert("2)User is now prompted to signup/login to continue");
			alert("3)User enters email/password/credit card details");
			alert("4)Send user back to original site");
	</script>
	<div>
		<form>
			email<input type="text" name="email">
			<br>
			password<input type="password" name="password">
			<br>
			<input class="submit" type="submit" name="submit">
			<script type="text/javascript">
				$(".submit").on("click",function(){
					location.replace("http://animacreatives.com/");
				});
			</script>
		</form>
	</div>
</body>
</html>