

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

$sql2="SELECT *
FROM book
inner JOIN hire ON book.sn=hire.sn";
$result=mysqli_query($conn,$sql2);



$conn->close();
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="home.css">
    <title>Show Data</title>
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
          <a class="nav-link" href="UpdateBook.php">Update User</a>
</li>
        <li class="nav-item">
          <a class="nav-link" href="DeleteBook.php">Delete User</a>
        </li>
      </ul>
    </div>
  </nav>



<!-- #region -->






<table class="table table-dark table-striped" width="100%" id="DATA"  style="margin-top:20px">
  <thead  class="bg-dark text-white">
    <tr  class="bg-dark">
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Days</th>
      <th scope="col">Arrival</th>
      <th scope="col">Leaving</th>
      <th scope="col">Contact</th>
      <th scope="col">Place</th>
      <th scope="col">Guuid No</th>
      <th scope="col">Guuid Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>



    </tr>
  </thead>
  <tbody class="table-success">
  <tr class="">
    <?php
    
if ($result->num_rows > 0) {
    while($row=mysqli_fetch_assoc($result)){?>
      
   <td> <?php echo $row['Name'] ?></td>
   <td> <?php echo $row['City'] ?></td>
   <td> <?php echo $row['Days'] ?></td>
   <td> <?php echo $row['Arival'] ?></td>
   <td> <?php echo $row['Leaving'] ?></td>
   <td> <?php echo $row['Details'] ?></td> 
   <td> <?php echo $row['Place'] ?></td> 
   <td> <?php echo $row['guidNo'] ?></td> 
   <td> <?php echo $row['name'] ?></td> 



   <td><a class="btn btn-primary" href="UpdateBook.php" role="">Update</a></td>
   <td><a class="btn btn-danger" href="DeleteBook.php" role="button">Delete</a></td>

       
  </tr>      
  <?php 
  
  
    }
    
  }
  
else{
  echo"no data";
}
    ?>
    
    
  </tbody>
</table>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>