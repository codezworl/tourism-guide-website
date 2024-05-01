<?php
$servername="localhost";
$username="root";
$password="";
$database="project_rl";
// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['book'])) {
    $city = $_POST['city']; //
    $place = $_POST['place']; //
    $name = $_POST['guideName']; //
    $guide = $_POST['book']; // 

    if($guide=='Guide 1'){
        $name="Abdullah";
    }
   else if($guide=='Guide 2'){
      $name="Waqas";
  }
 else if($guide=='Guide 3'){
    $name="Humayu";
}
else if($guide=='Guide 4'){
  $name="Ameer Hamza";
}
    $sql="INSERT INTO `hire` (`City`,`Place` ,`guidNo`, `name`) VALUES ('$city','$place', '$guide', '$name');";

    if($conn->query($sql)===true){
    
      echo"Data Enter Success";
    sleep(3);
      header("location:GUID.php");
    } 
    else{
      echo"Data Enter Failed".$conn->error;
     
    }
    // Close the statement
  
    echo 'Booking successful!';
}

// Close the database connection
$conn->close();
?>
