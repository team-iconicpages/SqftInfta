<?php
session_start();

// Database connection
$host = "localhost";
$username = "root";  // Change this if different
$password = "";      // Change this if different
$database = "sqftinfra";  // Change to your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";
$debug = "";  // For storing debug messages

// Check if the user is already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $debug .= "Email submitted: " . $email . "<br>";

    $sql = "SELECT id, email, password, full_name FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    $debug .= "Number of rows returned: " . $result->num_rows . "<br>";

    if($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $debug .= "User found. Stored hash: " . $user['password'] . "<br>";
        if(password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid email or password";
            $debug .= "Password verification failed<br>";
        }
    } else {
        $error = "Invalid email or password";
        $debug .= "No user found with this email<br>";
    }

    $stmt->close();
}

// Function to create a dummy user (for testing purposes)
function createDummyUser($conn) {
    $email = "dummy@example.com";
    $password = password_hash("password123", PASSWORD_DEFAULT);
    $fullName = "Dummy User";

    $sql = "INSERT INTO users (email, password, full_name) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $password, $fullName);

    if ($stmt->execute()) {
        return "Dummy user created successfully!";
    } else {
        return "Error creating dummy user: " . $stmt->error;
    }
}

// Uncomment the line below to create a dummy user
// echo createDummyUser($conn);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    if(!empty($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    if(!empty($debug)) {
        echo "<div style='background-color: #f0f0f0; padding: 10px; margin-bottom: 10px;'><strong>Debug Info:</strong><br>" . $debug . "</div>";
    }
    ?>
    <form method="POST" action="">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>