<?php
	$a=$_POST['field1'];
	
	$b=$_POST['field2'];
	
	$co=mysqli_connect("127.0.0.1:3306","root","MYname143","friend");
	$r=mysqli_query($co,"select * from friend where username='$a'  and password='$b'");
	$rows=mysqli_num_rows($r);
	if($rows==1){
		$k=mysqli_fetch_array($r);
		echo "Welcome ".$a;
		session_start();
		$_SESSION['u1']=$a;
		header("location:home.php");

	}
	else{
		echo "Invalid user";
	}
	?>