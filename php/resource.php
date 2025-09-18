<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resources - Mental Health Hub</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- AOS Animation Library -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <style>
      #resources {
        background-color: #f9f9f9;
        padding: 60px 20px;
      }
      .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
      }
      .card:hover {
        transform: scale(1.05);
      }
      .card img {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 200px;
        width: 100%;
        object-fit: cover;
        object-position: center;
      }

      .modal-body iframe {
        width: 100%;
        height: 400px;
      }

      .download-btn,
      .btn-feedback {
        background-color: #f8b400;
        color: white;
        text-transform: uppercase;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
      }
      .download-btn:hover,
      .btn-feedback:hover {
        background-color: #e68900;
      }

      header {
        background: #fff;
        padding: 10px 40px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

        /* Footer Section */
.custom-footer {
    background-color: #0d1a0f; /* Dark background color */
    color: #fff; /* White text */
    padding: 40px 20px; /* Adjusted padding for compact size */
    text-align: center;
    font-family: Arial, sans-serif;
}

/* Footer Links */
.custom-footer-links {
    display: flex;
    justify-content: center; /* Centers the links horizontally */
    gap: 50px; /* Space between links */
    margin-bottom: 20px; /* Space between links and credit */
}

.custom-footer-links a {
    text-decoration: none;
    font-size: 1rem; /* Standard font size */
    font-weight: bold; /* Bold text for emphasis */
    color: #fff; /* White text color */
    text-transform: uppercase; /* Uppercase style for links */
    letter-spacing: 1px; /* Adds spacing between letters */
    transition: color 0.3s ease; /* Smooth hover effect */
}

.custom-footer-links a:hover {
    color: #28a745; /* Green color on hover */
}

/* Footer Credit */
.custom-footer-credit {
    text-align: left; /* Aligns text to the left */
    padding-left: 20px; /* Adds padding for left alignment */
}

.custom-footer-credit p {
    margin: 0;
    font-size: 0.9rem; /* Slightly smaller text */
    color: #ccc; /* Light gray color for text */
}

.custom-footer-credit-link {
    text-decoration: none;
    color: #fff; /* White text for the link */
    font-weight: bold; /* Bold text for emphasis */
}

.custom-footer-credit-link:hover {
    color: #28a745; /* Green color on hover */
}

    </style>
  </head>

  <body>
  <header class="nav-header">
        <nav class="nav-container">
            <div class="brand-logo">MIND<span>WELL</span></div>
            <ul class="menu-list">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="register.php">Register</a></li>    
                <li><a href="assess.php">Assess</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <a href="mastermind.php" class="nav-contact-btn">Contact</a>
        </nav>
    </header>

    <!-- Resources Section -->
    <section id="resources" class="py-5">
      <div class="container text-center">
        <h2 class="fw-bold mb-4" data-aos="fade-right">
          Explore Our Resources
        </h2>
        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">
          Access curated articles, videos, and tools to improve your mental
          health and well-being.
        </p>

        <!-- Filter Section -->
        <div class="mb-5">
          <button
            class="btn btn-outline-primary"
            onclick="showAllResources()"
          >
            Show All
          </button>
          <button class="btn btn-outline-primary" onclick="window.location.href='article.php';">Article</button>
          <button class="btn btn-outline-primary" onclick="window.location.href='video.php';">Video</button>

        </div>

        <div class="row g-4" id="resource-container">
          <!-- Article Card -->
          <div class="col-md-4 resource-item article" data-aos="fade-up">
            <div class="card">
              <img
                src="../image/r1.jpg"
                class="card-img-top"
                alt="Understanding Anxiety"
              />
              <div class="card-body">
                <h5 class="card-title">Understanding Anxiety</h5>
                <p class="card-text">
                  Learn about the causes and symptoms of anxiety, and discover
                  strategies to manage it effectively.
                </p>
                <a
                  href="https://www.mind.org.uk/information-support/types-of-mental-health-problems/anxiety-and-panic-attacks/"
                  class="btn btn-warning"
                  >Read More</a
                >
              </div>
            </div>
          </div>

          <div class="col-md-4 resource-item article" data-aos="fade-up">
            <div class="card">
              <img
                src="../image/r4.png"
                class="card-img-top"
                alt="Understanding Anxiety"
              />
              <div class="card-body">
                <h5 class="card-title">Understanding Anxiety</h5>
                <p class="card-text">
                  Learn about the causes and symptoms of anxiety, and discover
                  strategies to manage it effectively.
                </p>
                <a
                  href="https://journals.healio.com/doi/abs/10.3928/02793695-20070401-09"
                  class="btn btn-warning"
                  >Read More</a
                >
              </div>
            </div>
          </div>


          <div class="col-md-4 resource-item article" data-aos="fade-up">
            <div class="card">
              <img
                src="../image/r5.png"
                class="card-img-top"
                alt="Understanding Anxiety"
              />
              <div class="card-body">
                <h5 class="card-title">Understanding Anxiety</h5>
                <p class="card-text">
                  Learn about the causes and symptoms of anxiety, and discover
                  strategies to manage it effectively.
                </p>
                <a
                  href="https://www.cambridge.org/core/journals/cns-spectrums/article/abs/urbanization-and-emerging-mental-health-issues/A458AD66F75A7A9711688B695043F9B2"
                  class="btn btn-warning"
                  >Read More</a
                >
              </div>
            </div>
          </div>

          <div class="col-md-4 resource-item article" data-aos="fade-up">
            <div class="card">
              <img
                src="../image/r6.png"
                class="card-img-top"
                alt="Understanding Anxiety"
              />
              <div class="card-body">
                <h5 class="card-title">Understanding Anxiety</h5>
                <p class="card-text">
                  Learn about the causes and symptoms of anxiety, and discover
                  strategies to manage it effectively.
                </p>
                <a
                  href="https://bpspsychub.onlinelibrary.wiley.com/doi/abs/10.1111/papt.12222"
                  class="btn btn-warning"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 resource-item article" data-aos="fade-up">
            <div class="card">
              <img
                src="../image/r7.png"
                class="card-img-top"
                alt="Understanding Anxiety"
              />
              <div class="card-body">
                <h5 class="card-title">Understanding Anxiety</h5>
                <p class="card-text">
                  Learn about the causes and symptoms of anxiety, and discover
                  strategies to manage it effectively.
                </p>
                <a
                  href="https://pubs.rsc.org/en/content/articlehtml/2020/qo/d0qo00848f"
                  class="btn btn-warning"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 resource-item article" data-aos="fade-up">
            <div class="card">
              <img
                src="../image/r8.png"
                class="card-img-top"
                alt="Understanding Anxiety"
              />
              <div class="card-body">
                <h5 class="card-title">Understanding Anxiety</h5>
                <p class="card-text">
                  Learn about the causes and symptoms of anxiety, and discover
                  strategies to manage it effectively.
                </p>
                <a
                  href="https://www.magonlinelibrary.com/doi/abs/10.12968/bjca.2009.4.2.39356"
                  class="btn btn-warning"
                  >Read More</a
                >
              </div>
            </div>
          </div>

          <!-- Video Card -->
          <div
            class="col-md-4 resource-item video"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="card">
              <img
                src="../image/r2.jpg"
                class="card-img-top"
                alt="Mindfulness Techniques"
              />
              <div class="card-body">
                <h5 class="card-title">Mindfulness Techniques</h5>
                <p class="card-text">
                  Watch a video guide on mindfulness practices to reduce stress
                  and improve focus.
                </p>
                <button
                  class="btn btn-warning"
                  data-bs-toggle="modal"
                  data-bs-target="#videoModal"
                >
                  Watch Video
                </button>
              </div>
            </div>
          </div>


          <div
            class="col-md-4 resource-item video"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="card">
              <img
                src="../image/r2.jpg"
                class="card-img-top"
                alt="Mindfulness Techniques"
              />
              <div class="card-body">
                <h5 class="card-title">Mindfulness Techniques</h5>
                <p class="card-text">
                  Watch a video guide on mindfulness practices to reduce stress
                  and improve focus.
                </p>
                <button
                  class="btn btn-warning"
                  data-bs-toggle="modal"
                  data-bs-target="#videoModal"
                >
                  Watch Video
                </button>
              </div>
            </div>
          </div>


          <div
            class="col-md-4 resource-item video"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="card">
              <img
                src="../image/r2.jpg"
                class="card-img-top"
                alt="Mindfulness Techniques"
              />
              <div class="card-body">
                <h5 class="card-title">Mindfulness Techniques</h5>
                <p class="card-text">
                  Watch a video guide on mindfulness practices to reduce stress
                  and improve focus.
                </p>
                <button
                  class="btn btn-warning"
                  data-bs-toggle="modal"
                  data-bs-target="#videoModal"
                >
                  Watch Video
                </button>
              </div>
            </div>
          </div>


          <div
            class="col-md-4 resource-item video"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="card">
              <img
                src="../image/r2.jpg"
                class="card-img-top"
                alt="Mindfulness Techniques"
              />
              <div class="card-body">
                <h5 class="card-title">Mindfulness Techniques</h5>
                <p class="card-text">
                  Watch a video guide on mindfulness practices to reduce stress
                  and improve focus.
                </p>
                <button
                  class="btn btn-warning"
                  data-bs-toggle="modal"
                  data-bs-target="#videoModal"
                >
                  Watch Video
                </button>
              </div>
            </div>
          </div>


          <div
            class="col-md-4 resource-item video"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="card">
              <img
                src="../image/r2.jpg"
                class="card-img-top"
                alt="Mindfulness Techniques"
              />
              <div class="card-body">
                <h5 class="card-title">Mindfulness Techniques</h5>
                <p class="card-text">
                  Watch a video guide on mindfulness practices to reduce stress
                  and improve focus.
                </p>
                <button
                  class="btn btn-warning"
                  data-bs-toggle="modal"
                  data-bs-target="#videoModal"
                >
                  Watch Video
                </button>
              </div>
            </div>
          </div>


          <div
            class="col-md-4 resource-item video"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="card">
              <img
                src="../image/r2.jpg"
                class="card-img-top"
                alt="Mindfulness Techniques"
              />
              <div class="card-body">
                <h5 class="card-title">Mindfulness Techniques</h5>
                <p class="card-text">
                  Watch a video guide on mindfulness practices to reduce stress
                  and improve focus.
                </p>
                <button
                  class="btn btn-warning"
                  data-bs-toggle="modal"
                  data-bs-target="#videoModal"
                >
                  Watch Video
                </button>
              </div>
            </div>
          </div>

        
    </section>

    <!-- Video Modal -->
    <div
      class="modal fade"
      id="videoModal"
      tabindex="-1"
      aria-labelledby="videoModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="videoModalLabel">
              Mindfulness Techniques
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <iframe
              width="100%"
              height="400"
              src="https://www.youtube.com/embed/6p_yaNFSYao"
              title="Mindfulness Techniques"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>

    <footer class="custom-footer">
    <div class="custom-footer-links">
        <a href="services.php">Schedule Appointment</a>
        <a href="assess.php">Complete Intake</a>
        <a href="resource.php">Resources</a>
        <a href="#">Privacy Policy</a>
    </div>
    <div class="custom-footer-credit">
        <p>Web design by <a href="mastermind.php" class="custom-footer-credit-link"><strong>Master Mind</strong></a></p>
    </div>
</footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init(); // Initialize animations

      function showAllResources() {
        const items = document.querySelectorAll(".resource-item");
        items.forEach((item) => {
          item.style.display = "block";
        });
      }
    </script>
  </body>
</html>   