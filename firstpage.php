<?php 
session_start();
if(!isset($_SESSION['username'])) {
  echo "<script>window.location.href = 'loginpage.php';</script>";
  // include('SelectImg.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index_page</title>
  <link rel="stylesheet" href="firstpage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
</head>

<body>
  <header>
  <div class="logobox">
                <img src="logo1.jpg" alt="logo">
            </div>
            <div class="logout">
    <a href="user_logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    <h1>Farming Assistance</h1>
    <p>Get the support you need for successful farming</p>
   

    <div class="head">
      <button><a href="firstpage.php">Home</a></button>
      <button><a href="about_us.html">About Us</a></button>
      <button><a href="majorcrop.html">Major Crops</a></button>

      <button><a href="Appointment_page.php">Book Appoinment</a></button>
      <!-- <button><a href="contactus.php">Contact us</a></button> -->

    </div>
    </button>
  </header>




  <section>
    <h2>Features</h2>
    <div class="feature">
      <h3><a href="expertpage.php">Expert Advice</a></h3>
      <p>Access valuable advice from experienced farmers and agricultural experts.</p>
    </div>

    <div class="feature">
      <h3><a href="market_insight.php">Market Insights</a></h3>
      <p>Get insights into market trends and prices to make informed decisions about your crops.</p>
    </div>
  </section>

  <div class="servicehead">
    <h1>Our Services</h1>
  </div>

  <div class="servicecontainer">

    <div class="img">
      <img src="serviceimg.jpeg" alt="Consultation">
      <h1>Crop Consultation</h1>
      <p>Get expert advice on improving crop yield and <br>quality</p>
      <button>More info</button>

    </div>

    <div class="img">
      <img src="serviceirigation.jpeg" alt="Irrigation Solutions">
      <h1>Irrigation Solutions</h1>
      <p>Optimize water usage for maximum efficiency and cost-effecticeness</p>
      <a href="irrigationpage.php"><button>More info</button></a>
    </div>
  </div>
  <div class="aboutuscontainer">
    <h1>About us</h1>
    <p>About us
    Now a days, more people are using mobile phones. There many person don’t have or less knowledge about farming and its techniques. So my website would be the bridge between them. The website would assit the farmer, the new and experienced one about the techniques, best for their crops, and their land to obtain the atmost.It will allow the authorized users to book more than one appointment.It will also have a section for promotion purposes of sponsors.  </p>
  </div>
  
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Company</h4>

          <ul>
            <li><a href="# ">about us</a></li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="# ">review</a></li>
            <li><a href="# ">Services</a></li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact infromation</h4>
          <ul>
            <li>
              <p>Phone: (123) 456-7890</p>
            </li>
            <li>
              <p>Email: info@example.com</p>
            </li>
            <li>
              <p>Address: 123 Farm Lane, City</p>
            </li>


          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
            <a href="#"><i class="fab fa-instagram"></i></a>
            <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->


          </div>
        </div>
      </div>
    </div>
  </footer>


</body>

</html>