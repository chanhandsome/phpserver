<?php
 header("Content-Type: text/html;charset=UTF-8"); 
 $host = 'localhost'; 
 $user = 'root'; 
 $pw = "2015142011"; 
 $dbName = 'chandb'; 
 $mysqli = new mysqli($host, $user, $pw, $dbName); 
 if($mysqli){
	 
	 echo "</br>"; 
	 echo "MySQL successfully connected!<br/>"; 
	 $state = $_GET['state']; 
	 $time=date("Y-m-d H:i:s");
	 echo "<br/>상태 = $state"; 
	 $query = "INSERT INTO exam (state, time) VALUES ('$state','$time')"; 
	 mysqli_query($mysqli,$query); 
	 echo "</br>success!!<br/><br/>"; } 
else { 
	 echo "MySQL could not be connected"; 
	 } 
	 mysqli_close($mysqli); 
	 ?>

	 
