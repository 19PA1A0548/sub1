<?php
	include('creatingdb.php'); 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		insertfun();
	}
	function insertfun(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$passwordnew = $_POST['pass'];
		$number = $_POST['phonenum'];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$sql = "INSERT INTO mylogin1 (name, email, password,phonenumber)
			VALUES ('$name', '$email', '$passwordnew', '$number')";
		if (mysqli_query($conn, $sql)) {
  			echo "<div>
        <h2>Successfully registered</h2>
        <h3>Name  : $name</h3>
        <h3>password  : $passwordnew</h3>
        <h3>email  : $email</h3>
        <h3>phone  : $number</h3>
      </div>";
		}
	}

?>
<!DOCTYPE html>
<head>
</head>
<style>
body{
  background-color:lightgrey;
}
div{
  height: 300px;
  width: 400px;
  border: 1px solid white;
  background-color: white;
  margin:auto;
  margin-top:130px;
  border-radius:10px;
  text-align:center;
}
h2{
  color:green;
}
</style>
<body>
<br>

</body>
</html>