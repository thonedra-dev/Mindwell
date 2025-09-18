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
$logged_in_user = null; // Store the logged-in username
$admin_response = null;
$dismiss = isset($_GET['dismiss']); // Check if the dismiss button was clicked

try {
    // Connect to the database
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // Fetch admin response dynamically based on logged-in user
    if (!$dismiss && $user_id) {
        $stmt = $pdo->prepare("
            SELECT user_id, appointment_id, venue, time, comment, created_at 
            FROM admin_responses 
            WHERE user_id = :user_id 
            ORDER BY created_at DESC 
            LIMIT 1
        ");
        $stmt->execute([':user_id' => $user_id]);
        $admin_response = $stmt->fetch();
    }
} catch (PDOException $e) {
    $errors[] = "Database error: " . $e->getMessage();
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    $full_name = trim($_POST['full_name'] ?? '');
    $password_plain = trim($_POST['password'] ?? '');

    // Validate login credentials
    if (empty($full_name) || empty($password_plain)) {
        $errors[] = "Full name and password are required.";
    } else {
        try {
            // Check credentials
            $stmt = $pdo->prepare("SELECT id, full_name FROM users WHERE full_name = :full_name AND password = :password");
            $stmt->execute([
                ':full_name' => $full_name,
                ':password' => $password_plain,
            ]);
            $user = $stmt->fetch();

            if ($user) {
                $user_id = $user['id']; // Store user_id for dynamic content
                $logged_in_user = $user['full_name']; // Store the logged-in username

                // Fetch the admin response immediately after login
                $stmt = $pdo->prepare("
                    SELECT user_id, appointment_id, venue, time, comment, created_at 
                    FROM admin_responses 
                    WHERE user_id = :user_id 
                    ORDER BY created_at DESC 
                    LIMIT 1
                ");
                $stmt->execute([':user_id' => $user_id]);
                $admin_response = $stmt->fetch();
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
    <title>Dynamic Layout</title>
    <link rel="stylesheet" href="../css/home.css">
    <style>
        /* Landscape Section */
.landscape-section {
    height: 400px; /* Adjust height as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    background-image: url('../php/pc.png'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Overlay to dim background */
.landscape-section .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Semi-transparent black overlay */
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Content Styling */
.landscape-section .content {
    position: relative;
    text-align: center;
    color: #fff; /* White text for contrast */
    z-index: 2;
}

.landscape-section .content h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    line-height: 1.5;
}

.landscape-section .landscape-btn {
    display: inline-block;
    text-decoration: none;
    background: #28a745;
    color: #fff;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.landscape-section .landscape-btn:hover {
    background: #218838;
}

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
            color:  #28a745;
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
            color: #28a745;
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
            background-color: #28a745;
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
    <!-- Section: Left (Forms) and Right (Dynamic Content) -->
    <section id="first" class="contact-section scroll-animate from-left delay-1">
        <div class="contact-container">
            <!-- Left Side: Login and Appointment Form -->
            <div class="contact-form">
                <h3 style="font-size: 1.5rem; font-weight: bold; background-color: #000; color: #28a745; padding: 5px 10px; border-radius: 5px;">
                    Counselor Appointments &rarr;
                </h3><br>

                <?php if ($logged_in_user): ?>
                    <h4>Welcome, <?php echo htmlspecialchars($logged_in_user); ?>!</h4>
                <?php endif; ?>

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
                    <h4>Log In</h4>
                    <form method="POST" action="">
                        <label for="full_name">Full Name:</label>
                        <input type="text" id="full_name" name="full_name" required>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>

                        <button type="submit" name="login" class="btn-submit">Log In</button>
                    </form>
                <?php else: ?>
                    <!-- Appointment Form -->
                    <h4>Book an Appointment</h4>
                    <form method="POST" action="">
                        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>">

                        <label for="phone_number">Phone Number:</label>
                        <input type="tel" id="phone_number" name="phone_number" placeholder="555-555-5555" required>

                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <button type="submit" name="appointment" class="btn-submit">Book Appointment</button>
                    </form>
                <?php endif; ?>
            </div>

            <!-- Right Side: Dynamic or Fixed Content -->
            <div class="contact-details scroll-animate from-right delay-2">
    <?php if ($admin_response && !$dismiss): ?>
        <div class="response-details">
            <h3>Admin Response</h3>
            <p><strong>Venue:</strong> <?php echo htmlspecialchars($admin_response['venue']); ?></p>
            <p><strong>Time:</strong> <?php echo htmlspecialchars($admin_response['time']); ?></p>
            <p><strong>Comment:</strong> <?php echo htmlspecialchars($admin_response['comment']); ?></p>
            <a href="?dismiss=1" class="btn-dismiss">Dismiss</a>
        </div>
    <?php else: ?>
        <!-- Replaced the placeholder with an image -->
        <div class="map-container">
            <h3>Albukhary International University</h3>
            <img src="../image/school.jpg" alt="School Location" style="width: 100%; height: auto; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        </div>
        <div class="details">
            <h3>Get in touch</h3>
            <p><a href="mailto:thone.dra@student.aiu.edu.my">thone.dra@student.aiu.edu.my</a></p>
            <h3>Location</h3>
            <p> Address: Jalan Tun Abdul Razak 05200 Alor Setar Kedah. Telephone No.: 04-774 7300 Fax No.: 04-774 7310 E-Mail: qa@aiu.edu.my</p>
        </div>
    <?php endif; ?>
</div>
        </div>
    </section>

    <section class="landscape-section">
    <div class="overlay">
        <div class="content">
            <h2>"Calm your thoughts, let AI guide your journey."</h2>
            <a href="https://deepmind.google/technologies/gemini/" class="landscape-btn">Explore More</a>
        </div>
    </div>
    </section>



    <!-- About Section -->
   <!--
    <section class="about-section">
    <div class="about-content">
        <div class="about-text">
            <h4>Empowering Minds</h4>
            <h2>Relaxation AI TOOL</h2>
            <p>
                Explore your trusted mental health platform, offering personalized resources and 24/7 AI-powered chat support to guide you toward better well-being.
            </p>
            <a href="https://deepmind.google/technologies/gemini/" class="about-link">Get in touch</a>
        </div>
    </div>
</section> 
    -->


    <!-- Footer -->
    <footer class="footer scroll-animate from-bottom delay-3">
        <div class="footer-links">
            <a href="#first">Schedule Appointment</a>
            <a href="assess.php">Complete Intake</a>
            <a href="resource.php">Resources</a>
            <a href="privacy.php">Privacy Policy</a>
        </div>
        <div class="footer-credit">
            <p>Web design by <a href="#" class="footer-credit-link"><strong>Master Mind</strong></a></p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".scroll-animate");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                        }
                    });
                },
                { threshold: 0.2 }
            );

            elements.forEach((el) => observer.observe(el));
        });
    </script>
</body>
</html>
