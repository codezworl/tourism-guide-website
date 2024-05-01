<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

$servername="localhost";
$username="root";
$password="";
$database="project_rl";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
  echo("connect Erro".$conn->connect_error);
}
else{
  echo"Connect Successfull";

}


$name= $_POST['fname'];
$email= $_POST['Femail'];
$password= $_POST['pass'];

$sql="INSERT INTO `register` (`name`, `Email`, `Password`) VALUES ('$name', '$email', '$password');";

if($conn->query($sql)===true){

  echo"Data Enter Success";
} 
else{
  echo"Data Enter Failed".$conn->error;
 
}
$conn->close();
$wait=3;
sleep($wait);
echo '<script>alert("Welcome!");</script>';
header("location:LOGIN.php");



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
    <div class="hero">
        
        <div class="from-bx">
            <h1><span>Regi</span>ster Form</h1>
           


           <div class="social-links">
            <i class="fab fa-whatsapp"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
          <div class="credit">

           <form class="input" id="mform" action="Register.php" method="post">
            <input type="name" class="input-type" placeholder="ENTER NAME" id="name" name="fname" required>
            <input type="Email" class="input-type"name="Femail" id="Email" placeholder="Enter Email">
            <input type="password" class="input-type" id="password" placeholder="ENTER Password" name="pass" required>
            <input type="password" class="input-type" id="cpassword" placeholder="Confirm Password" required>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                 Remeber Password   
                </label>
              </div>
            <button type="submit" class="submit" id="buttont">Register In</button>
           
            <p><a href="LOGIN.php">Click To Sign In</a></p>
           </form>

       </div>
     
    </div>
    <script>
        // Ensure the DOM is loaded before accessing elements
        const btn = document.getElementById("buttont");
          btn.addEventListener('click', check);
          
        function check() {
          if (document.forms["mform"]["password"].value !== document.forms["mform"]["cpassword"].value) {
            alert("Password does not match");
            return false;
          } else {
            // Make sure to submit the form within the else block
            document.forms["mform"].submit();
            return true;
          }
        }
      </script>
</body>
</html>