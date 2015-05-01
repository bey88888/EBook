<?php
	$files = array_values(array_filter(scandir("C:/xampp/htdocs/sachin/rathor"), function($file) {
   	 return !is_dir($file);
	}));
	$sac=$_POST['view'];
	// echo $sac;
	if($sac==''){
		echo "Please enter book name";
		exit(1);
	}
	$i=0;
	$arr=array('sachin');
	foreach($files as $file){
   	 // echo $file;

		if(strpos($file,$sac)){
			//echo $file;
			$i++;
			$arr[$i]=$file;
		}
	}
	if($i==0)
		echo "Oops...!!!<br>No such book exists in our database";
	//echo "<h3 id=\"sss\"></h3>";
	// echo "<script>
	// 		document.getElementById(\"sss\").innerHTML=$i;</script>";
			for($j=1;$j<=$i;$j++){	
			echo "<a href='rathor/$arr[$j]'>".$arr[$j]. "</a><br>";
			}
   		
?>