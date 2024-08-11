<?php 
// session_start();
// if(!isset($_SESSION["username"])){
//   header("Location:loginpage.php");
// }
if (isset($_GET['name'])){
  $expertName = $_GET['name'];
  // echo $_GET['name'];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_connection.php';
    
    
    $clientName = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $date = $_POST['date'];
    $descrip = $_POST['message'];

            $sql = "INSERT INTO `appointment1`(`name`, `email`, `mobile`, `date`, `description`, `expertName`) VALUES ('$clientName','$email','$mobile','$date','$descrip', '$expertName')";
            $result = mysqli_query($conn,$sql);

            if ($result == 1){
              echo '<script>
              alert("Your appointment is booked! we will contact you soon");
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
    <title>Book an Appointment</title>
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
input[type="email"],
input[type="text"],
input[type="date"],
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
select {
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        max-width: 100%;
        font-size: 16px;
    }

    select:focus {
        outline: none;
        border-color: green;
    }


    </style>
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

  <button><a href="Appointment_page.php">Book Appointment</a></button>
  <button><a href="contactus.php">Contact us</a></button>
</div>
    </header>
    <main>
        <form method="POST" onsubmit="return validateForm()">
            <h1>Book an Appointment</h1>
            
            <input type="text" id="name" name="name" required placeholder="Name">
            
            <input type="email" id="email" name="email" required placeholder="email">
            
            <input type="text" id="phone" name="phone" required placeholder="mobile_no">
            
            <label>Date:</label>
            <input type="date" id="date" name="date" required>
            
            <label>Additional Information:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <input type="submit" value="Book Appointment" >
        </form>
    </main>
    <script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var date = document.getElementById("date").value;
        var message = document.getElementById("message").value;

        // Validate Name (you can customize this regex)
        var namePattern = /^[a-zA-Z\s]+$/; // Only allow letters and spaces
        if (!name.match(namePattern)) {
            alert("Please enter a valid name with letters and spaces only.");
            return false;
        }

        // Validate Email using a regular expression
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!email.match(emailPattern)) {
            alert("Please enter a valid email address.");
            return false;
        }
        if (phone.length !== 10) {
            alert("Please enter a valid 10-digit mobile number.");
            return false;
        }
        if (!date) {
            alert("Please select a date for the appointment.");
            return false;
        }
        if (!message.trim()) {
            alert("Please provide additional information.");
            return false;
        }

        return true;
    }
</script>
    
</body>
</html>
