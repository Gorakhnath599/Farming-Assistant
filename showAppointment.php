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
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: rgb(215, 19, 19);
        }

    </style>
</head>
<body>
    <?php 
        include '_connection.php';
        $sql = "SELECT * FROM `appointment1`";
        $result = mysqli_query($conn,$sql);
        if ($result){
            echo '   
             <h3>Appointment page</h3>
            <table>
                <tr>
                    <!-- <th>User ID</th> -->
                    <th>name</th>
                    <th>Email</th>
                    <th>Mobile_No</th>
                    <th>ExpertName</th>
                    <th>date</th>
                    <th>description</th>
    
                    </tr>';
                    

                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <td>' . $row["name"] . '</td>
                            <td>' . $row["email"] . '</td>
                            <td>' . $row["mobile"] . '</td>
                            <td>' . $row["expertName"] . '</td>
                            <td>' . $row["date"] . '</td>
                            <td>' . $row["description"] . '</td>
                            <td>
                                <form action="showAppointment.php">
                                    <input type="hidden" name="user_id" value="">
                                    <input type="submit" name="accept" value="accept">
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
    <a href="admin.php">Back to Dashboard</a>


        
</body>
</html>