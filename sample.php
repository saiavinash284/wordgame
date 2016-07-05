<?php
	
	session_start();
	if(isset($_SESSION['u1'])){
		header("location:home.php");
	}
?>
<html>
	<head>
		<style>
			.h1{
				color:blue;
				text-align:center;
				font-size:100px;
			}
			.n{
				color:blue;
				text-align:center;
				font-size:40px;
			}
			.pic1{
				float:left;
			}
			.pic2{
				float:right;
			}
			.back{
				background-color:yellow;
			}
		</style>
	</head>
<body>
<div class='back'>
<fieldset>
	<legend>Login Form</legend>
	<div class=pic1><img src='img\b.png' alt="hai" ></div>
	<div class=pic2><img src='img\c.jpg' alt="hai" ></div>
	<div class=h1><u>Welcome</u></div>

	<div class=n>
		<form action='data.php' method='POST'>
			<br>Username:<input type='text' name='field1'/><br>
			<pre>Password:<input type='password' name='field2'/><br></pre>
			<input type='submit' value='Submit'>
		</form>
	</div>
</fieldset>
</div>
</body>
</html>