<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "project_rl";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connect Error: " . $conn->connect_error);
} else {
    echo "connect Success";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST['Fname'];
    $Email=$_POST['Email'];
    $pass=$_POST['Password'];
    $Detail=$_POST['text'];

    $_SESSION['Rname']=$name;
    $_SESSION['mal']=$Email;
    $_SESSION['Response']=$Detail;

  

    $pass=$_POST['Password'];
    $Detail=$_POST['text'];
    if($name==''){
        echo '<script>alert("please enter values!");</script>';
       
   }
   elseif( $Email==''){
    echo '<script>alert("please enter values!");</script>';
   }
   elseif( $pass==''){
    echo '<script>alert("please enter values!");</script>';
   }
   elseif( $Detail==''){
    echo '<script>alert("please enter values!");</script>';
   }
   else{
    $sql="INSERT INTO `contactus` (`Name`, `Email`, `Password`,`Details`) VALUES ('$name', '$Email', '$pass','$Detail');";
   
    if($conn->query($sql)===true){

        echo "<script>alert('Thank you for contacting us!'); window.location.href = 'mail.php';</script>";

      }
      else{
        echo"Error :".$conn->connect_error;
      }
    
   }

   
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Contact.css">
  <style>
    .msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
    
  </style>
    <title>Contact</title>
</head>
<body>




    <div class="container">
        <div class="item">
            <div class="contact">
                <div class="first-text"> Lets get in touch </div>
                <img src="contact-removebg-preview.png" alt="" id="img">
                <div class="socail-links">
                    <ul class="socail-links">
                        <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                        <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                    </ul>
                </div>
                <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
            </div>

            <div class="submit-form">
                <h4 class="second-text">Contact Us</h4>
                <form  action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="name" class="form-control" id="name" name="Fname" placeholder=" Enter Name" required>
                      </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="email">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp" placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name="Password" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember Password?</label>
                    </div>
                    <textarea name="text" id="" cols="30" rows="5" name="text" placeholder="Enter Detail"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>

                  </form>
                  
            </div>
 
            
        </div>
    </div>

    
</body>
</html>