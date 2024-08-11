<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_connection.php';
    
    
    $email = $_POST['name'];
    $mobile = $_POST['phone'];
    $descrip = $_POST['message'];

            $sql = "INSERT INTO `contact`(`email`, `mobile_no`, `description`) VALUES ('$email','$mobile','$descrip')";
            // -- $sql = "INSERT INTO `contact`( `email`, `mobile_no`, `description`) VALUES ('$email','$descrip')";

            $result = mysqli_query($conn,$sql);


            if ($result == 1){
              echo '<script>
              alert("Thanks for contact us we will call you soon ");
              </script>';
              }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="logoutcss.css">
    <title>contact_page</title>
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
            <button><a href="contactus.php">Contact us</a></button>
      
          </div>
        </header>
    
    <main>
        <form action="contactus.php" method="POST">
            <h1>contact details</h1>            
            <input type="text" id="name" name="name" required placeholder="email">
            
            <input type="number" id="phone" name="phone" required placeholder="mobile_no">  
            
            <label for="message">Additional Information:</label>
            <textarea id="message" name="message" rows="4"></textarea>
            
            <input type="submit" value="submit">
        </form>
    </main>
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
        main {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
main h1{
    display: flex;
    justify-content: center;
}

form {
    display: flex;
    flex-direction: column;
}

input[type="text"],
input[type="number"],
textarea {
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: green;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: rgb(32, 196, 32);
}

    </style>
</body>
</html>