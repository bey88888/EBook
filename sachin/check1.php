<html>
	<body>
	<?php

	define('DB_NAME','bey');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_HOST','localhost');
	
	$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	
	if(!$link) {
		die('Cound not connect:' .mysql_error());
	}
	
	$db_selected=mysql_select_db(DB_NAME,$link);
	
	if(!$db_selected) {
		die('can not use' . DB_NAME .':' . mysql_error());
	}
	
	echo 'Connected succeddfully';
	$val1=$_POST['name'];
	$val2=$_POST['mob'];
	$val3=$_POST['email'];
	$val4=$_POST['pass'];
	
	
	$sql="INSERT INTO checkt (name,phone,email,password) VALUES ('$val1','$val2','$val3','$val4')";
	if(!mysql_query($sql)) {
		die('ERROR:'.mysql_error());	
	}
	mysql_close();
	?>
	</body>
</html>	