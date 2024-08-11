<?php
session_start();
session_unset();
session_destroy();

header('location: loginpage.php');
exit();

?>

<div class="logout">
    <!-- <input type="submit" value="logout"> -->
    <a href="user_logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>