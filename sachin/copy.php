<?php
	$link=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($link,"bey");
	$q1="select * from copyright";
	$res=mysqli_query($link,$q1);
	echo "<b>Book Name</b>"."--------------"."<b>Auther Name</b>"."---------------"."<b>Year Of Publication</b><br>";
	while($r=mysqli_fetch_row($res)){
		echo $r[0]."--------------".$r[1]."---------------".$r[2]."<br>";
	}
?>