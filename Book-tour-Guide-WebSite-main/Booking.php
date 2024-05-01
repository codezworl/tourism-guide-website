

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
$sql = "SELECT * FROM hire " ;
$result=mysqli_query($conn,$sql);



$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="home.css">
    <title>Show Data</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg " id="navbar" style="background: rgb(red, green, blue);">
    <div class="container-fluid">
      <a class="navbar-brand " id="logo" href="Home page.html" data-bs-theme="dark"><span>Tra</span>vel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">View more</button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active"   href="Home page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Gallery.html">Gallery</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  "  href="Contact.php">Contact Us</a>
          </li>
        </ul>
      
    
          
        </form>
      </div>
    </div>
    
  </nav>


<!-- #region -->






<table class="table table-dark table-striped" width="100%" id="DATA">
  <thead  class="bg-dark text-white">
    <tr  class="bg-dark">
      <th scope="col"> City Name</th>
      <th scope="col">Place to vist</th>
      <th scope="col">Guid No</th>
      <th scope="col">Guid Name</th>
      <th scope="col">Contact</th>
  
    </tr>
  </thead>
  <tbody class="table-success">
  <tr class="">
    <?php
if ($result->num_rows > 0) {
    while($row=mysqli_fetch_assoc($result)){?>
      
   <td> <?php echo $row['City'] ?></td>
   <td> <?php echo $row['Place'] ?></td>
   <td> <?php echo $row['guidNo'] ?></td>
   <td> <?php echo $row['name'] ?></td>

   <td><a class="btn btn-primary" href="#" role="">Contact Querrie</a></td>
  

       
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