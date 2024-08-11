<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '_connection.php';
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_error = $image['error'];

    if ($image_error === 0) {
        $image_destination = "reviewImage/" . $image_name;
        move_uploaded_file($image_tmp_name, $image_destination);

        // Use prepared statement to insert data into the database
        $sql = "INSERT INTO review (image, description, name) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $image_destination, $desc, $name);
            if (mysqli_stmt_execute($stmt)) {
                echo '<script>alert("File uploaded");</script>';
                header("Location:expertpage.php");
                exit();
                $conn->close();
            } else {
                echo '<script>alert("Error uploading file");</script>';
            }
        } else {
            echo '<script>alert("SQL statement preparation failed");</script>';
        }

        mysqli_stmt_close($stmt);
    } else {
        echo '<script>alert("Error uploading file: ' . $image_error . '");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addExperts</title>
</head>
<body>

    <form action="add_reviews.php" method="POST" enctype="multipart/form-data">
        <label>Upload the file</label>
        <input type="file" name="image" id="image" required>
        <label>description</label>
        <input type="text" name="description" id="description" required>
        <label>Name</label>
        <input type="text" name="name" id="name" required>
        <input type="submit" value="Upload" name="upload">
    </form><section class="section1">


    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="file"],
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
        .section1 {
            margin-top: 20px;
        }
    </style>
</body>
</html>
