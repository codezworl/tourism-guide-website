<?php

session_start();
if(isset($_POST['email'])){

$servername="localhost";
$username="root";
$password="";
$database="project_rl";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
  die("connect Error".$conn->connect_error);
}
else{

}

$Emai=$_POST['email'];  
$password=$_POST['pass'];

$sql="SELECT * FROM `register` WHERE Email='$Emai' && Password='$password';";
$result=mysqli_query($conn,$sql);
if($Emai=== 'admin@gmail.com' && $password='123' ){
  sleep(3);
  header('Location:http://localhost/project/admin/admin.html');
}
else
if(mysqli_num_rows($result)>0){
  $row=$result->fetch_assoc();
  $_SESSION['start']=time();
  $_SESSION['name']=$row['name'];
  $_SESSION['mail']=$row['Email'];
  $_SESSION['expire']=time()+300;
  
  $wait=3;
print('<script>alert("Welcome!");</script>');
sleep($wait);
header("location: Home page.php");

}
else{
echo"<script>alert('Invalid UserName AND password')</script>";


}


$conn->close();

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="LOGIN.css">    
  
  </head>

  <body>
    <div class="hero">
      <form class="form" action="LOGIN.php" method="post">
        <h1>S<span>I</span>G<span>N</span>  <span>IN</span></h1>
        <input
          type="email"
          class="box"
          name="email"
          placeholder="Enter email"
          required />
        <input
          type="password"
          class="box"
          name="pass"
          placeholder="Enter password"
          required
        />
        <input type="submit" value="Login in" id="submit" />
        <a href="Register.html" >Register</a>
        <a href="#">Forget Password</a>
      </form>
      <div class="side">
        <img src="beach.jpg" />
      </div>
    </div>
  </body>
</html>
