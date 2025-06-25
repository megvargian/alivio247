<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alivio247 - Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
            color: #333333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Subtle background pattern */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 25% 25%, rgba(0, 123, 255, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(108, 117, 125, 0.02) 0%, transparent 50%);
            z-index: -1;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header section */
        .header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInUp 1s ease-out;
        }

        .logo-container {
            margin-bottom: 40px;
        }

        .logo {
            width: 120px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .company-name {
            font-size: 3.5rem;
            font-weight: 300;
            color: #2c3e50;
            margin-bottom: 15px;
            letter-spacing: -2px;
            position: relative;
        }

        .company-name::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #007bff, #6c757d);
            border-radius: 2px;
        }

        .tagline {
            font-size: 1.3rem;
            color: #6c757d;
            font-weight: 400;
            margin-top: 25px;
        }

        /* Main content */
        .main-content {
            max-width: 800px;
            text-align: center;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .coming-soon-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #007bff;
            margin-bottom: 30px;
            position: relative;
        }

        .coming-soon-subtitle {
            font-size: 1.2rem;
            color: #495057;
            margin-bottom: 50px;
            font-weight: 300;
        }

        /* What is Alivio247 section */
        .about-section {
            background: #f8f9fa;
            border-radius: 20px;
            padding: 50px 40px;
            margin: 40px 0;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid #e9ecef;
            animation: fadeInUp 1s ease-out 0.6s both;
            position: relative;
            overflow: hidden;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #007bff, #28a745, #17a2b8);
            border-radius: 20px 20px 0 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 30px;
            position: relative;
        }

        .section-description {
            font-size: 1.1rem;
            color: #495057;
            line-height: 1.8;
            text-align: left;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Features highlight */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
            animation: fadeInUp 1s ease-out 0.9s both;
        }

        .feature-card {
            background: white;
            padding: 30px 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #007bff, #28a745);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff;
        }

        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .feature-description {
            font-size: 0.95rem;
            color: #6c757d;
            line-height: 1.6;
        }

        /* Call to action */
        .cta-section {
            margin-top: 60px;
            animation: fadeInUp 1s ease-out 1.2s both;
        }

        .cta-title {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .cta-description {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .launch-indicator {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 500;
            box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3);
            transition: all 0.3s ease;
        }

        .launch-indicator:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(0, 123, 255, 0.4);
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background: #28a745;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* Animations */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .company-name {
                font-size: 2.5rem;
                letter-spacing: -1px;
            }

            .tagline {
                font-size: 1.1rem;
            }

            .coming-soon-title {
                font-size: 2rem;
            }

            .about-section {
                padding: 40px 25px;
                margin: 30px 0;
            }

            .section-title {
                font-size: 1.7rem;
            }

            .section-description {
                font-size: 1rem;
                text-align: center;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .feature-card {
                padding: 25px 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px 15px;
            }

            .company-name {
                font-size: 2rem;
            }

            .coming-soon-title {
                font-size: 1.8rem;
            }

            .about-section {
                padding: 30px 20px;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .logo {
                width: 100px;
            }
        }

        /* Subtle loading animation */
        .loading-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #007bff, #28a745, #17a2b8);
            animation: loading 3s ease-in-out;
            z-index: 1000;
        }

        @keyframes loading {
            0% { transform: scaleX(0); transform-origin: left; }
            50% { transform: scaleX(1); transform-origin: left; }
            51% { transform: scaleX(1); transform-origin: right; }
            100% { transform: scaleX(0); transform-origin: right; }
        }
    </style>
</head>
<body>
    <div class="loading-bar"></div>
    
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="logo-container">
                <img src="https://raw.githubusercontent.com/HasmigBaba/MobileTire/refs/heads/main/Alivio%20transparant%20Icon%20-%20Copy.png" alt="Alivio247 Logo" class="logo">
            </div>
            <h1 class="company-name">Alivio247</h1>
            <p class="tagline">Smart Business Solutions</p>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <h2 class="coming-soon-title">Coming Soon</h2>
            <p class="coming-soon-subtitle">We're putting the finishing touches on something extraordinary</p>

            <!-- About Section -->
            <section class="about-section">
                <h3 class="section-title">What is Alivio247?</h3>
                <p class="section-description">
                    Alivio247 is a smart platform for all kinds of businesses. It handles your calls, reservations, and orders, making customer support easier and faster. By combining everything into one simple system, Alivio247 helps you track and manage all your customer requests in one place.
                </p>

                <!-- Features Grid -->
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">📞</div>
                        <h4 class="feature-title">Smart Call Handling</h4>
                        <p class="feature-description">Automated call management that never misses a customer inquiry</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📅</div>
                        <h4 class="feature-title">Easy Reservations</h4>
                        <p class="feature-description">Streamlined booking system for seamless customer experience</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📋</div>
                        <h4 class="feature-title">Order Management</h4>
                        <p class="feature-description">Centralized system to track and manage all customer orders</p>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="cta-section">
                <h3 class="cta-title">Get Ready for the Future of Business Management</h3>
                <p class="cta-description">We're working hard to bring you the most comprehensive business solution</p>
                <div class="launch-indicator">
                    <span class="pulse-dot"></span>
                    <span>Launching Very Soon</span>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
