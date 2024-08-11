<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="logoutcss.css">
    <title>Document</title>
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
      <button><a href="firstpage.php">home</a></button>
      <button><a href="about_us.html">About Us</a></button>
      <button><a href="majorcrop.html">Major Crops</a></button>
      <button><a href="Appointment_page.php">Book Appointment</a></button>
      <button><a href="contactus.php">Contact us</a></button>
    </div>
  </header>
   
<table style="width:100%">
  <?php 
        include '_connection.php';
        $sql = "SELECT * FROM `crops`";
        $result = mysqli_query($conn,$sql);

        if ($result){
            echo '   
             <h3>Market Insight</h3>
            <table>
                <tr>
                    <!-- <th>User ID</th> -->
                    <th>market(District Wise)</th>
                    <th>crop with variety</th>
                    <th>model price(Quintal)</th>
    
                    </tr>';
                    

                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <td>' . $row["District"] . '</td>
                            <td>' . $row["cropName"] . '</td>
                            <td>' . $row["price"] . '</td>
                        </tr>';
                    }
                    
           echo '</table>';
            
        } else {
            echo "No appointments yet.";
        }
    ?>
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
      padding: 10vh;
    }

    .feature p {
      font-style: italic;
    }

    .feature h3 {
      font-family: 'Courier New', Courier, monospace;
    }

    .head {
      display: flex;
      justify-content: space-around;
      align-items: center;

    }

    .head a {
      text-decoration: none;
      color: black;

    }

    li {
      text-decoration: none;
    }

    .head button {
      font-size: larger;
      border-radius: 1vh;
      padding: 2vh;
      width: 18vw;


    }
  </style>
<style>
    .searchButton{
        padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
    }
    input{
        padding: 10px;
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        font-size: 16px;
    }
    .searchbar{
      padding: 15px;
    }

    table, th, td {
    border:1px solid black;
    padding: 15px;
    width: 100vw;
    }
    th{
        background-color: rgb(9, 68, 9);
        color: white;

    }
    tr{
         background-color: rgb(198, 228, 154);
         transition: all ease 0.1s;

    }
    tr:hover{
        background-color: rgb(200,267,167);
    }
</style>
  </body>
</html>