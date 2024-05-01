
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" type="text/css"  href="home.css">
 
 <?php
  session_start();
  $nowtime = time();
  if (isset($_SESSION['name'])){
  if ($nowtime > $_SESSION['expire']) {
    session_unset();
    session_destroy();
    $message = "Please log in again. Your session has expired.";


    echo "<script>alert('$message')</script>";
  }
  }
  ?>

 <style>
 .map iframe{
width:100%;
height:460px;
}
.map{
  margin-top: 90px;
position:relative;
background:#F3F9FD;
}
#footer{
height: 100%;
width: 100%;
margin-top: 150px;s
background:  black;
}

 </style>
</head>
<body  style="background-color:#FBEEC1">

  <nav class="navbar navbar-expand-lg " id="navbar" style="background-color:#DAAD90" >
    <div class="container-fluid">
      <a class="navbar-brand " id="logo" href="Home page.html" data-bs-theme="dark"><span>Tra</span>vel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">View more</button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active"   href="Home page.php">Home</a>
          </li>
        
          <li class="nav-item ">
            <a class="nav-link " href="#book">Book</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#packeges">Packeges</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Gallery.html">Gallery</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#about">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  "  href="Contact.php">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#footer">Follow Us</a></li>
            </ul>
          </li>
      
        </ul>
      
        <?php
        if (isset($_SESSION['name'])) {
          echo "<button class='btn btn-outline-success' type='button'>";
          echo $_SESSION['name'];
          echo "</button>";
          echo "<button class='btn btn-outline-success' type='button'>";
          echo "<a  href='Logout.php'>Logout</a>";
          echo "</button>";
        } else {
          echo "<button class='btn btn-outline-success' type='button'>";
          echo " <a href='LOGIN.php'>";
          echo "LOG IN </a>";
          echo "</button>";
        }
        ?>
        </form>
      </div>
    </div>
    
  </nav>

    <!-- Home Section Start -->
    <div class="home">
      <div class="content">
          <h5>Welcome To World</h5>
          <h1>Visit <span class="changecontent"></span></h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, nisi.</p>
          <a href="#book">Book Place</a>
      </div>
  </div>
  <!-- Home Section End -->


    <!-- book Start -->
   <section class="book" id="book">

    <div class="container">
      <main class="text">
        <h1><span>B</span>ook</h1>
      </main>
      

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <img src="Home page pic/book.png" alt="">
          </div>
        </div>

        <div class="col-md-6">
          <form action="GUID.php" method="post">
            <input type="name" class="form-control" placeholder="Enter Name" name="Name" id="username" required ><br>
            <input type="text" class="form-control" placeholder="Where To"  name="Where" id="where" required><br>
            <input type="text" class="form-control" placeholder="How Many Days" name="days" id="HMD" required ><br>
            <h6> <strong>Enter Arival</strong></h6>
            <input type="date" class="form-control" placeholder="Arival" name="Arival" id="Arival" required ><br>
            <h6> <strong>Enter Leaving</strong></h6>
            <input type="date" class="form-control" placeholder="Leaving" name="Leave" id="leaving" required ><br>
            <textarea class="form-control"  cols="20" rows="3" name="Details" id="Details" placeholder="Enter Contact Number"></textarea required>
              <div class="text-left">
                <input type="submit" class="submit">
              </div>
              <button id="loginButton" style="display:none;">Login</button>

          </form>
      
        </div>
      </div>
    </div>
   </section>


   <!-- book end -- >
   <!-- packeges start --> 
     <section class="packeges" id="packeges">
      <div class="container">

        <main class="text">
          <h1><span>Pack</span>eges</h1>
        </main>
         <div class="min-text">

         
          <div class="row" style="margin-top: 20px;">

           <div class="col-md-4">
           
            <div class="card text-bg-info mb-3" style="max-width: 190%; border: none;" id="card"> 
              <img src="Home page pic/karachi.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">karachi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#book" class="btn btn-primary">Book Now</a>
              </div>
            </div>
           </div>
       
           <div class="col-md-4">
            <div class="card text-bg-info mb-3" style="max-width: 190%; border: none;" id="card">
              <img src="Home page pic/lahore.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lahore</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#book" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card text-bg-info mb-4" style="max-width: 190%; border: none;" id="card">
              <img src="Home page pic/isb.jpg" height="190px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Islamabad</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#book" class="btn btn-primary">Book Now</a>
              </div>
            </div>   
         </div>


         <div class="col-md-4" style="align-items: center;">
          <div class="card text-bg-info mb-3" style="max-width: 190%; border: none;" id="card">
            <img src="Home page pic/multan.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Multan</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#book" class="btn btn-primary">Book Now</a>
            </div>
          </div>   
        </div>
        

         <div class="col-md-4">
          <div class="card text-bg-info mb-3" style="max-width: 190%; border: none;" id="card">
            <img src="Home page pic/peshawar.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Peshawar</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#book" class="btn btn-primary">Book Now</a>
            </div>
          </div>   
       </div>

       


       <div class="col-md-4">
        <div class="card text-bg-info mb-3" style="max-width: 190%; border: none;" id="card">
          <img src="Home page pic/murree.jpg"  class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Murree</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#book" class="btn btn-primary">Book Now</a>
          </div>
        </div>   
     </div>

     <div class="col-md-4">
      <div class="card text-bg-info mb-3" style="max-width: 190%; border: none;" id="card">
        <img src="Home page pic/gitgit.jpg"  class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gilgit</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#book" class="btn btn-primary">Book Now</a>
        </div>
      </div>   
   </div>

   <div class="col-md-4">
    <div class="card text-bg-info mb-3" style="max-width: 190%; border: none;" id="card">
      <img src="Home page pic/kashmir.jpg" height="200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kashmir</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#book" class="btn btn-primary">Book Now</a>
      </div>
    </div>   
 </div>


 <div class="col-md-4">
  <div class="card text-bg-info mb-2" style="max-width: 190%; border: none;" id="card">
    <img src="Home page pic/skrdu.jpg"  height="200px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Skardu</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#book" class="btn btn-primary">Book Now</a>
    </div>
  </div>   
</div>





      </div>
      </div>
      </div>

     </section>


   <!-- packeges end --> 


   <div class="container">

    <main class="text">
      <h1><span>Some Beauty</span> Of Pakistan</h1>
    </main>

  <video width="700px"  autoplay style="margin-left: 200px;">
    <source src="pk viedo.mp4">
  </video>

   </div>

   <!--About us-->
<section class="about" id="about" style="background: rgb(173, 180, 70);">
<div class="container">

  <div class="main-text">
    <h1>About <Span>Us</Span></h1>
  </div>

   <div class="row" style="margin-top: 50px;">

    <div class="col-md-6">
      <div class="card">
        <img src="Home page pic/About us.jpg" alt="">
      </div>
    </div>

    <div class="col-md-6">
      <h2>How Tour Website Work</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ipsum dolorum illum corporis, obcaecati excepturi. Eos itaque exercitationem sed perferendis cupiditate aperiam quam, possimus, suscipit ipsa numquam ab doloribus accusamus..</p>
      <button id="about-btn">Read More..</button>
    </div>
  </div>
</div>
</section>
   <!--About us end-->
   

   <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13357179.417100354!2d69.3451165!3d30.375321!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1411724375639" frameborder="0" style="border:0"></iframe>
		    <span></span>
			</div>
  
    <!--Footer -->
    <footer id="footer">
      <h1><span>Tra</span>vel</h1>
      <section id="contact2">
        <div class="footer">
          <div class="main">
            <div class="list">
            <h4>Quick Links</h4>

            <ul>
              <li><a href="" >About us </a></li>
              <li><a href="">Terms & Condition</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Help</a></li>
              <li><a href="">Tour</a></li>
            </ul>
            </div>

            <div class="list">
              <h4>Contact us</h4>
              <ul>
                <li><a href="">Abdullahbinata450@gmail.com</a></li>
                <li><a href="">+92 316-04844-10</a></li>
                <li><a href="">AlyanShahid@gmail.com</a></li>
                <li><a href="">001-9798340-10</a></li>
                <li><a href="">ShayanAli@gmai.com</a></li>
              </ul>
              </div>

              <div class="list">
                <h4>Conect</h4>
                <div class="social-links">
                  <i class="fab fa-whatsapp"></i>
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-twitter"></i>
          
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="credit">
                  <p>\</a></p>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </section>
    
    </footer>
    <!-- Footer  -->














  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>