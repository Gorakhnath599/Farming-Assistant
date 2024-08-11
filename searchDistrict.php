<?php
    include '_connection.php';
    $sql = "SELECT District FROM crops";
    $result = mysqli_query($conn, $sql);
    $districts = array();

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $districts[] = $row['District'];
        }
    }
    ?>