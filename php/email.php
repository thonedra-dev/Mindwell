<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Location</title>
    <link rel="stylesheet" href="../css/home.css">
    <style>
        /* Custom styles for the map section */
        .map-section {
            padding: 60px 40px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .map-container {
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 450px;
            border: none;
        }

        .map-header {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <header class="scroll-animate from-top delay-1">
        <nav class="navbar">
            <div class="logo">MIND<span>WELL</span></div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="resource.php">Resources</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="assess.php">Assess</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <a href="#" class="contact-btn">CONTACT</a>
        </nav>
    </header>

    <!-- Section: Map -->
    <section class="map-section">
        <h2 class="map-header">Albukhary International University Location</h2>
        <div class="map-container">
            <!-- Google Maps Embed -->
            <iframe
                src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Albukhary+International+University,Alor+Setar,Kedah,Malaysia"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer scroll-animate from-bottom delay-3">
        <div class="footer-links">
            <a href="#">Schedule Appointment</a>
            <a href="#">Complete Intake</a>
            <a href="#">Resources</a>
            <a href="#">Privacy Policy</a>
        </div>
        <div class="footer-credit">
            <p>Web design by <a href="#" class="footer-credit-link"><strong>Master Mind</strong></a></p>
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
                { threshold: 0.2 }
            );

            elements.forEach((el) => observer.observe(el));
        });
    </script>
</body>
</html>