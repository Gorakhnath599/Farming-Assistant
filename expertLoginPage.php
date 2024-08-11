<?php
$host = "localhost";
$uname = "root";
$pass = "";
$database = "gorakh";

session_start();
$conn = new mysqli($host, $uname, $pass, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];

    $query = "Select * from experts where name = '$name' AND id = '$id'";

    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);
    if($num==1){
        $_SESSION["name"] = $name;
        header("Location: expertDashboard.php");
    }
    else{
        die("invalid credential");
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <form method="POST">
            <div class="head">
                <h1> Expert login</h1>

            </div>
            
            <div class="textbox">
                <input type="text" name="name"   placeholder="name" id="name" required >
            <br>
            <br>
            <input type="password" name="id" placeholder="id"  id="id" required>

            </div>
            
            
            <br><br>
            <div class="btn">
                <b><input type="submit" value="login"></b>
                
               
                
            </div>
            <div class="signup">
                <a href="loginpage.php">login as a user</a>
            </div>

            </div>
           
            
        </form>
        <a href="loginpage.php">user login !</a>
    </div>
    
    
    
</body>
</html>