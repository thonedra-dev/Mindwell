<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Grid - Mental Health Hub</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS Animation Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <style>
    /* Importing navigation styles */
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
      background-color: #28a745;
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
      background-color: #1d7b34;
    }
    /* Resource section styles */
    .resources-section {
      text-align: center;
      margin: 40px auto;
    }
    .resources-section h2 {
      font-weight: bold;
      margin-bottom: 20px;
    }
    .resources-section p {
      font-size: 1rem;
      margin-bottom: 30px;
    }
    .resources-section .btn {
      margin: 5px;
    }
    /* Video grid styles */
    .video-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      padding: 20px;
      max-width: 1200px;
      margin: 40px auto;
    }
    .video-grid iframe {
      width: 100%;
      height: 350px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .button-container {
      text-align: center;
      margin-top: 20px;
    }
    .button-container a {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      color: white;
      background-color: #007BFF;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .button-container a:hover {
      background-color: #0056b3;
    }
    @media (max-width: 768px) {
      .video-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <header class="nav-header">
    <nav class="nav-container">
      <div class="brand-logo">MIND<span>WELL</span></div>
      <ul class="menu-list">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="resource.php">Resources</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="assess.php">Assess</a></li>
        <li><a href="faq.php">FAQ</a></li>
      </ul>
      <a href="mastermind.php" class="nav-contact-btn">Contact</a>
    </nav>
  </header>

  <!-- Resources Section -->
  <section class="resources-section">
    <h2>Explore Our Resources</h2>
    <p>Access curated articles, videos, and tools to improve your mental health and well-being.</p>
    <button class="btn btn-outline-primary" onclick="window.location.href='article.php';">Article</button>
    <button class="btn btn-outline-primary" onclick="window.location.href='video.php';">Video</button>
  </section>

  <!-- Video Grid Section -->
  <div class="video-grid">
    <iframe src="https://www.youtube.com/embed/rkZl2gsLUp4" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/YdMCL9_UTE4" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/1qq7lDL-bzY" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/AOHT-YiOeQA" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/W2afI0n8pUk" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/OTQJmkXC2EI" allowfullscreen></iframe>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init(); // Initialize animations
  </script>
</body>
</html>
