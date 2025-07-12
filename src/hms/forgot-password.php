<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$name=$_POST['fullname'];
$email=$_POST['email'];
$query=mysqli_query($con,"select id from  users where fullName='$name' and email='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['name']=$name;
$_SESSION['email']=$email;
header('location:reset-password.php');
} else {
$_SESSION['errmsg'] = "Invalid details. Please try with valid details";
echo "<script>window.location.href ='forgot-password.php'</script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Password Recovery | HMS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            min-height: 650px;
            display: flex;
        }

        .left-panel {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px 40px;
            position: relative;
            overflow: hidden;
        }

        .left-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="pattern" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23pattern)"/></svg>');
            animation: float 25s ease-in-out infinite;
            opacity: 0.3;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }

        .icon-container {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            position: relative;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .icon-container::before {
            content: '';
            position: absolute;
            width: 140px;
            height: 140px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.1; }
        }

        .icon-container i {
            font-size: 48px;
            color: white;
            z-index: 2;
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
            max-width: 350px;
        }

        .hero-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 16px;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .security-features {
            display: flex;
            flex-direction: column;
            gap: 16px;
            width: 100%;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .feature-icon {
            width: 32px;
            height: 32px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-icon i {
            font-size: 14px;
            color: white;
        }

        .feature-text {
            font-size: 14px;
            opacity: 0.9;
            line-height: 1.4;
        }

        .right-panel {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: #4f46e5;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-icon i {
            color: white;
            font-size: 20px;
        }

        .brand-text {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #4f46e5 0%, #7c3aed 60%, #667eea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-title {
            font-size: 26px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: #6b7280;
            font-size: 15px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .error-message {
            color: #dc2626;
            font-size: 14px;
            margin-bottom: 20px;
            padding: 12px;
            background: #fef2f2;
            border-radius: 8px;
            border: 1px solid #fecaca;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-section {
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .form-control::placeholder {
            color: #9ca3af;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 16px;
        }

        .input-group .form-control {
            padding-left: 48px;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 24px;
        }

        .submit-btn:hover {
            background: #3730a3;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .back-link {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
            color: #6b7280;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .back-link a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .copyright {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 12px;
        }

        .info-box {
            background: #f3f4f6;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 24px;
            border-left: 4px solid #4f46e5;
        }

        .info-box-title {
            font-size: 14px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-box-text {
            font-size: 13px;
            color: #6b7280;
            line-height: 1.4;
        }

        @media (max-width: 968px) {
            .container {
                flex-direction: column;
                max-width: 500px;
            }

            .left-panel {
                padding: 40px 30px;
            }

            .right-panel {
                padding: 40px 30px;
            }

            .hero-title {
                font-size: 26px;
            }

            .hero-subtitle {
                font-size: 14px;
            }

            .form-title {
                font-size: 22px;
            }

            .icon-container {
                width: 100px;
                height: 100px;
            }

            .icon-container i {
                font-size: 40px;
            }

            .icon-container::before {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="hero-content">
                <div class="icon-container">
                    <i class="fas fa-shield-alt"></i>
                </div>
                
                <h1 class="hero-title">Secure Password Recovery</h1>
                <p class="hero-subtitle">We'll help you regain access to your account safely and securely. Your privacy and security are our top priorities.</p>
                
                <div class="security-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="feature-text">256-bit SSL encryption protects your data</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="feature-text">Identity verification for account security</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="feature-text">Reset links expire for added protection</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">
            <div class="form-header">
                <div class="brand">
                    <div class="brand-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <span class="brand-text">TVH Healthcare</span>
                </div>
                
                <h2 class="form-title">Forgot Password?</h2>
                <p class="form-subtitle">No worries! Enter your registered details below and we'll help you reset your password.</p>
                
                <?php if(isset($_SESSION['errmsg']) && $_SESSION['errmsg'] != ""): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-triangle"></i>
                        <?php echo $_SESSION['errmsg']; ?>
                        <?php $_SESSION['errmsg'] = ""; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="info-box">
                <div class="info-box-title">
                    <i class="fas fa-info-circle"></i>
                    Account Recovery Information
                </div>
                <div class="info-box-text">
                    Please provide the exact full name and email address you used during registration. Both fields must match your account details.
                </div>
            </div>

            <form method="post" class="form-recovery">
                <div class="form-section">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <div class="input-group">
                            <i class="fas fa-user input-icon"></i>
                            <input type="text" class="form-control" name="fullname" placeholder="Enter your registered full name" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="input-group">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" class="form-control" name="email" placeholder="Enter your registered email" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn" name="submit">
                    <i class="fas fa-key"></i>
                    Reset My Password
                </button>

                <div class="back-link">
                    <a href="user-login.php">
                        <i class="fas fa-arrow-left"></i>
                        Back to Login
                    </a>
                </div>
                
                <div class="copyright">
                    <span class="text-bold text-uppercase">Hospital Management System</span>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Add form interactivity
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-control');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                    this.parentElement.style.transition = 'transform 0.3s ease';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });

            // Add loading state to submit button
            const form = document.querySelector('.form-recovery');
            const submitBtn = document.querySelector('.submit-btn');
            
            form.addEventListener('submit', function() {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                submitBtn.disabled = true;
            });
        });
    </script>
</body>
</html>