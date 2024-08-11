<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="logoutcss.css">

    <title>Expert_page</title>
</head>
<body>
<header class="heading">
        <div class="logobox">
            <img src="logo1.jpg" alt="logo">
        </div>
        <div class="logout">
    <a href="user_logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
        <h1>Farming Assistance</h1>
        <p>Get the support you need for successful farming</p>
        <div class="head">
            <button><a href="firstpage.php">home</a></button>
            <button><a href="about_us.html">About Us</a></button>
            <button><a href="majorcrop.html">Major Crops</a></button>
            <button><a href="Appointment_page.php">Book Appointment</a></button>


            <button><a href="contactus.php">Contact us</a></button>

            <div class="drplogin">

            </div>
        </div>
    </header>

   

<section class="section1">
    <?php 
        include '_connection.php';
        $sql = "SELECT * FROM `experts`";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
          echo '
        <div class="feature">
            <img src="' . $row["image"] . '" alt="' . $row["name"] . '">
            <p>' . $row["name"] . '</p>
            <p>' . $row["expertType"] . '</p>
            <p>For more information, book an appointment</p>
            <a href="Appointment_page.php?name=' . $row['name'] . '"><button>Book</button></a>
        </div>';
        }
        ?>
  </section>
  <section class="review" id="review">
    <a href="add_reviews.php">add reviews</a>
    <h1 class="heading">Customer's <span>Review</span></h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="rahul.jpg" alt="photo">
                <p>I've been using Farming Assistant for a while now, and it's become an indispensable part of my farming routine. The versatility of the website is astounding. The resource library is vast, and the articles are well-researched and practical. The team behind Farming Assistant deserves applause for creating such a valuable resource for the farming community. It's a true ally for modern farmers.</p>
                <h1>Rahul</h1>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half"></i>
                </div>
            </div>
            <?php 
            include '_connection.php';
            $sql = "SELECT * FROM `review`";
            $result = $conn->query($sql);
            while($row=$result->fetch_assoc()){
            echo'
            <div class="box">
                    <img src="' . $row["image"] . '" alt="photo">
                    <p>'. $row["description"].'</p>
                    <h1>' . $row["name"] . '</h1>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half"></i>
                    </div>
                </div>
                ';
            }
            ?>

            <div class="box">
                <img src="abhi.jpg" alt="photo">
                <p>Farming Assistant is an absolute gem for anyone involved in agriculture. It's a one-stop platform that offers a treasure trove of information and tools. The weather forecasting feature helps me plan my planting and harvesting schedules effectively. The pest and disease management section has saved my crops more than once. The best part? It's all presented in a user-friendly manner that even the least tech-savvy farmer can appreciate. It's a must-visit site for anyone serious about farming.</p>
                <h1>Abhishek</h1>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half"></i>
                </div>
            </div>
            

            <div class="box">
                <img src="aman.jpg" alt="photo">
                <p>I can't recommend Farming Assistant enough! As a beginner in the world of farming, I was overwhelmed with information, but this website has been a lifesaver. The step-by-step guides and expert advice have helped me start my small farm with confidence. The interactive tools for soil analysis and crop planning have been especially useful. Plus, the community forum allows me to connect with experienced farmers and get answers to my specific questions. Farming Assistant has made my farming journey enjoyable and successful.</p>
                <h1>Aman</h1>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half"></i>
                </div>
            </div>

            <div class="box">
                <img src="nitish.jpg" alt="photo">
                <p>Farming Assistant has truly been a game-changer for my agricultural endeavors. This website offers a wealth of valuable resources and tools that have significantly improved the efficiency and productivity of my farming operations. The easy-to-navigate interface and comprehensive guides on various farming techniques make it an invaluable resource for both novice and experienced farmers. Whether you're seeking crop advice, irrigation solutions, or pest control strategies, Farming Assistant has you covered. It's become my go-to platform for all things farming.</p>
                <h3>Nitish</h3>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half"></i>
                </div>
            </div>


        </div>
    </div>
  </section>
</body>
<body>
<style id="headerinfo">
        header {
            background-color:rgb(5, 62, 4);
            color: #fff;
            /* padding: 10px; */
            text-align: center;
        }

        .heading h1 {
            font-size: 24px;
            margin: 0;
        }

        .heading p {
            font-size: 16px;
            margin: 10px 0;
        }

        /* CSS styles for the main section */
        .heading section {
            padding: 20px;
            text-align: center;
        }

        .heading h2 {
            font-size: 20px;
            margin: 0;
        }

        .heading .feature {
            display: inline-block;
            width: 350px;
            margin: 50px;
            border: #24262b solid;
            padding: 10vh;
        }

        .heading .feature p {
            font-style: italic;
        }

        .heading .feature h3 {
            font-family: 'Courier New', Courier, monospace;
        }

        .heading .head {
            display: flex;
            justify-content: space-around;
            align-items: center;

        }

        .heading .head a {
            text-decoration: none;
            color: black;

        }
        .heading .logobox img{
        height: 100px;
        width: 130px;
        }

        .heading li {
            text-decoration: none;
        }

        .heading .head button {
            font-size: larger;
            border-radius: 1vh;
            padding: 2vh;
            width: 18vw;


        }
        </style>
    <style>
      body{
        overflow-x: hidden;
      }
         .feature {
    display: inline-block;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 350px;
    margin: 50px;
    border: #24262b solid;
    border-radius: 10px;
    border-color: skyblue;
    padding:10vh ;

    }
  img{
    background-color: cover;
    height:fit-content;
    width: 350px;
  }
  .feature p{
    font-style: italic;
    font-weight:bolder;
    display: flexbox;
    text-align: center;
  }
  .feature a{
    text-decoration: none;

  }
  .feature button{

    height: 45px;
    width: 90px;
    border-color: transparent;
    background-color: #efa671;
    text-align: center;

  }
  .review .review-slider{
    border:1px solid;
    padding: 1rem;
  }
  .review .review-slider .box{
    /* display: flex; */
    border: 0px solid red;
    background:#fff;
    border-radius: .5rem;
    text-align: center;
    padding: 3rem 2rem;
    outline-offset: -1rem;
    outline: double;
    box-shadow: var(--box-shadow);
    transition: .2s linear;
  }
  .review .review-slider .box:hover{
    box-shadow: 1px 1px 10px 4px green;
  }
  .review .review-slider .box img{
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
  }
  .review .review-slider .box p{
    padding: 1rem 0;
    line-height: 1.8;
    color:black;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 1.5 rem;
  }
  .review .review-slider .box h3{
    padding-bottom:0.5rem;
    color:black;
    font-size: 2.2 rem;
  }
  .review .review-slider .box .stars i{
    color: orange;
    font-size: 2.2rem;
  }
    </style>
    
</body>


</html>