<?php 
include '_connection.php';

$sql = "SELECT * FROM `experts`";
$result = mysqli_query($conn, $sql);

// Delete the experts
if (isset($_POST['delete'])) {
    $name = $_POST['name'];
    $delete_query = "DELETE FROM experts WHERE name = '$name'";
    $conn->query($delete_query);
}

if ($conn) {
    echo '   
        <h3>Experts</h3>
        <table>
            <tr>
                <!-- <th>User ID</th> -->
                <th>Image</th>
                <th>Expert Type</th>
                <th>Name</th>
                <th>Email</th>
            </tr>';

    while ($row = $result->fetch_assoc()) {
        echo '
            <tr>
                <td>' . $row["image"] . '</td>
                <td>' . $row["expertType"] . '</td>
                <td>' . $row["name"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>
                    <form method="post" action="showExperts.php">
                        <input type="hidden" name="name" value="' . $row["name"] . '">
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>';
    }

    echo '</table>';
} else {
    echo "No appointments yet.";
}
?>
<a href="addExpert.php">Back to upload Page</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h3 {
            font-size: 24px;
            text-align: center;
            margin: 20px 0;
        }

        /* Styling for the table */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Styling for the "Delete" button */
        form {
            display: inline;
        }

        input[type="submit"] {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: rgb(215, 19, 19);
        }
</style>
</head>
</html>
