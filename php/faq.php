<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindwell - FAQ</title>
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
            color:  #28a745;
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
            color:  #28a745;
        }

        .nav-contact-btn {
            background-color:  #28a745;
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
            background-color:  #28a745;
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

    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
      <div class="faq-header">
          <h4>Frequently Asked Questions</h4>
          <h2>Answers to Your Common Queries</h2>
      </div>
      <div class="faq-container">
          <!-- FAQ 1 -->
          <div class="faq-item">
              <button class="faq-question">What services does MindWell provide?<span class="faq-icon">+</span></button>
              <div class="faq-answer">
                  <p>MindWell offers counselor appointments, AI-driven conversations, and a library of educational resources to support mental health.</p>
              </div>
          </div>
          <!-- FAQ 2 -->
          <div class="faq-item">
              <button class="faq-question">How do I schedule an appointment?<span class="faq-icon">+</span></button>
              <div class="faq-answer">
                  <p>You can schedule an appointment by navigating to the "Services" section and selecting "Counselor Appointments."</p>
              </div>
          </div>
          <!-- FAQ 3 -->
          <div class="faq-item">
              <button class="faq-question">Are AI-driven conversations secure?<span class="faq-icon">+</span></button>
              <div class="faq-answer">
                  <p>Yes, our AI-driven conversations are designed with your privacy in mind, using secure protocols to protect your data.</p>
              </div>
          </div>
          <!-- FAQ 4 -->
          <div class="faq-item">
              <button class="faq-question">What is the cost of MindWell services?<span class="faq-icon">+</span></button>
              <div class="faq-answer">
                  <p>MindWell provides various free resources and premium services at competitive prices. Visit the "Services" page for detailed pricing.</p>
              </div>
          </div>
          <!-- FAQ 5 -->
          <div class="faq-item">
              <button class="faq-question">Can I access MindWell from anywhere?<span class="faq-icon">+</span></button>
              <div class="faq-answer">
                  <p>Yes, MindWell is accessible globally, ensuring you can access mental health support wherever you are.</p>
              </div>
          </div>
          <!-- FAQ 6 -->
          <div class="faq-item">
              <button class="faq-question">How do I contact MindWell support?<span class="faq-icon">+</span></button>
              <div class="faq-answer">
                  <p>You can reach out to us via the "Contact" button in the navigation bar or by emailing us at support@mindwell.com.</p>
              </div>
          </div>
      </div>
  </section>

  <footer class="footer">
        <div class="footer-links">
            <a href="services.php">Schedule Appointment</a>
            <a href="assess.php">Complete Intake</a>
            <a href="resource.php">Resources</a>
            <a href="privacy.php">Privacy Policy</a>
        </div>
        <div class="footer-credit">
            <p>Web design by <a href="#" class="footer-credit-link"><strong>Master Mind</strong></a></p>
        </div>
    </footer>
  

    <!-- JavaScript for FAQ -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Toggle FAQ answers
            const faqQuestions = document.querySelectorAll(".faq-question");
            faqQuestions.forEach(question => {
                question.addEventListener("click", () => {
                    const parent = question.parentElement;
                    const answer = parent.querySelector(".faq-answer");

                    // Toggle answer visibility
                    answer.classList.toggle("visible");

                    // Toggle '+' and '-' icons
                    const icon = question.querySelector(".faq-icon");
                    icon.textContent = answer.classList.contains("visible") ? "-" : "+";
                });
            });
        });
    </script>
</body>
</html>
