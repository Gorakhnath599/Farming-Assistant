<?php
$host = "localhost";
$uname = "root";
$pass = "";
$database = "gorakh";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    $conn = new mysqli($host, $uname, $pass, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM register WHERE mobile_no = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['password'])) {
            $_SESSION["username"] = $mobile;
            header("Location: firstpage.php");
            exit();
        }
    }

    if ($mobile == "admin" && $password == "admin") {
        header("Location: admin.php");
        exit();
    }

    $abc = "Invalid credentials";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <form method="POST">
            <div class="head">
                <h1>Login</h1>
            </div>
            
            <div class="textbox">
                <input type="text" name="mobile" placeholder="Mobile no/username" id="mobile" required>
                <br>
                <br>
                <input type="password" name="password" placeholder="Password" id="password" required>
            </div>
            
            <div class="forgetbox">
                <a href="updateUser.php">Forgot password?</a>
            </div>
            
            <br><br>
            
            <div class="btn">
                <b><input type="submit" value="Login"></b>
            </div>
            
            <div class="signup">
                <p>Don't have an account? <a href="registrationform.php">Sign up</a></p>
                <br>
                <div class="forgetbox">
                    <h3><?php echo isset($abc) ? $abc : ''; ?></h3>
                </div>
        
                <a href="expertLoginPage.php">Login as expert</a>
            </div>
        </form>
    </div>

</body>
<body>
    <style>
        h3{
            color: red;
        }
    </style><body>
</html>
