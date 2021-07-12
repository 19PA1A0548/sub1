<?php
include('creatingdb.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

		body{
			margin: 0px;
			padding: 0px;
			background-color: #DC7786;
		}
		#main{
			height: 500px;
			margin: auto;
			margin-top: 70px;
			border-radius: 12px;
			width: 680px;
			display: flex;
			box-shadow: rgba(43, 54, 72, 0.4) 0px 3px 5px 4px;
		}
		#left{
			width: 50%;
			height: 100%;
			flex: 1;
			border-top-left-radius: 12px;
			border-bottom-left-radius: 12px;
			background-image: url("https://i.ibb.co/w0375FZ/sideimage.png");
			background-size: cover;
		}
		#right{
			width: 50%;
			height: 100%;
			border-top-right-radius: 12px;
			border-bottom-right-radius: 12px;
			background-color: #364860;
			color:white;
			font-family: 'Montserrat', sans-serif;
		}
		#form{
			margin-left: 40px;
			height: auto;
			width: auto;
		}
		input{
			background:transparent;
			border-top: none;
			border-left:none;
			border-right:none;
			/*padding: 10px;*/
			height: 40px;
			color:white;
			outline: none;
			border-bottom: 0.5px solid grey; 
		}
		span{
			font-size: 12px;
		}
		select{
			border-radius: 5px;
			height: 30px;
			width: 100px;
		}
		textarea{
			outline: none;
		}
		#signin{
			width: 100px;
			height: 30px;
			padding: 7px;
			margin-left: 50px;
			background-color: #5CCEBF;
			border:none;
			color:white;
			cursor: pointer;
			border-radius: 15px;
		}
		#reset{
			width: 100px;
			height: 30px;
			padding: 7px;
			margin-left: 155px;
			margin-top: -30px;
			display: block;
			background-color: #5CCEBF;
			border:none;
			color:white;
			cursor: pointer;
			border-radius: 15px;
		}
	</style>
</head>
<body>
	<div id="main">
		<div id="left">
			
		</div>
		<div id="right">
			<br>
			<form id="form" action="submit.php" method="POST">
				<span style="font-size: 12px;">Your Name</span>
				<br>
				<input type="text" name="name" placeholder="Enter your Name" id="f">
				<br><br>
				<span>Email</span><br>
				<input type="Email" name="email" placeholder="Enter your Email" id="em"><br><br>
				<span>Password</span><br>
				<input type="password" name="pass" placeholder="Enter your Password" id="tel1"><br><br>
				<span>Phone Number</span><br>
				<input type="tel" name="phonenum" placeholder="Enter your Phone Number" id="tel"><br><br>
				<button id="signin">
					SignUp
				</button>
			</form>
			<p style="margin-left: 40px;font-size: 15px;">
				Already have an account <a style="color:blue;text-decoration: none;" href="login.php">Login</a>
			</p>
		</div>
	</div>
	<br><br>

	<script type="text/javascript">
	</script>
</body>
</html>