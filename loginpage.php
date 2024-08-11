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
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    $query = "Select * from register where mobile_no = '$mobile' AND password = '$password'";

    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);
    if($num==1){
        $_SESSION["username"] = $mobile;
        header("Location: firstpage.php");
    

    }
    elseif($mobile=="admin" and $password=="admin"){
        echo '<script>
        window.location.href = "admin.php";
        </script>';
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
                <h1>login</h1>

            </div>
            
            <div class="textbox">
                <input type="text" name="mobile"   placeholder="Mobile no/username"id="mobile" required >
            <br>
            <br>
            <input type="password" name="password" placeholder="password"  id="password" required>

            </div>
            <div class="forgetbox">
                <a href="updateUser.php">Forgot password?</a>
            </div>
            
            
            <br><br>
            <div class="btn">
                <b><input type="submit" value="login"></b>
            </div>
            <div class="signup">
                <p>Don't have an account? <a href="registrationform.php">Sign up</a></p>
                <br>
                <div class="forgetbox">
                <a href="expertLoginPage.php">login as expert</a>
            </div>


        </div>
            
        </form>
    </div>
    
    
    
</body>
</html>