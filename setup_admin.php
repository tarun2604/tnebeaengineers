<?php
require_once 'db_config.php';

// Check if tables exist
$tables_exist = true;
$result = $conn->query("SHOW TABLES LIKE 'admin_users'");
if ($result->num_rows == 0) {
    $tables_exist = false;
    
    // Create admin_users table
    $sql = "CREATE TABLE admin_users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    if (!$conn->query($sql)) {
        die("Error creating table: " . $conn->error);
    }
}

// Set up admin credentials
$admin_username = "admin";
$admin_password = "TNEBEA@2024";
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

// Check if admin user exists
$stmt = $conn->prepare("SELECT id FROM admin_users WHERE username = ?");
$stmt->bind_param("s", $admin_username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // Insert new admin user
    $stmt = $conn->prepare("INSERT INTO admin_users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $admin_username, $hashed_password);
    
    if ($stmt->execute()) {
        echo "<div style='margin: 20px; padding: 20px; border: 1px solid green; color: green;'>";
        echo "Admin user created successfully!<br>";
        echo "Username: " . htmlspecialchars($admin_username) . "<br>";
        echo "Password: " . htmlspecialchars($admin_password) . "<br>";
        echo "<strong>Please save these credentials and delete this file for security!</strong>";
        echo "</div>";
    } else {
        echo "Error creating admin user: " . $conn->error;
    }
} else {
    echo "<div style='margin: 20px; padding: 20px; border: 1px solid blue; color: blue;'>";
    echo "Admin user already exists.<br>";
    echo "Username: " . htmlspecialchars($admin_username) . "<br>";
    echo "Password: " . htmlspecialchars($admin_password);
    echo "</div>";
}

$stmt->close();
$conn->close();
?> 