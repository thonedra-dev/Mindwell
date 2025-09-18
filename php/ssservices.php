<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Layout</title>
    <link rel="stylesheet" href="../css/home.css">
<body>
    <!-- Navigation Bar -->
    <header class="scroll-animate from-top delay-1">
        <nav class="navbar">
            <div class="logo">MIND<span>WELL</span></div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="register.php">Register</a></li>            
                <li><a href="assess.php">Assess</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <a href="#" class="contact-btn">CONTACT</a>
        </nav>
    </header>

    <!-- Section 1: Contact Section -->
    <section id="first" class="contact-section scroll-animate from-left delay-1">
        <div class="contact-container">
            <!-- Left Side: Contact Form -->
            <div class="contact-form">
                <h3 style="font-size: 1.5rem; font-weight: bold; background-color: #000; color: #28a745; padding: 5px 10px; border-radius: 5px;">
                    Counselor appointments &rarr;
                </h3><br>
                <h4>Get in Touch</h4>
                <h2>We're here to support you!</h2>
                <form action="#" method="post">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" id="name" name="name" placeholder="Jane Smith" required>

                    <label for="email">Email address <span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="email@website.com" required>

                    <label for="phone">Phone number <span>*</span></label>
                    <input type="tel" id="phone" name="phone" placeholder="555-555-5555" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder=""></textarea>

                    <div class="form-checkbox">
                        <input type="checkbox" id="consent" required>
                        <label for="consent">
                            I allow this website to store my submission so they can respond to my inquiry. <span>*</span>
                        </label>
                    </div>

                    <button type="submit" class="btn-submit">SUBMIT</button>
                </form>
            </div>

            <!-- Right Side: Contact Details -->
            <div class="contact-details scroll-animate from-right delay-2">
                <div class="map-placeholder">
                    <p>We are unable to show a map because the location is not full or incorrect. Please check your address details and try again.</p>
                </div>
                <div class="details">
                    <h3>Get in touch</h3>
                    <p><a href="mailto:thone.dra@student.aiu.edu.my">thone.dra@student.aiu.edu.my</a></p>
                    <h3>Location</h3>
                    <p>George Town, 07 MY</p>
                    <h3>Hours</h3>
                    <ul>
                        <li>Monday: 9:00am - 10:00pm</li>
                        <li>Tuesday: 9:00am - 10:00pm</li>
                        <li>Wednesday: 9:00am - 10:00pm</li>
                        <li>Thursday: 9:00am - 10:00pm</li>
                        <li>Friday: 9:00am - 10:00pm</li>
                        <li>Saturday: 9:00am - 6:00pm</li>
                        <li>Sunday: 9:00am - 12:00pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

     <!-- Section 3: AI-Powered Assistance -->
     <section id="second" class="normal-section scroll-animate from-bottom delay-2">
         <!-- Hero Section -->
         <section class="modern-hero scroll-animate from-left delay-2">
            <div class="hero-content">
                <h1>Unlock your mind</h1>
                <p>Discover support for mental health</p>
                <a href="#resources" class="btn">VIEW SERVICES</a>
            </div>
        </section>
        

    </section>

    <!-- Section 2: Empowering Minds -->
    <section id="third" class="normal-section scroll-animate from-bottom delay-1">
        <h2>Educational Resources</h2>
        <p>
            At MindWell, we believe in empowering individuals to take control of their mental health. Through innovative tools, 
            guided therapy sessions, and a robust support community, we offer resources tailored to your unique journey. Whether you're looking for 
            professional advice, self-help tools, or someone to talk to, MindWell is here to guide you every step of the way.
        </p>
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
                { threshold: 0.2 } // Trigger animation when 20% of the element is visible
            );

            elements.forEach((el) => observer.observe(el));
        });
    </script>
</body>
</html>
