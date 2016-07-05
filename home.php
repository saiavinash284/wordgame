<html>
	<head>
		<style>
			.back{
				background-color:yellow;
			}
			.h1{
				color:blue;
				font-size:50px;
				align:left;
			}
			.nav{
				text-align:right;
				color:skyblue;
				font-size:20px;
			}
		</style>
	</head>
	<body>
	<div class='back'>
	<div class="nav">
	<?php
		session_start();
		if(isset($_SESSION['u1']))
		echo $_SESSION['u1']."<br>";
		else
			header("location:sample.php");

		echo "<a href='logout.php'>Logout</a>";
	?></div>
	<div class='h1'>Friends List </div>
	<ol type='a'>
	
	<?php
		function invite($rec){
			$t=$_SESSION['u1'];
		$inv=mysqli_connect("127.0.0.1:3306","root","MYname143","invites");
		$rec=mysqli_query($inv,"insert into invites values('$t','$rec')");
	}
		$t=$_SESSION['u1'];
  		$c=mysqli_connect("127.0.0.1:3306","root","MYname143","list");
		$q=mysqli_query($c,"select * from list where name='$t'");
		while($s=mysqli_fetch_array($q))
		{
			echo "<li>".$s[1];
			echo "<input type='button' id='$s[1]' onclick='invite($s[1])' value='invite here'>"."</li>";
		}
	
	?></ol>
	</div>
	</body>
</html>