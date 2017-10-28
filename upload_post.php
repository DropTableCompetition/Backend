<?php
	if(isset($_POST["session_id"])){
		session_id($_POST["session_id"]);
		session_start();
		
		$hostname = "Localhost";
		$username = "pi_api";
		$password = "apipassword";
		$dbname = "pi_gradient";
		
		$link = mysqli_connect($hostname, $username, $password, $dbname);
		
		if(isset($_POST["text"]) && isset($_POST["colorA"]) && isset($_POST["colorB"])){
			$stmt = $link->prepare("INSERT INTO posts(username, text, colorA, colorB) VALUES (?, ?, ? ,?)");	
				
			if ( false===$stmt ) {
			  die('prepare() failed: ' . htmlspecialchars($mysqli->error));
			}				
			$rc = $stmt->bind_param("ssss", $_SESSION["username"], $_POST["text"], $_POST["colorA"], $_POST["colorB"]);
			if ( false===$rc ) {
			  die('bind_param() failed: ' . htmlspecialchars($stmt->error));
			}
			$rc= $stmt->execute();
			if ( false===$rc ) {
			  die('execute() failed: ' . htmlspecialchars($stmt->error));
			}
		}
		
	}else{
		echo("Error: Missing Arguments");
	}
?>