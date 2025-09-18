<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Empowerment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .nav-header {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px 40px;
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand-logo {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        .brand-logo span {
            color: #28a745;
        }

        .menu-list {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        .menu-list a {
            text-decoration: none;
            color: #555;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .menu-list a:hover {
            color: #28a745;
        }

        .nav-contact-btn {
            background-color:#28a745;
            color: #fff;
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .nav-contact-btn:hover {
            background-color: #28a745;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
            }

            .menu-list {
                flex-direction: column;
                gap: 15px;
                align-items: center;
                margin-top: 10px;
            }

            .nav-contact-btn {
                margin-top: 10px;
            }
        }


        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 20px;
            margin: 0 auto;
            max-width: 1200px;
            border-bottom: 1px solid #ccc;
        }

        .container img {
            width: 300px; /* Reduced image size */
            height: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .text-block {
            flex: 1;
            padding: 0 20px;
        }

        .text-block h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #28a745;
        }

        .text-block p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .text-only {
            text-align: center;
            margin: 40px 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .text-only h2 {
            font-size: 2rem;
            color: #28a745;
            margin-bottom: 10px;
        }

        .text-only p {
            font-size: 1.1rem;
            line-height: 1.8;
        }
    </style>
</head>
<body>
 <!-- Navigation Bar -->
 <header class="nav-header">
        <nav class="nav-container">
            <div class="brand-logo">MIND<span>WELL</span></div>
            <ul class="menu-list">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="article.php">Resources</a></li>
                <li><a href="register.php">Register</a></li>    
                <li><a href="assess.php">Assess</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <a href="mastermind.php" class="nav-contact-btn">Contact</a>
        </nav>
    </header>

    <!-- Division 1: Text Only -->
    <div class="text-only">
        <h2>Why Mental Health Matters</h2>
        <p>
            Mental health is not just about the absence of mental illness. It’s about well-being, the ability to manage stress, work productively, and enjoy life. Our platform provides practical tools and expert advice to help you build a healthier, more fulfilling life.
        </p>
    </div>

    <!-- Division 2: Right Picture -->
    <div class="container">
        <div class="text-block">
            <h2>Connect with Compassionate Experts</h2>
            <p>
                Finding the right support is crucial for mental health. Our platform connects you with professional counselors who are trained to understand your unique needs. Receive personalized guidance and actionable strategies to foster self-awareness, resilience, and healing.
            </p>
            <p>
                Whether you're facing stress, anxiety, or seeking personal growth, our experts are here to guide you every step of the way.
            </p>
        </div>
        <img src="../image/about1.png" alt="Counseling session">
    </div>

    <!-- Division 3: Left Picture -->
    <div class="container">
        <img src="../image/about2.png" alt="Meditation practice">
        <div class="text-block">
            <h2>Discover Mindfulness Practices</h2>
            <p>
                Mindfulness is a proven technique to reduce stress and enhance focus. Explore guided meditations, breathing exercises, and relaxation techniques to calm your mind and rejuvenate your spirit. Start your journey to a more balanced and peaceful life.
            </p>
            <p>
                These practices are easy to integrate into your daily routine and can make a significant difference in your mental health.
            </p>
        </div>
    </div>

    <!-- Division 4: Right Picture -->
    <div class="container">
        <div class="text-block">
            <h2>Empower Your Mental Well-being</h2>
            <p>
                Empowerment begins with knowledge. Access a rich collection of articles, videos, and tools designed to enhance your mental well-being. Dive deep into topics like emotional intelligence, mental resilience, and coping mechanisms to strengthen your mental health.
            </p>
            <p>
                Our resources are tailored to provide actionable insights that you can apply to improve your daily life.
            </p>
        </div>
        <img src="../image/about3.png" alt="Empowerment through resources">
    </div>

    <!-- Division 5: Left Picture -->
    <div class="container">
        <img src="../image/about4.png" alt="Community support">
        <div class="text-block">
            <h2>Join a Supportive Community</h2>
            <p>
                Community is at the heart of mental well-being. Connect with like-minded individuals who share their experiences, offer support, and celebrate milestones together. Our safe and inclusive platform fosters connection and shared growth.
            </p>
            <p>
                Together, we can break the stigma around mental health and create a supportive environment for everyone.
            </p>
        </div>
    </div>

    <!-- Division 6: Text Only -->
    <div class="text-only">
        <h2>Your Journey Starts Here</h2>
        <p>
            Every journey begins with a single step. Let us be your companion as you embark on your path to mental wellness. Explore our platform, connect with experts, and unlock resources to help you achieve your goals.
        </p>
    </div>

    <!-- Division 7: Right Picture -->
    <div class="container">
        <div class="text-block">
            <h2>Unlock Your Potential</h2>
            <p>
                Your potential is limitless. Learn strategies to build resilience, enhance your strengths, and overcome challenges. Our platform is dedicated to helping you unlock the best version of yourself.
            </p>
            <p>
                Start today and take control of your mental well-being with confidence and determination.
            </p>
        </div>
        <img src="../image/about7.png" alt="Unlocking potential">
    </div>

</body>
</html>
