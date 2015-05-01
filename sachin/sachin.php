<!DOCTYPE html>
<html>
	<head>
		<style>
			#qq{
				width: 200px;
				height: 40px;
				background-color: #B88AE6;
				text-align: center;
				padding-top: 20px;
			}
			#ww{
				width: 200px;
				height: 40px;
				background-color: #FF75FF;
				text-align: center;
				padding-top: 20px;
			}
			#ee{
				width: 200px;
				height: 40px;
				background-color: #99993D;
				text-align: center;
				padding-top: 20px;
			}
			#aa{
				position: absolute;
				top: 10px;
				left: 500px;
			}
			#qw{
				position: absolute;
				top: 10px;
				left: 850px;
			}
		</style>
	</head>	
	<body>
		<button onclick="views()"><div id="qq">
		</h3>view all question</h3>
		</div></button>
		<button onclick="unviews()"><div id="ww">
		</h3>view unanswered question</h3>
		</div></button>
		<div id="aa"><form method="post" action="copyup.php">
			<legend>Enter Books Copyright Data</legend>
					Book Name:<input type="text" value="" name="book"><br>
					Auther:<input type="text" value="" name="auther"><br>
					Year Of Publication:<input type="text" value="" name="yop"><br>
					<input type="submit" value="submit" name="submit">
				</form>
		</div>
		<div id="qw"><form method="post" action="ans.php">
			<legend>Enter answer for user query</legend>
					username:<input type="text" value="" name="username"><br>
					question:<input type="text" value="" name="question"><br>
					answer:<input type="text" value="" name="answer"><br>
					<input type="submit" value="submit" name="submit">
				</form>
		</div>
		<p id="sac"></p>
		<script>
			function views(){
					document.getElementById("sac").innerHTML="<?php view(); ?>";
			}
			function unviews(){
					document.getElementById("sac").innerHTML="<?php unview(); ?>";
			}
			function editcopy(){
					document.getElementById("sac").innerHTML="<?php unview(); ?>";
			}
			
		</script>
		<?php
			function view(){
				$link=mysqli_connect("localhost","root","");
				$db=mysqli_select_db($link,"bey");
				$qq="select * from question";
				$ww=mysqli_query($link,$qq);
				while ($r1 =mysqli_fetch_row($ww)){
					echo $r1[0];echo "-----? ";echo $r1[1];echo "-----@ ";echo $r1[2];echo "<br>";
				}
			}
			function unview(){
				$link=mysqli_connect("localhost","root","");
				$db=mysqli_select_db($link,"bey");
				$qq="select * from question";
				$ww=mysqli_query($link,$qq);
				while ($r1 =mysqli_fetch_row($ww)){
					if($r1[2]==""){
					echo $r1[0];echo "-----? ";echo $r1[1];echo "<br>";
				    }
				}
			}
			?>
			
	</body>
</html>		