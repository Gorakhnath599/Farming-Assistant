<?php

$password = "admin";
$_SESSION["username"] = $password;
if(!isset($_SESSION['username'])) {
  echo "<script>window.location.href = 'loginpage.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style id="headerinfo">
        header {
          background-color:rgb(5, 62, 4);
        color: #fff;
        /* padding: 20px; */
        text-align: center;
        }
        .logobox img{
        height: 100px;
        }

        h1 {
          font-size: 24px;
          margin: 0;
        }
    
        p {
          font-size: 16px;
          margin: 10px 0;
        }
    
        section {
          padding: 20px;
          text-align: center;
        }
    
        h2 {
          font-size: 20px;
          margin: 0;
        }
        .feature {
          display: inline-block;
          width: 350px;
                margin: 50px;
                border: #24262b solid;
                padding:10vh ;
              }
        .feature p{
          font-style: italic;
        }
        .feature h3{
          font-family: 'Courier New', Courier, monospace;
        }
        .head {
          display: flex;
          justify-content: space-around;
          align-items: center;
        
        }
        .head a{
          color: black;
        }
        li{
          text-decoration: none;
        }
        .head button{
          font-size:larger;
          border-radius: 1vh;
          padding: 2vh;
          width: 18vw;
        
        
        }
</style> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="logoutcss.css">
    <!-- <link rel="stylesheet" href="admin.css"> -->
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
      <button><a href="admin.php">Dashboard</a></button>
      <button><a href="showUsers.php">Users</a></button>
      <!-- <button><a href="showAppointment.php">appoinments</a></button> -->

      <button><a href="enquiries.php">Enquiries</a></button>
      <button><a href="addExpert.php">Add Experts</a></button>
      <button><a href="showMarketInsight.php">Market Insight</a></button>

      
    </div>
  </header>
    <!-- Sidebar/Navigation -->
    <!-- <div class="sidebar">
        <ul>
            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="showUsers.php">Users</a></li>
            <li><a href="showAppointment.php">appoinments</a></li>
            <li><a href="enquiries.php">Enquiries</a></li>
            <li><a href="addExpert.php">Add Experts</a></li>        
        </ul>
    </div> -->

    <!-- Main Content -->
    <!-- <div class="content">
    Header
        <div class="header">
            <h1>Welcome to the Admin Panel</h1>
        </div>-->

        <!-- Content Area -->
        <!-- <div class="content-box"> -->
            <!-- <h2>Dashboard</h2>
            <p>This is the main content area of your admin panel.</p> -->
        </div>
    </div>
</body>
</html>