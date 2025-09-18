<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindwell</title>
    <link rel="stylesheet" href="../css/home.css">
    <style>
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

   /* Error Section */
.error-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 80px 40px;
    background-color: #f9f9f9;
}

.error-content {
    display: flex;
    max-width: 1200px;
    gap: 50px; /* Space between text and image */
    align-items: center;
}

.error-text {
    max-width: 600px;
}

.error-text h4 {
    font-size: 1rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    color: #28a745; /* Green for small heading */
}

.error-text h2 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    color: #000; /* Black for heading */
}

.error-text p {
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #555; /* Gray for text */
}

.error-link {
    text-decoration: none;
    color: #28a745;
    font-weight: bold;
    border-bottom: 2px solid #28a745; /* Underline effect */
    transition: color 0.3s ease, border-color 0.3s ease;
}

.error-link:hover {
    color: #000;
    border-color: #000;
}

.error-image img {
    width: 350px;
    height: 350px;
    border-radius: 10px; /* Slightly rounded corners for the image */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow */
}

/* Responsive Design */
@media (max-width: 768px) {
    .error-content {
        flex-direction: column;
        text-align: center;
    }

    .error-image img {
        width: 100%;
    }

    .error-text {
        max-width: 100%;
    }
}

    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <header class="nav-header">
        <nav class="nav-container">
            <div class="brand-logo">MIND<span>WELL</span></div>
            <ul class="menu-list">
                <li><a href="#">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="article.php">Resources</a></li>
                <li><a href="register.php">Register</a></li>    
                <li><a href="assess.php">Assess</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <a href="mastermind.php" class="nav-contact-btn">Contact</a>
        </nav>
    </header>
 <!-- HERO-->
 <section class="hero">
    <div class="hero-content">
        <h1>Unlock your mind</h1>
        <p>Discover support for mental health</p>
        <a href="#resources" class="btn">VIEW SERVICES</a>
    </div>
</section>


<section class="error-section">
    <div class="error-content">
        <div class="error-text">
            <h4>Empowering Minds</h4>
            <h2>Your journey to mental wellness starts here</h2>
            <p>
                MindWell is your go-to mental health platform, offering a range of resources and support designed to enhance your well-being. 
                Based in George Town, we connect you with professional counselors for personalized guidance and provide AI-driven conversations 
                that promote mental health awareness. Our mission is to make mental health support accessible and engaging for everyone. 
                Join us on a journey towards a healthier mind and a happier life.
            </p>
            <a href="empower.php" class="error-link">Get in touch</a>
        </div>
        <div class="error-image">
            <img src="../image/about.png" alt="Two people sitting on a bench" />
        </div>
    </div>
</section>

  <!-- About Section -->
   <!--<section class="about-section scroll-animate from-right delay-3">
    <div class="about-content">
        <div class="about-text">
            <h4>Empowering Minds</h4>
            <h2>Your journey to mental wellness starts here</h2>
            <p>
                MindWell is your go-to mental health platform, offering a range of resources and support designed to enhance your well-being. 
                Based in George Town, we connect you with professional counselors for personalized guidance and provide AI-driven conversations 
                that promote mental health awareness. Our mission is to make mental health support accessible and engaging for everyone. 
                Join us on a journey towards a healthier mind and a happier life.
            </p>
            <a href="assess.php" class="about-link">Get in touch</a>
        </div>
        <div class="about-image">
            <img src="../image/about.png" alt="Two people sitting on a bench" />
        </div>
    </div>
</section> -->

    <!-- Support and Resources Section -->
    <section id="resources" class="resources-section scroll-animate from-bottom delay-2">
        <div class="resources-header">
            <h4>Empower Your Mind</h4>
            <h2>Access support and resources today!</h2>
        </div>
        <div class="resources-cards">
            <!-- Card 1 -->
            <div class="resource-card scroll-animate from-bottom delay-1">
                <a href="services.php#first">
                    <img src="../image/service1.png" alt="Counselor appointments">
                </a>
                <div class="resource-content">
                    <h3>Counselor appointments &rarr;</h3>
                    <p>Connect with qualified counselors for personalized support.</p>
                </div>
            </div>
        
            <!-- Card 2 -->
            <div class="resource-card scroll-animate from-bottom delay-2">
                <a href="services.php#second">
                    <img src="../image/service2.png" alt="AI conversations">
                </a>
                <div class="resource-content">
                    <h3>AI-Driven conversations &rarr;</h3>
                    <p>Engage in interactive discussions about your mental health.</p>
                </div>
            </div>
        
            <!-- Card 3 -->
            <div class="resource-card scroll-animate from-bottom delay-3">
                <a href="resource.php">
                    <img src="../image/service3.png" alt="Educational resources">
                </a>
                <div class="resource-content">
                    <h3>Educational resources &rarr;</h3>
                    <p>Access a wealth of knowledge to enhance your mental well-being.</p>
                </div>
            </div>
        </div>
        
    </section>


    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-links">
            <a href="services.php">Schedule Appointment</a>
            <a href="assess.php">Complete Intake</a>
            <a href="resource.php">Resources</a>
            <a href="privacy.php">Privacy Policy</a>
        </div>
        <div class="footer-credit">
            <p>Web design by <a href="mastermind.php" class="footer-credit-link"><strong>Master Mind</strong></a></p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".scroll-animate");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                        }
                    });
                },
                { threshold: 0.2 } // Trigger animation when 20% of the element is visible
            );

            elements.forEach((el) => observer.observe(el));
        });
    </script>
</body>
</html>
