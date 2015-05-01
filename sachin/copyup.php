<?php
	$book=$_POST['book'];
	$auther=$_POST['auther'];
	$yop=$_POST['yop'];
	// echo $yop;
	$link=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($link,"bey");
	$in="insert into copyright (book,auther,yop) values ('$book','$auther','$yop')";
	$res=mysqli_query($link,$in);
	echo "Data Uploaded Successfully";
?>