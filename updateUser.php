<?php  
include '_connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $newName = $_POST['newName'];
    $newMobileNo = $_POST['newMobileNo'];
    $newPassword = $_POST['newPassword'];

    $uquery = "UPDATE register SET mobile_no = '$newMobileNo', name = '$newName', password = '$newPassword' WHERE name = '$name'";
    
    if ($conn->query($uquery)) {
        echo '<script>alert("Your profile has been updated");</script>';
        echo'hello world';
        // header("Location: loginpage.php");
        exit;
    } else {
        echo '<script>alert("Error updating profile: ' . $conn->error . '");</script>';
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateUser</title>
</head>
<body>
    <form action="updateUser.php" method="post">
    <h1>Update your profile</h1>
    <label>Enter your name</label>
    <input type="text" name="name" id="name">
    <label>Update your name</label>
    <input type="text" name="newName" id="newName">
    <label>Update your mobile_no</label>
    <input type="text" name="newMobileNo" id="newMobileNo">
    <label>Update your password</label>
    <input type="text" name="newPassword" id="newPassword">
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
<body>
<style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</body>
</html>
