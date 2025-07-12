<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$query=mysqli_query($con,"select id from  doctors where contactno='$contactno' and docEmail='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['cnumber']=$contactno;
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
    <title>Doctor Password Recovery | HMS</title>
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="pattern" width="25" height="25" patternUnits="userSpaceOnUse"><polygon points="12.5,0 25,12.5 12.5,25 0,12.5" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23pattern)"/></svg>');
            animation: rotate 30s linear infinite;
            opacity: 0.4;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .icon-container {
            width: 130px;
            height: 130px;
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
            width: 150px;
            height: 150px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: pulse 2.5s ease-in-out infinite;
        }

        .icon-container::after {
            content: '';
            position: absolute;
            width: 170px;
            height: 170px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: pulse 2.5s ease-in-out infinite 0.5s;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.1; }
        }

        .icon-container i {
            font-size: 52px;
            color: white;
            z-index: 2;
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
            max-width: 360px;
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

        .professional-features {
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
            width: 34px;
            height: 34px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-icon i {
            font-size: 15px;
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
            background: #f0f9ff;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 24px;
            border-left: 4px solid #0ea5e9;
        }

        .info-box-title {
            font-size: 14px;
            font-weight: 600;
            color: #0c4a6e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-box-text {
            font-size: 13px;
            color: #0369a1;
            line-height: 1.4;
        }

        .doctor-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            color: white;
            margin-top: 20px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.15);
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
                width: 110px;
                height: 110px;
            }

            .icon-container i {
                font-size: 44px;
            }

            .icon-container::before {
                width: 130px;
                height: 130px;
            }

            .icon-container::after {
                width: 150px;
                height: 150px;
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
                    <i class="fas fa-user-md"></i>
                </div>
                
                <h1 class="hero-title">Doctor Portal Recovery</h1>
                <p class="hero-subtitle">Secure access restoration for healthcare professionals. Your medical practice data and patient information remain protected.</p>
                
                <div class="professional-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <div class="feature-text">HIPAA compliant security protocols</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <div class="feature-text">Professional identity verification</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <div class="feature-text">Secure medical data protection</div>
                    </div>
                </div>
                
                <div class="doctor-badge">
                    <i class="fas fa-stethoscope"></i>
                    Healthcare Professional Portal
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
                
                <h2 class="form-title">Doctor Account Recovery</h2>
                <p class="form-subtitle">Enter your registered contact details to securely reset your doctor portal password.</p>
                
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
                    Doctor Verification Required
                </div>
                <div class="info-box-text">
                    Please provide your registered contact number and email address exactly as they appear in your doctor profile. Both credentials must match for security purposes.
                </div>
            </div>

            <form method="post" class="form-recovery">
                <div class="form-section">
                    <div class="form-group">
                        <label class="form-label">Contact Number</label>
                        <div class="input-group">
                            <i class="fas fa-phone input-icon"></i>
                            <input type="tel" class="form-control" name="contactno" placeholder="Enter your registered contact number" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="input-group">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" class="form-control" name="email" placeholder="Enter your registered email address" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn" name="submit">
                    <i class="fas fa-key"></i>
                    Reset Doctor Password
                </button>

                <div class="back-link">
                    <a href="index.php">
                        <i class="fas fa-arrow-left"></i>
                        Back to Doctor Login
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
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Verifying...';
                submitBtn.disabled = true;
            });

            // Phone number formatting
            const phoneInput = document.querySelector('input[name="contactno"]');
            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                e.target.value = value;
            });
        });
    </script>
</body>
</html>