<?php
session_start();

// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'tnebea';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
$type = $_POST['type'] ?? '';

if ($type === 'carousel') {
    // Handle carousel image upload
    if (isset($_FILES['image'])) {
        $target_dir = "uploads/carousel/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file = $_FILES['image'];
        $fileName = basename($file['name']);
        $targetFilePath = $target_dir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array(strtolower($fileType), $allowTypes)) {
            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                $caption = $_POST['caption'] ?? '';
                
                // Insert into database
                $stmt = $conn->prepare("INSERT INTO carousel_images (image_path, caption) VALUES (?, ?)");
                $stmt->bind_param("ss", $targetFilePath, $caption);
                
                if ($stmt->execute()) {
                    $_SESSION['message'] = "Image uploaded successfully.";
                } else {
                    $_SESSION['error'] = "Failed to save to database.";
                }
                $stmt->close();
            } else {
                $_SESSION['error'] = "Failed to upload image.";
            }
        } else {
            $_SESSION['error'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }
} elseif ($type === 'event') {
    // Handle event addition
    $title = $_POST['title'] ?? '';
    $date = $_POST['date'] ?? '';
    $link = $_POST['link'] ?? '';

    if ($title && $date) {
        $stmt = $conn->prepare("INSERT INTO events (title, event_date, link) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $date, $link);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Event added successfully.";
        } else {
            $_SESSION['error'] = "Failed to add event.";
        }
        $stmt->close();
    } else {
        $_SESSION['error'] = "Title and date are required.";
    }
}

$conn->close();

// Redirect back to admin dashboard
header("Location: admin_dashboard.php");
exit();
?> 