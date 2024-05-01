<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project_rl";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connect Error: " . $conn->connect_error);
} else {
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST['Name'];
    $whereto = $_POST['Where'];
    $DAYS = $_POST['days'];
    $Arive = $_POST['Arival'];
    $leave = $_POST['Leave'];
    $Details = $_POST['Details'];

    $sql = "INSERT INTO `book` (`Name`, `City`, `Days`, `Arival`, `Leaving`, `Details`) VALUES ('$Name', '$whereto', '$DAYS', '$Arive', '$leave', '$Details');";

    if ($conn->query($sql) === true) {
        echo '<script>alert("Data Saved Successfully");</script>';
    } else {
        echo "Data Entry Failed: " . $conn->error;
    }
  
}

$conn->close();


?>
<?php  include('Hire.php'); ?>


<!DOCTYPE html>
<html>
<head>
  <title>Guide Booking Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="home.css">
  
  <style>
    #navbar{
      background-color: beige;
    }
    body{
      background-color:darkgray;
    }
    .guide-card {
      margin-bottom: 20px;
    }
    .guide-card img {
      width: 70%;
      aspect-ratio: 2/2;
      
    }
    .guide-card .card-body {
      text-align: center;
    }
    #select{
      padding: 20px;
      background-color: lightslategray;
      color: white;
    }
    
 
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg " id="navbar" >
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
          <li class="nav-item ">
            <a class="nav-link  "  href="Booking.php">Show Tour Booking</a>
          </li>
      
      
      
        </ul>
  
          
        </form>
      </div>
    </div>
    
  </nav>


      <!-- #region -->
 
  <div class="container" style="text-align: center; justify-content: center; align-items: center;">
    <h1>Guide Booking</h1>
    <center>

    <div class="col-md-5" id="select">

    <form action="hire.php" method="post">
      <div class="form-group">
        <label for="city">Select City:</label>
        <select class="form-control" id="city" name="city" onchange="populatePlaces()">
          <option value="Karachi">Karachi</option>
          <option value="Lahore">Lahore</option>
          <option value="Multan">Multan</option>
          <option value="Islamabad">Islamabad</option>
          <option value="Murree">Murree</option>
          <option value="Gilgit">Gilgit</option>
        </select>
      </div>
      <hr>
      <div class="form-group">
        <label for="place">Select Place:</label>
        <select class="form-control" id="place" name="place"></select>
      </div>
  </div>
  </center>

  <hr>
  <br>

      <h2>Available Guides</h2>

      <div class="row">
        <div class="col-md-4">
          <div class="guide-card">
            <img src="me.png" alt="Guide 1">
            <div class="card-body">
              <h5 name="guideName" value="Abdullah">Abdullah</h5>
              <p class="card-text">Description of Guide 1.</p>
              <button type="submit" class="btn btn-primary" name="book" value="Guide 1">Book
 Guide 1</button>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="guide-card">
            <img src="waqas.jpg" alt="Guide 2">
            <div class="card-body">
              <h5 class="card-title" name="waqas">Waqas</h5>
              <p class="card-text">Description of Guide 2.</p>
              <button type="submit" class="btn btn-primary" name="book" value="Guide 2">Book Guide 2</button>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="guide-card">
            <img src="humayu.jpg" alt="Guide 3">
            <div class="card-body">
              <h5 class="card-title" name="humayu">Humayu</h5>
              <p class="card-text">Description of Guide 3.</p>
              <button type="submit" class="btn btn-primary" name="book" value="Guide 3">Book Guide 3</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="guide-card">
            <img src="hamza.jpg" alt="Guide 3">
            <div class="card-body">
              <h5 class="card-title" name="hamza">Hamza</h5>
              <p class="card-text">Description of Guide 4.</p>
              <button type="submit" class="btn btn-primary" name="book" value="Guide 4">Book Guide 4</button>
            </div>
          </div>
        </div>

        
        
      </div>
    </form>

    
    
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    function populatePlaces() {
      var citySelect = document.getElementById("city");
      var placeSelect = document.getElementById("place");
      var city = citySelect.value;

      // Clear existing options
      placeSelect.innerHTML = "";

      // Add places based on the selected city
      if (city === "Karachi") {
        addOption(placeSelect, "Mazar-e-Quaid");
        addOption(placeSelect, "Pakistan Air Force Museum");
        addOption(placeSelect, "Frere Hall");
        addOption(placeSelect, "Port Grand karachi");
        addOption(placeSelect, "Mohatta Palace Museum");
        addOption(placeSelect, "Dolmen Mall Clifton");
        addOption(placeSelect, "Empress Market");
        addOption(placeSelect, "Clifton Beach, Karachi");
        addOption(placeSelect, "Quaid e Azam House Museum");
        addOption(placeSelect, "Bagh Ibn-e-Qasim");

      } else if (city === "Lahore") {
        addOption(placeSelect, "Badshahi Mosque");
        addOption(placeSelect, "Lahore Fort");
        addOption(placeSelect, "Masjid Wazir Khan");
        addOption(placeSelect, "Lahore Museum");
        addOption(placeSelect, "Bagh-e-Jinnah");
        addOption(placeSelect, "Tomb of Emperor Jahangir");
        addOption(placeSelect, "Shalamar Garden");
        addOption(placeSelect, "Lahore Zoo");
        addOption(placeSelect, "Minar-e-Pakistan");
        addOption(placeSelect, "Race Course (Jilani Park) Lahore");
        addOption(placeSelect, "Sheesh Mahal");
        
      } else if (city === "Multan") {
        addOption(placeSelect, "Tomb of Hazrat Shah Rukn-e-Alam");
        addOption(placeSelect, "Multan Arts Council");
        addOption(placeSelect, "Ghanta Ghar/Municipal Corporation Office");
        addOption(placeSelect, "Eid Ghah");
        addOption(placeSelect, "Multan International Cricket Stadium");
        addOption(placeSelect, "Monument of Van Alexander Agnew");
        addOption(placeSelect, "Tomb Shah Shams Sabzwari Tabrez");

      }else if (city === "Islamabad") {
        addOption(placeSelect, "JAMIA MASJID SHAH FAISAL ISLAMABAD");
        addOption(placeSelect, "Daman-e-Koh");
        addOption(placeSelect, "Pakistan Monument");
        addOption(placeSelect, "Lok Virsa Heritage Museum");
        addOption(placeSelect, "Lake View Park");
        addOption(placeSelect, "Shakarparian National Park");
        addOption(placeSelect, "Margalla Hills National Park");
        addOption(placeSelect, "Saidpur");
        addOption(placeSelect, "Rawal Lake");


      }else if (city === "Murree") {
        addOption(placeSelect, "TDCP Patriata Chair Lift and Cable Car");
        addOption(placeSelect, "Kashmir Point");
        addOption(placeSelect, "Pindi Point");
        addOption(placeSelect, "Mall Road");
        addOption(placeSelect, "Ghora Gali");
        addOption(placeSelect, "Bhurban");
        addOption(placeSelect, "GPO Murree");
        addOption(placeSelect, "Changla Gali");
        addOption(placeSelect, "Murree Wildlife Park");


      }
      else if (city === "Gilgit") {
        addOption(placeSelect, "Deosai National Park");
        addOption(placeSelect, "Hunza Valley");
        addOption(placeSelect, "Buddha De Yasheni");
        addOption(placeSelect, "Astore Wildlife Sanctuary");
        addOption(placeSelect, "Chinar Bagh");
        addOption(placeSelect, "Rakaposhi");
        addOption(placeSelect, "Attabad Lake");
        addOption(placeSelect, "Upper Kachura Lake");
        addOption(placeSelect, "Shausar Lake");

      }
    }

    function addOption(select, text) {
      var option = document.createElement("option");
      option.text = text;
      select.add(option);
    }
  </script>
</html>
