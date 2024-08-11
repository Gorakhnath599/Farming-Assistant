<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show appoinments</title>
    
    <!-- <style>
        table, th, td {
    padding: 10px;
    }
    th{
        background-color: black;
        color: white;

    }
    </style> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h3 {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
         a:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
        input[type="submit"] {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
            text-decoration: none;}
    </style>
</head>
<body>
    <?php 
        include '_connection.php';
        if (isset($_POST['delete'])) {
            $district = $_POST['district'];
            $query = "DELETE FROM crops WHERE district = '$district'";
            $conn->query($query);
        }
        $sql = "SELECT * FROM `crops`";
        $result = mysqli_query($conn,$sql);

        if ($result){
            echo '   
             <h3>Market Insight</h3>
            <table>
                <tr>
                    <!-- <th>User ID</th> -->
                    <th>market(District Wise)</th>
                    <th>crop with variety</th>
                    <th>model price(Quintal)</th>
    
                    </tr>';
                    

                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <td>' . $row["District"] . '</td>
                            <td>' . $row["cropName"] . '</td>
                            <td>' . $row["price"] . '</td>
                            <td>
                            <form action="showMarketInsight.php" method="post">
                            <input type="hidden" name="district" value="' . $row["District"] . '">
                            <a href="#">update</a>

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