<?php
session_start();

// Database connection
$host = 'localhost';
$db   = 'u345348146_sqftinfra';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Verify the password (plain text comparison, since the password is not hashed)
    if ($user && $password === $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: Dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQFTinfra | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-purple-800 to-pink-800 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-md flex overflow-hidden">
        <div class="hidden md:block md:w-1/2 bg-gray-200 p-8">
            <img src="./Assets/Image/Secure.png" alt="Login Image" class="object-cover h-full w-full">
        </div>
        <div class="w-full md:w-1/2 p-8">
            <img src="./Assets/Image/SQFT_INFRA_Logo.png" class="w-64 mx-auto" alt="SQFT INFRA Logo">

            <?php if ($error) : ?>
                <p class="text-red-500 text-center mb-4"><?php echo $error; ?></p>
            <?php endif; ?>

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-8">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="example@email.com" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="**" required>
                </div>
                <div class="flex items-center justify-center">
                    <button class="text-white bg-gradient-to-r from-purple-600 to-pink-600 border-0 py-2 px-8 focus:outline-none hover:bg-gradient-to-r hover:from-purple-700 hover:to-pink-700 rounded-full text-lg transition duration-300" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>