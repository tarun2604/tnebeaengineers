<?php
session_start();

// If already logged in, redirect to admin dashboard
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: admin_dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TNEBEA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .error-message {
            color: #dc3545;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .success-message {
            color: #28a745;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            font-weight: 500;
        }
        .password-requirements {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 5px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-container">
            <h2 class="text-center mb-4">TNEBEA Admin Registration</h2>
            
            <?php if(isset($_SESSION['error'])): ?>
                <div class="error-message">
                    <i class="fa fa-exclamation-circle"></i>
                    <?php 
                    echo htmlspecialchars($_SESSION['error']);
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['success'])): ?>
                <div class="success-message">
                    <i class="fa fa-check-circle"></i>
                    <?php 
                    echo htmlspecialchars($_SESSION['success']);
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="handle_register.php" method="POST" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="username">
                        <i class="fa fa-user"></i> Username
                    </label>
                    <input type="text" class="form-control" id="username" name="username" required 
                           pattern="[a-zA-Z0-9_]{5,20}" 
                           title="Username must be 5-20 characters long and can only contain letters, numbers, and underscores">
                    <small class="form-text text-muted">5-20 characters, letters, numbers, and underscores only</small>
                </div>
                <div class="form-group">
                    <label for="email">
                        <i class="fa fa-envelope"></i> Email
                    </label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">
                        <i class="fa fa-lock"></i> Password
                    </label>
                    <input type="password" class="form-control" id="password" name="password" required 
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <div class="password-requirements">
                        Password must contain:
                        <ul>
                            <li>At least 8 characters</li>
                            <li>At least one uppercase letter</li>
                            <li>At least one lowercase letter</li>
                            <li>At least one number</li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">
                        <i class="fa fa-lock"></i> Confirm Password
                    </label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>
                <div class="form-group">
                    <label for="security_code">
                        <i class="fa fa-shield"></i> Security Code
                    </label>
                    <input type="text" class="form-control" id="security_code" name="security_code" required>
                    <small class="form-text text-muted">Enter the security code provided by the administrator</small>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i> Register
                </button>
            </form>
            <div class="text-center mt-3">
                <a href="login.php" class="text-decoration-none mr-3">
                    <i class="fa fa-sign-in"></i> Login
                </a>
                <a href="index.php" class="text-decoration-none">
                    <i class="fa fa-arrow-left"></i> Back to Home
                </a>
            </div>
        </div>
    </div>

    <script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        
        if (password != confirmPassword) {
            alert("Passwords do not match!");
            return false;
        }
        
        return true;
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 