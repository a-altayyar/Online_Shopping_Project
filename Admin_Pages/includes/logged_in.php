<?php
// Make sure you are logged in 
if (!isset($_SESSION['A_ID']))
    header("Location: login.php");
?>