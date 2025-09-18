<?php
// Database connection parameters
$host = "localhost";
$port = 4306;
$dbname = "tttt";
$username = "root";
$password = "your_password";

// Initialize variables
$errors = [];
$success_message = "";

// Connect to the database
try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // Fetch user_id and appointment_id from GET parameters
    $user_id = $_GET['user_id'] ?? null;
    $appointment_id = $_GET['appointment_id'] ?? null;

    // Ensure user_id and appointment_id are provided
    if (!$user_id || !$appointment_id) {
        $errors[] = "Invalid request. User ID and Appointment ID are required.";
    }

    // Fetch username and email based on IDs
    $user_details = [];
    if ($user_id && $appointment_id) {
        $sql = "
            SELECT 
                users.full_name AS username,
                users.email AS user_email
            FROM users
            WHERE users.id = :user_id
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':user_id' => $user_id]);
        $user_details = $stmt->fetch();
    }

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $venue = $_POST['venue'] ?? null;
        $comment = $_POST['comment'] ?? null;
        $time = $_POST['time'] ?? null;

        // Validate form fields
        if (!$venue || !$comment || !$time) {
            $errors[] = "All fields (Venue, Comment, Time) are required.";
        }

        if (empty($errors)) {
            // Insert the response into the admin_responses table
            $sql = "
                INSERT INTO admin_responses (user_id, appointment_id, venue, time, comment, created_at)
                VALUES (:user_id, :appointment_id, :venue, :time, :comment, NOW())
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':user_id' => $user_id,
                ':appointment_id' => $appointment_id,
                ':venue' => $venue,
                ':time' => $time,
                ':comment' => $comment,
            ]);

            $success_message = "Response has been successfully submitted.";
        }
    }
} catch (PDOException $e) {
    $errors[] = "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respond to Appointment</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f8f9fa; /* Subtle light gray background */
            color: #343a40; /* Professional dark gray text */
            margin: 0;
            padding: 20px;
        }

        .back-arrow {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #495057;
            font-size: 1rem;
            margin-bottom: 20px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .back-arrow:hover {
            color: #17a2b8; /* Cool blue-green hover */
        }

        .back-arrow span {
            margin-left: 10px;
        }

        h1 {
            text-align: center;
            font-size: 2.2rem;
            color: #495057;
            margin-bottom: 20px;
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff; /* White form background */
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #495057;
        }

        input[type="text"], input[type="datetime-local"], textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 1rem;
            color: #495057;
        }

        input[type="text"]:focus, input[type="datetime-local"]:focus, textarea:focus {
            border-color: #17a2b8; /* Cool blue-green focus color */
            outline: none;
            box-shadow: 0 0 5px rgba(23, 162, 184, 0.5);
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #17a2b8; /* Cool blue-green */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #138496;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
        }

        .errors, .success {
            max-width: 600px;
            margin: 20px auto;
            padding: 15px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .errors {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <!-- Back Arrow Button -->
    <a href="admin.php" class="back-arrow">
        ← <span>Back to Admin Panel</span>
    </a>

    <h1>Respond to Appointment</h1>

    <?php if (!empty($errors)): ?>
        <div class="errors">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($success_message): ?>
        <div class="success">
            <?php echo htmlspecialchars($success_message); ?>
        </div>
    <?php endif; ?>

    <?php if ($user_id && $appointment_id): ?>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user_details['username'] ?? 'Unknown'); ?>" readonly>

            <label for="user_email">Email</label>
            <input type="text" id="user_email" name="user_email" value="<?php echo htmlspecialchars($user_details['user_email'] ?? 'Unknown'); ?>" readonly>

            <label for="venue">Venue</label>
            <input type="text" id="venue" name="venue" placeholder="Enter the venue" required>

            <label for="time">Time</label>
            <input type="datetime-local" id="time" name="time" required>

            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" placeholder="Enter your comment" rows="5" required></textarea>

            <button type="submit">Submit Response</button>
        </form>
    <?php endif; ?>
</body>
</html>
