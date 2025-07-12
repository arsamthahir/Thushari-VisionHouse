<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Registration | HMS</title>
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
            max-width: 1200px;
            width: 100%;
            min-height: 700px;
            display: flex;
        }

        .left-panel {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 40px 40px 60px;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="1" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="1" fill="white" opacity="0.1"/><circle cx="10" cy="80" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
        }

        .doctor-image {
            width: 90%;
            height: 66vh;
            max-width: 480px;
            min-width: 260px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 28px;
            margin: 0 auto 30px auto;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .doctor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 24px;
            display: block;
        }

        .doctor-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"><path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 3.5C14.8 3.4 14.6 3.3 14.4 3.3L12 3C11.6 3 11.3 3.1 11 3.3L5 7V9H7V20C7 21.1 7.9 22 9 22H15C16.1 22 17 21.1 17 20V9H21ZM9 8H15V11H9V8ZM9 13H15V16H9V13ZM9 18H15V20H9V18Z"/></svg>') center/60px no-repeat;
            opacity: 0.3;
        }

        .doctor-image .image-placeholder {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 12px;
            text-align: center;
            color: #4f46e5;
            font-size: 14px;
            font-weight: 600;
        }

        .text-content {
            text-align: center;
            margin-bottom: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 16px;
            opacity: 0.9;
            line-height: 1.6;
            max-width: 320px;
            margin: 0 auto;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-item {
            text-align: center;
            flex: 1;
        }

        .stat-number {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
            display: block;
        }

        .stat-label {
            font-size: 12px;
            opacity: 0.9;
            line-height: 1.3;
        }

        .right-panel {
            flex: 1;
            padding: 60px 50px;
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
            text-shadow: 0 2px 8px rgba(79,70,229,0.10);
            background: linear-gradient(90deg, #4f46e5 0%, #7c3aed 60%, #667eea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-title {
            font-size: 24px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: #6b7280;
            font-size: 14px;
        }

        .tabs {
            display: flex;
            background: #f3f4f6;
            border-radius: 12px;
            padding: 4px;
            margin-bottom: 30px;
        }

        .tab {
            flex: 1;
            padding: 12px 20px;
            text-align: center;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .tab.active {
            background: #4f46e5;
            color: white;
        }

        .tab:not(.active) {
            color: #6b7280;
        }

        .form-section {
            margin-bottom: 24px;
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            gap: 16px;
        }

        .form-row .form-group {
            flex: 1;
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

        .gender-group {
            display: flex;
            gap: 16px;
        }

        .radio-option {
            flex: 1;
            position: relative;
        }

        .radio-option input[type="radio"] {
            display: none;
        }

        .radio-option label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 14px;
        }

        .radio-option input[type="radio"]:checked + label {
            border-color: #4f46e5;
            background: rgba(79, 70, 229, 0.05);
            color: #4f46e5;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: #4f46e5;
        }

        .checkbox-group label {
            font-size: 14px;
            color: #374151;
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
        }

        .submit-btn:hover {
            background: #3730a3;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }

        .login-link {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
            color: #6b7280;
        }

        .login-link a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .availability-status {
            font-size: 12px;
            margin-top: 8px;
            padding: 4px 8px;
            border-radius: 6px;
            display: inline-block;
        }

        .availability-status.available {
            background: #dcfce7;
            color: #166534;
        }

        .availability-status.unavailable {
            background: #fef2f2;
            color: #dc2626;
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

            .stats {
                gap: 15px;
                max-width: 300px;
            }

            .stat-number {
                font-size: 20px;
            }

            .stat-label {
                font-size: 11px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .gender-group {
                flex-direction: column;
            }

            .doctor-image {
                width: 100%;
                height: 240px;
                max-width: 100vw;
                margin-bottom: 24px;
            }

            .hero-title {
                font-size: 24px;
            }

            .hero-subtitle {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="hero-content">
                <div class="doctor-image">
                    <img src="/hospital/public/assets/images/Registration.png" alt="Doctor" style="width:100%; height:100%; object-fit:cover; border-radius:20px;">
                    <div class="image-placeholder">
                        👨‍⚕️ Professional Healthcare
                    </div>
                </div>
                
                <div class="text-content">
                    <h1 class="hero-title">Protect Yourself and Your Family</h1>
                    <p class="hero-subtitle">Easy Online Appointments.<br>Secure, quick, and easy registration process.</p>
                </div>
                
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-number">5.7M</div>
                        <div class="stat-label">Patients Served</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support Available</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Success Rate</div>
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
                
                <h2 class="form-title">Create your account</h2>
                <p class="form-subtitle">Please fill in your details to get started</p>
            </div>

            <form name="registration" id="registration" method="post" onSubmit="return valid();">
                <div class="form-section">
                    <h3 class="section-title">Personal Information</h3>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="gender-group">
                            <div class="radio-option">
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">
                                    <i class="fas fa-venus" style="margin-right: 8px;"></i>
                                    Female
                                </label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">
                                    <i class="fas fa-mars" style="margin-right: 8px;"></i>
                                    Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Account Details</h3>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()" placeholder="Email Address" required>
                        </div>
                        <span id="user-availability-status1" class="availability-status" style="display: none;"></span>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <div class="input-group">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" class="form-control" id="password_again" name="password_again" placeholder="Confirm Password" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="agree" value="agree" checked="true" readonly="true">
                    <label for="agree">I agree to the Terms of Service and Privacy Policy</label>
                </div>

                <button type="submit" class="submit-btn" name="submit">
                    Create Account
                    <i class="fas fa-arrow-right"></i>
                </button>

                <div class="login-link">
                    Already have an account? <a href="user-login.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function valid() {
            if(document.registration.password.value != document.registration.password_again.value) {
                alert("Password and Confirm Password Field do not match!!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }

        function userAvailability() {
            const email = document.getElementById('email').value;
            const statusElement = document.getElementById('user-availability-status1');
            
            if (email) {
                // Simulate AJAX call - replace with your actual implementation
                fetch('check_availability.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'email=' + encodeURIComponent(email)
                })
                .then(response => response.text())
                .then(data => {
                    statusElement.innerHTML = data;
                    statusElement.style.display = 'inline-block';
                    
                    // Add styling based on availability
                    if (data.includes('available')) {
                        statusElement.className = 'availability-status available';
                    } else {
                        statusElement.className = 'availability-status unavailable';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        }

        // Add some interactivity
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>

<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
    $fname=$_POST['full_name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
    if($query)
    {
        echo "<script>alert('Successfully Registered. You can login now');</script>";
        //header('location:user-login.php');
    }
}
?>