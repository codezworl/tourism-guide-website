<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project_rl";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connect Error: " . $conn->connect_error);
} else {
    echo "Connect Successful";

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $whereto = $_POST['Where'];
    $DAYS = $_POST['days'];
    $Arive = $_POST['Arival'];
    $leave = $_POST['Leave'];
    $Contact=$_POST['address'];

$sql="UPDATE `book` SET `Name`='$name',`City`='$whereto',`Days`='$DAYS',`Arival`='$Arive',`Leaving`='$leave',`Details`='$Contact' WHERE Details='$Contact' ";

if($conn->query($sql)===true){

    $_SESSION['message'] = "Data Update!"; 
  
  }
  else{
    echo"Error :".$conn->connect_error;
  }
}


$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="DELETE UPDATE.css">
    <link rel="stylesheet" type="text/css"  href="home.css">
    <title>Update Data</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ShowData.php">See User Details</a>
</li>
        <li class="nav-item">
          <a class="nav-link" href="DeleteBook.php">Delete User</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- #region -->
	<form method="post" action="UpdateBook.php" >
        <div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
        <div class="input-group">
			<label>Enter City</label>
			<input type="text" name="Where" value="">
		</div>
        <div class="input-group">
			<label>Enter Days</label>
			<input type="text" name="days" value="">
		</div>
        <div class="input-group">
			<label>Enter Arival</label>
			<input type="date" name="Arival" value="">
		</div>
        <div class="input-group">
			<label>Enter Leaving</label>
			<input type="date" name="Leave" value="">
		</div>
		<div class="input-group">
			<label>Contact Number</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Update</button>
		</div>
	</form>
</body>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>