<html>
	<body>
	<?php
		$link=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($link,"bey");
		$user=$_POST['user'];
		$pass=$_POST['password'];
		$eject="select name,password from checkt";
		$ver=mysqli_query($link,$eject);
		while($qq=mysqli_fetch_row($ver))
		{
			if($qq[0]==$user && $qq[1]==$pass && $user!='sachin' && $pass!='tudu'){
				header("Location: zoo.html");
			}
		    else if($user=='sachin' && $pass=='tudu'){
				header("Location: sachin.php");
			}
			else{
				echo "either username or password is incorrect or you are not a member.";
			}
	    }
	?>
	</body>
</html>	