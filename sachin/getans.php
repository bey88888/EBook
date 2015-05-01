<?php
	$link=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($link,"bey");
	$user=$_POST['uname'];
	$q1="select * from question where username='$user'";
	$res=mysqli_query($link,$q1);
	while($r=mysqli_fetch_row($res)){
		echo $r[1]."==>".$r[2]."<br>";
	}
?>