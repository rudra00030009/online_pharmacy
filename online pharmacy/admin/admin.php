<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Admin</title>
</head>
<body>
    <div class="background">
    <h1>Loggin Admin</h1>
    <div class="container">
        <form action="" method="post">
        Enter Admin Name: <br>
        <input type="text" class="search" name="aname"><br><br>
        Enter Password:<br>
        <input type="password" class="search" name="password"> <br><br>
        <button name="submit">
        <span>Submit</span>
        </button>
        </form>
    </div>
    </div>
</body>
</html>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html, body {
    height: 100%;
    overflow: hidden; /* Hide the scroll bar */
}
.background{
    min-height: 100vh; 
    justify-content: center;
    align-items: center;
    position: relative;
}
.background::before{
    content: '';
    background-image: url("https://t3.ftcdn.net/jpg/02/16/47/22/360_F_216472247_cT66WDoS0fp1s3wC7eaykMJNDGVbOBPq.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: -1;
}
h1{
    display: flex;
    justify-content: center;
    color: black;
    z-index: 1;
    padding: 5%;
}
.container{
    display: grid;
    place-items: center;
    height: 65vh;
    padding: 3%;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 35%;
    margin-right: 35%;
    background-color: #141E46;
    color: white;
    border: 1px solid black;
    border-radius: 4%;
    font-size: 20px;
    z-index: 1;
}
.search{
    border: 2px solid black;
    border-radius: 8px;
    width: 200px;
    padding: 5px 10px;
}
button {  
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #2ba8fb;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

button:hover {
  background-color: #6fc5ff;
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);
}

button:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}
</style>

<?php
$name=$_POST['aname'];
$password=$_POST['password'];
if(strtolower($name)=="rudra"&&$password=="1221")
{
    header("location: http://localhost/online%20pharmacy/admin/welcome_admin.php");
}
else
{
    echo"Invalid Username or password";
}
?>