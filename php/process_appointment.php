
<?php

// Database connection parameters
$host = "localhost";
$port = 4306;
$dbname = "sustainability";
$username = "root";
$password = "your_password";

// Establish connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone_number = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    // Step 1: Check if the user exists in the users table
    $userQuery = "SELECT id, full_name, email FROM users WHERE full_name = ? AND email = ?";
    $stmt = $conn->prepare($userQuery);
    $stmt->bind_param("ss", $full_name, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, fetch their ID
        $user = $result->fetch_assoc();
        $id = $user['id'];

        // Step 2: Insert data into the appointment table
        $insertQuery = "INSERT INTO appointment (id, full_name, email, phone_number, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("issss", $id, $full_name, $email, $phone_number, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Appointment booked successfully!'); window.location.href='appointment_form.php';</script>";
        } else {
            echo "<script>alert('Error: Unable to book appointment.'); window.location.href='appointment_form.php';</script>";
        }
    } else {
        // User not found
        echo "<script>alert('User not found. Please register first.'); window.location.href='appointment_form.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
