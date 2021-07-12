<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$sql = "SELECT * FROM mylogin1 WHERE email='$email' AND password='$pass' ";
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo "Sucessfully loggedin";
		}
    else{
      echo "Check credentials";
    }

	}


?>
