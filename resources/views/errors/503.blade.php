<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Maintenance - TecClub</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0e59f2 0%, #1e3a8a 50%, #0e59f2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        /* Animated Background Shapes */
        .background-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            animation: float 20s infinite ease-in-out;
        }

        .shape1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #F8E559, #facc15);
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape2 {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #facc15, #f59e0b);
            top: 60%;
            right: 15%;
            animation-delay: 5s;
        }

        .shape3 {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #0e59f2, #1e40af);
            top: 30%;
            right: 30%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            25% {
                transform: translateY(-20px) rotate(5deg);
            }
            50% {
                transform: translateY(-30px) rotate(10deg);
            }
            75% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        /* Main Container */
        .maintenance-container {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
            padding: 40px 20px;
            max-width: 800px;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Logo */
        .logo {
            margin-bottom: 40px;
            animation: bounce 2s infinite;
        }

        .logo img {
            max-width: 200px;
            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.3));
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Icon */
        .maintenance-icon {
            font-size: 120px;
            margin-bottom: 30px;
            animation: rotate 3s infinite linear;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Heading */
        h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            letter-spacing: -1px;
        }

        /* Subheading */
        .subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.95;
            font-weight: 300;
            line-height: 1.6;
        }

        /* Message */
        .message {
            font-size: 1.1rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }

        /* Progress Bar */
        .progress-container {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            height: 8px;
            margin: 40px auto;
            max-width: 400px;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #F8E559, #facc15, #F8E559);
            background-size: 200% 100%;
            border-radius: 50px;
            animation: progress 2s infinite;
        }

        @keyframes progress {
            0% {
                width: 30%;
                background-position: 0% 50%;
            }
            50% {
                width: 70%;
                background-position: 100% 50%;
            }
            100% {
                width: 30%;
                background-position: 0% 50%;
            }
        }

        /* Social Links */
        .social-links {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .social-link:hover {
            background: rgba(248, 229, 89, 0.9);
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border-color: #F8E559;
        }

        /* Contact Info */
        .contact-info {
            margin-top: 40px;
            font-size: 1rem;
            opacity: 0.85;
        }

        .contact-info a {
            color: #F8E559;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .contact-info a:hover {
            color: #facc15;
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            .subtitle {
                font-size: 1.1rem;
            }

            .message {
                font-size: 1rem;
            }

            .maintenance-icon {
                font-size: 80px;
            }

            .logo img {
                max-width: 150px;
            }

            .social-link {
                width: 45px;
                height: 45px;
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }

            .subtitle {
                font-size: 1rem;
            }

            .message {
                font-size: 0.95rem;
            }

            .maintenance-icon {
                font-size: 60px;
            }

            .maintenance-container {
                padding: 30px 15px;
            }

            .logo img {
                max-width: 120px;
            }
        }

        /* Particles Effect */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(248, 229, 89, 0.6);
            border-radius: 50%;
            animation: sparkle 3s linear infinite;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0.8);
            }
            50% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .particle:nth-child(1) { top: 15%; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { top: 30%; left: 80%; animation-delay: 1s; }
        .particle:nth-child(3) { top: 50%; left: 30%; animation-delay: 2s; }
        .particle:nth-child(4) { top: 70%; left: 60%; animation-delay: 1.5s; }
        .particle:nth-child(5) { top: 85%; left: 20%; animation-delay: 0.5s; }
        .particle:nth-child(6) { top: 25%; left: 50%; animation-delay: 2.5s; }
        .particle:nth-child(7) { top: 60%; left: 90%; animation-delay: 1.8s; }
        .particle:nth-child(8) { top: 40%; left: 15%; animation-delay: 0.8s; }
    </style>
</head>
<body>
    <!-- Background Shapes -->
    <div class="background-shapes">
        <div class="shape shape1"></div>
        <div class="shape shape2"></div>
        <div class="shape shape3"></div>
    </div>

    <!-- Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Main Container -->
    <div class="maintenance-container">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('assets/images/logo/logo-1.png') }}" alt="TecClub Logo">
        </div>

        <!-- Maintenance Icon -->
        <div class="maintenance-icon">
            ⚙️
        </div>

        <!-- Heading -->
        <h1>We'll Be Back Soon!</h1>

        <!-- Subtitle -->
        <p class="subtitle">Our website is currently undergoing scheduled maintenance</p>

        <!-- Message -->
        <p class="message">
            We're working hard to improve your experience. We apologize for any inconvenience and appreciate your patience. 
            Our team is making things better and we'll be back online shortly!
        </p>

        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>

        <!-- Social Links -->
        <div class="social-links">
            <a href="https://www.facebook.com/me" class="social-link" target="_blank" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
        
            <a href="https://www.instagram.com/tecclubx" class="social-link" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com/company/tecclub" class="social-link" target="_blank" title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
            <p>Need urgent assistance? Contact us at <a href="mailto:info@tecclubx.com">info@tecclubx.com</a></p>
        </div>
    </div>

    <script>
        // Add current year
        document.addEventListener('DOMContentLoaded', function() {
            // Auto refresh after 5 minutes to check if maintenance is over
            setTimeout(function() {
                location.reload();
            }, 300000); // 5 minutes
        });
    </script>
</body>
</html>
