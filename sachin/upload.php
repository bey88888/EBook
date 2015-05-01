<?php
	$target_path = "rathor/";
	$target_path = $target_path . basename( $_FILES['rathorfile']['name']);
	// echo $_FILES['rathorfile']['name'];
	$len=strlen($_FILES['rathorfile']['name']);
	// echo $len;
	$alias=$_FILES['rathorfile']['name'];
	if($alias[$len-1]=='f' &&$alias[$len-2]=='d' && $alias[$len-3]=='p')
	{
		move_uploaded_file($_FILES['rathorfile']['tmp_name'], $target_path);
		echo "File uploaded successfully";
	}
	else{
		echo "File not in pdf format";
	}
?>