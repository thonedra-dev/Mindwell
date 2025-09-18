<?php
// Database connection parameters
$host = "localhost"; // Adjust as per your environment
$port = 4306;
$dbname = "tttt";
$username = "root"; // Replace with your DB username
$password = "your_password";     // Replace with your DB password

// Initialize variables
$errors = [];
$success = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password_plain = $_POST['password'] ?? '';

    // Validation
    if (empty($full_name) || empty($email) || empty($password_plain)) {
        $errors[] = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($errors)) {
        try {
            // Connect to the database
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

            // Insert into the users table
            $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password) VALUES (:full_name, :email, :password)");
            $stmt->execute([
                ':full_name' => $full_name,
                ':email' => $email,
                ':password' => $password_plain, // Plain text password stored
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
    <title>Register</title>
    <link rel="stylesheet" href="../css/home.css">
    <style>
      .nav-header {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px 40px;
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand-logo {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        .brand-logo span {
            color: #28a745;
        }

        .menu-list {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        .menu-list a {
            text-decoration: none;
            color: #555;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .menu-list a:hover {
            color:  #28a745;
        }

        .nav-contact-btn {
            background-color:  #28a745;
            color: #fff;
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .nav-contact-btn:hover {
            background-color:  #28a745;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
            }

            .menu-list {
                flex-direction: column;
                gap: 15px;
                align-items: center;
                margin-top: 10px;
            }

            .nav-contact-btn {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
     <header class="nav-header">
        <nav class="nav-container">
            <div class="brand-logo">MIND<span>WELL</span></div>
            <ul class="menu-list">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="article.php">Resources</a></li>
                <li><a href="register.php">Register</a></li>    
                <li><a href="assess.php">Assess</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <a href="mastermind.php" class="nav-contact-btn">Contact</a>
        </nav>
    </header>

 <!-- Register Section -->
<section id="register" class="register-section">
    <form class="register-form" method="POST" action="">
        <h2>Register</h2>

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
                <p>Registration successful! You can now <a href="login.php">log in</a>.</p>
            </div>
        <?php endif; ?>

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>

        <button type="submit" class="btn-submit">Register</button>
    </form>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-links">
            <a href="services.php">Schedule Appointment</a>
            <a href="#">Complete Intake</a>
            <a href="resource.php">Resources</a>
            <a href="#">Privacy Policy</a>
        </div>
        <div class="footer-credit">
            <p>Web design by <a href="#" class="footer-credit-link"><strong>Master Mind</strong></a></p>
        </div>
    </footer>
</body>
</html>
