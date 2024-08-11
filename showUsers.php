<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show appoinments</title>
    <style>
        /* Basic styling for the page */
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
        a{
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            padding: 1%;
            border-radius: 3px;
        }

    </style>
</head>
<body>
    <?php 
        include '_connection.php';
        if (isset($_POST['delete'])) {
            $name = $_POST['name'];
            $query = "DELETE FROM register WHERE name = '$name'";
            $conn->query($query);
        }
        $sql = "SELECT * FROM `register`";
        $result = mysqli_query($conn,$sql);

        if ($result){
            echo '   
             <h3>USERS</h3>
            <table>
                <tr>
                    <!-- <th>User ID</th> -->
                    <th>Mobile No</th>
                    <th>Name</th>
                    <th>password_No</th>
    
                    </tr>';
                    

                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <td>' . $row["mobile_no"] . '</td>
                            <td>' . $row["name"] . '</td>
                            <td>' . $row["password"] . '</td>
                            <td>
                            <form action="showUsers.php" method="post">
                            <input type="hidden" name="name" value="' . $row["name"] . '">
                            <a href="updateUser.php">update</a>

                            <input type="submit" name="delete" value="Delete">
                        </form>
                            </td>
                        </tr>';
                    }
                    
           echo '</table>';
            
        } else {
            echo "No appointments yet.";
        }
            
        // }
    ?>
    <!-- Display Orders -->
    <a href="admin.php">Back to Dashboard</a>


        
</body>
</html>