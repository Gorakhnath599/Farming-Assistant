<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_connection.php';
    $mobile = $_POST['mobileNumber'];
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmPassword'];

    $sql = "SELECT * FROM `register` where `mobile_no` = '$mobile'";
    $result = mysqli_query($conn, $sql);
    $mobileCount = mysqli_num_rows($result);

    if ($mobileCount == 0){
        if ($password == $cpassword){
            $sql = "INSERT INTO `register` (`mobile_no`, `name`, `password`) VALUES ('$mobile', '$name', '$password')";
            $result = mysqli_query($conn, $sql);
            

            if ($result){
                // echo "Your data has been successfully stored in our database"; 
                echo '<script>
                alert("Your data has been successfully stored in our database");
                window.location.href = "loginpage.php";
                </script>';
                // header("Location: loginpage.php", true, 303);
                exit();
            }
        }
    }
    else{
        if ($mobileCount > 0){
        echo '<script>
        window.location.href = "login.php";
        alert("mobile no already exists!! Try remembering password and Log in");
        </script>';
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="registrationform.php" method="POST" onsubmit="return validateForm()">
            <div class="head1">
               <b><h1>Sign Up</h1></b> 
            </div>
                <input type="number" name="mobileNumber" id="mobileNumber" placeholder="Mobile no.">
                <br><br>
                <input type="text" name="name" id="name" placeholder="Name" >
                <br><br>
                <input type="password" name="password" id="password" placeholder="Password">
                <br><br>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="ConfirmPassword">
                <br><br>

                <div class="btn">
                   
                     <input type="submit" value="submit">

                </div>
                <p>Already have an account? <a href="loginpage.php">login here!</a></p>
            </div>
    
        </form>
        <script>
    function validateForm() {
        var mobileNumber = document.getElementById("mobileNumber").value;
        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        if (mobileNumber.length !== 10 || isNaN(mobileNumber)) {
            alert("Please enter a valid 10-digit mobile number.");
            return false;
        }

        var namePattern = /^[a-zA-Z\s]+$/; 
        if (!name.match(namePattern)) {
            alert("Please enter a valid name with letters and spaces only.");
            return false;
        }
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    }
</script>
    
</body>
</html>