<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: Dashboard.php");
    exit();
}
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-800 to-pink-800 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold mb-4 text-center">Welcome to the Home Page</h1>
        <p class="text-xl mb-8 text-center">You are logged in as: <?php echo htmlspecialchars($email); ?></p>
        <div class="flex justify-center">
            <a href="logout.php" class="text-white bg-gradient-to-r from-purple-600 to-pink-600 border-0 py-2 px-8 focus:outline-none hover:bg-gradient-to-r hover:from-purple-700 hover:to-pink-700 rounded-full text-lg transition duration-300">
                Logout
            </a>
        </div>
    </div>
</body>
</html>