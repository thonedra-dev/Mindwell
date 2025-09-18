<?php
// Database connection parameters
$host = "localhost";
$port = 4306;
$dbname = "tttt";
$username = "root";
$password = "your_password";

// Initialize variables
$errors = [];
$users_with_appointments = [];
$responses = [];
$all_users = [];

try {
    // Connect to the database
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // Fetch all user and appointment data
    $sql = "
    SELECT 
        users.id AS user_id, 
        users.full_name, 
        users.email, 
        users.timestamp AS user_created_at,
        appointment.id AS appointment_id,
        appointment.phone_number,
        appointment.message,
        appointment.timestamp AS appointment_created_at
    FROM 
        users
    INNER JOIN 
        appointment 
    ON 
        users.id = appointment.user_id
    WHERE 
        appointment.message IS NOT NULL AND appointment.message != ''
    ORDER BY 
        users.id, appointment.id;
    ";
    $stmt = $pdo->query($sql);
    $users_with_appointments = $stmt->fetchAll();

    // Fetch all responses from admin_responses table
    $response_sql = "
    SELECT 
        admin_responses.venue,
        admin_responses.time,
        admin_responses.comment,
        users.full_name AS username,
        users.email AS user_email
    FROM 
        admin_responses
    INNER JOIN 
        users 
    ON 
        admin_responses.user_id = users.id
    ORDER BY 
        admin_responses.created_at DESC;
    ";
    $response_stmt = $pdo->query($response_sql);
    $responses = $response_stmt->fetchAll();

    // Fetch all users and their information
    $all_users_sql = "
    SELECT 
        users.id AS user_id,
        users.full_name,
        users.email,
        users.timestamp AS user_created_at
    FROM 
        users
    ORDER BY 
        users.id;
    ";
    $all_users_stmt = $pdo->query($all_users_sql);
    $all_users = $all_users_stmt->fetchAll();
} catch (PDOException $e) {
    $errors[] = "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #121212; /* Black background */
            color: #e0e0e0; /* Light gray text */
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #ffffff; /* White text for header */
            margin-bottom: 20px;
            border-bottom: 2px solid #333333; /* Darker gray underline */
            padding-bottom: 10px;
        }

        h2 {
            font-size: 2rem;
            color: #cccccc; /* Muted gray text */
            margin-bottom: 15px;
            border-left: 4px solid #555555; /* Subtle accent */
            padding-left: 10px;
        }

        .buttons {
            text-align: center;
            margin-bottom: 20px;
        }

        .buttons button {
            padding: 10px 20px;
            margin: 5px;
            background-color: #333333; /* Dark button */
            color: #e0e0e0; /* Light text */
            border: 1px solid #555555; /* Border for buttons */
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .buttons button:hover {
            background-color: #555555; /* Lighter button on hover */
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3); /* Shadow effect */
        }

        .table-container {
            display: none; /* Initially hidden */
            margin-top: 20px;
            padding: 20px;
            background-color: #1e1e1e; /* Dark table container */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Subtle shadow */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th {
    font-size: 1.2rem;
    color: #ffa500; /* Bright orange for headers */
    background-color: #333333; /* Dark background */
    padding: 15px;
 
}


        td {
    font-size: 1.1rem;
    color: #ffa500; /* Bright orange for text */
    padding: 15px;
    font-weight: bold; /* Bold text for emphasis */
   
}


        tr:nth-child(even) {
            background-color: #2a2a2a; /* Alternating row colors */
        }

        tr:hover {
            background-color: #444444; /* Row highlight on hover */
        }

        p {
            text-align: center;
            font-size: 1rem;
            color: #aaaaaa; /* Muted gray for no data */
        }

        a {
            text-decoration: none;
            color: #ffffff;
            background-color: #444444; /* Dark button link */
            padding: 8px 12px;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #666666; /* Lighten on hover */
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <div class="buttons">
        <button onclick="toggleTable('appointments')">View Appointments</button>
        <button onclick="toggleTable('responses')">View Responses</button>
        <button onclick="toggleTable('all-users')">View All Users</button>
    </div>

    <!-- Appointments Table -->
    <div id="appointments" class="table-container">
        <h2>Appointments</h2>
        <?php if (!empty($users_with_appointments)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users_with_appointments as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone_number'] ?? 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($row['message'] ?? 'N/A'); ?></td>
                            <td>
                                <a href="respond.php?user_id=<?php echo htmlspecialchars($row['user_id']); ?>&appointment_id=<?php echo htmlspecialchars($row['appointment_id']); ?>">Respond</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No appointments found.</p>
        <?php endif; ?>
    </div>

    <!-- Responses Table -->
    <div id="responses" class="table-container">
        <h2>Admin Responses</h2>
        <?php if (!empty($responses)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Venue</th>
                        <th>Time</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($responses as $response): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($response['username']); ?></td>
                            <td><?php echo htmlspecialchars($response['user_email']); ?></td>
                            <td><?php echo htmlspecialchars($response['venue']); ?></td>
                            <td><?php echo htmlspecialchars($response['time']); ?></td>
                            <td><?php echo htmlspecialchars($response['comment']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No responses found.</p>
        <?php endif; ?>
    </div>

    <!-- All Users Table -->
    <div id="all-users" class="table-container">
        <h2>All Users</h2>
        <?php if (!empty($all_users)): ?>
            <table>
                <thead>
                    <tr>
                      
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_users as $user): ?>
                        <tr>
                           
                            <td><?php echo htmlspecialchars($user['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td><?php echo htmlspecialchars($user['user_created_at']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No users found.</p>
        <?php endif; ?>
    </div>

    <script>
        function toggleTable(tableId) {
            const tables = document.querySelectorAll('.table-container');
            tables.forEach(table => {
                table.style.display = 'none'; // Hide all tables
            });
            document.getElementById(tableId).style.display = 'block'; // Show the selected table
        }
    </script>
</body>
</html>
