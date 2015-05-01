<?php
	$link=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($link,"bey");
	$user=$_POST['username'];
	$ques=$_POST['question'];
	$ans=$_POST['answer'];
	$qq="select * from question";
	$res=mysqli_query($link,$qq);
	$a=0;
	while($r=mysqli_fetch_row($res)){
		if($r[0]==$user && $r[1]==$ques){
			$ins="update question set answer=\"$ans\" where username=\"$user\"";
			mysqli_query($link,$ins);
			echo "data updated successfully";
			$a=1;
		}
	}
	if($a==0){
		echo "enter correct username and question";
	}
?>