<!DOCTYPE html>
<html>
<head>
    <!--css likning-->
    <link rel="stylesheet" type="text/css" href="index.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title></title>
    <style type="text/css">
        body{
    background-color: black;
    color:white;
}
#left{
    margin-left: 100px;
    margin-top: 190px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 2px;
}
#right{
    background-color: white;
    height: 350px;
    width: 400px;
    margin-left: 620px;
    margin-top: -200px;
    border-radius: 10px;
    text-align: center;
}
input[type="text"]{
    margin-top: 20px;
    padding: 15px 0px 15px 0px;
    width: 350px;
    border:1px solid lightgrey;
    border-radius: 5px;
}
::placeholder{
    color:grey;
    opacity: 1;
    padding-left: 20px;
    letter-spacing: 0.5px;
    font-size: 15px;
}
input[type="password"]{
    margin-top: 10px;
    padding: 15px 0px 15px 0px;
    width: 350px;
    border:1px solid lightgrey;
    border-radius: 5px;
}
#butt{
    margin-top: 10px;
    color:white;
    cursor: pointer;
    font-size: 18px;
    padding: 15px 0px 15px 0px;
    width: 350px;
    border:1px solid lightgrey;
    border-radius: 5px;
    transition: 0.5s;
    background-color: #236475;
    box-reflect: below 1px linear-gradient(transparent,#0005)
}
#butt:hover {
    background-color: #03e9f4;
    color: #050801;
    box-shadow: 0 0 5px #03e9f4;
}
#butt1{
    margin-top: 5px;
    color:white;
    font-size: 18px;
    padding: 15px 0px 15px 0px;
    width: 150px;
    border:1px solid lightgrey;
    border-radius: 5px;
    cursor: pointer;
    background-color: #236475;
}


    </style>
</head>
<body>
    <div id="left">
        <h1>My Login <span style="color:#1778F2">Page</span></h1>
        <h4 style="font-size: 20px;letter-spacing: 2px;">You can login here and if you <br>dont have account you can register.</h4>
    </div>

    <div id="right">
        <form action="afterlogin.php" method="post">
            <input type="text" name="email" placeholder="Email address">
            <br>
            <input type="password" name="pass" placeholder="Password">
            <br><br>
            <button id="butt">Log In</button>
        </form>
        <br>
        <br>
        <hr style="width: 350px;color:grey;">
        <a href="registration.php"><button id="butt1">Register</button></a>
    </div>
</body>
</html>