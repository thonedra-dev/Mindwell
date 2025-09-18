<?php
// Database connection parameters
$host = "localhost";
$port = 4306;
$dbname = "tttt";
$username = "root";
$password = "your_password";

// Initialize variables
$errors = [];
$success = false;
$user_id = null;

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    $full_name = trim($_POST['full_name'] ?? '');
    $password_plain = trim($_POST['password'] ?? '');

    // Validate login credentials
    if (empty($full_name) || empty($password_plain)) {
        $errors[] = "Full name and password are required.";
    } else {
        try {
            // Connect to the database
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

            // Check credentials
            $stmt = $pdo->prepare("SELECT id FROM users WHERE full_name = :full_name AND password = :password");
            $stmt->execute([
                ':full_name' => $full_name,
                ':password' => $password_plain, // Plain text password match
            ]);
            $user = $stmt->fetch();

            if ($user) {
                $user_id = $user['id']; // Store user_id for the appointment form
            } else {
                $errors[] = "Invalid full name or password.";
            }
        } catch (PDOException $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
}

// Handle appointment form submission
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['appointment']) && !empty($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $phone_number = trim($_POST['phone_number'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate appointment form
    if (empty($phone_number) || empty($message)) {
        $errors[] = "Phone number and message are required.";
    } else {
        try {
            // Connect to the database
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

            // Insert into appointment table
            $stmt = $pdo->prepare("INSERT INTO appointment (user_id, phone_number, message) VALUES (:user_id, :phone_number, :message)");
            $stmt->execute([
                ':user_id' => $user_id,
                ':phone_number' => $phone_number,
                ':message' => $message,
            ]);

            $success = true;
        } catch (PDOException $e) {
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Appointment</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (!empty($errors)): ?>
        <div class="errors">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($success): ?>
        <div class="success">
            <p>Appointment booked successfully!</p>
        </div>
    <?php endif; ?>

    <?php if (!$user_id): ?>
        <!-- Login Form -->
        <form method="POST" action="">
            <label for="full_name">Full Name:</label><br>
            <input type="text" id="full_name" name="full_name" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit" name="login">Login</button>
        </form>
    <?php else: ?>
        <!-- Appointment Form -->
        <h2>Book an Appointment</h2>
        <form method="POST" action="">
            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>">

            <label for="phone_number">Phone Number:</label><br>
            <input type="text" id="phone_number" name="phone_number" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br><br>

            <button type="submit" name="appointment">Book Appointment</button>
        </form>
    <?php endif; ?>
</body>
</html>
