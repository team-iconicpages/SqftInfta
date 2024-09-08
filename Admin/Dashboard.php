<?php
include './Components/dbcon.php';

// session_start();

// // Check if the user is logged in
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include './Components/Slider.php' ?>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <?php include './Components/Navbar.php' ?>
            <?php include './Components/Analyst.php' ?>
        </div>
    </div>

    <script src="./script/script.js"></script>
</body>

</html>