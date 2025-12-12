<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Salale University DMS</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #f4f6fb;
    }
    .contact-hero {
      background: linear-gradient(90deg, #336699 60%, #f1773e 100%);
      color: #fff;
      padding: 40px 0 20px 0;
      text-align: center;
    }
    .contact-hero img {
      max-width: 120px;
      border-radius: 20px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.2);
      margin-bottom: 10px;
    }
    .contact-content {
      max-width: 600px;
      margin: 40px auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 2px 16px rgba(51,102,153,0.08);
      padding: 32px 24px;
    }
    .contact-content h2 {
      color: #336699;
      margin-bottom: 18px;
    }
    .contact-content p {
      font-size: 1.1em;
      color: #333;
      margin-bottom: 18px;
    }
    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 16px;
      margin-top: 24px;
    }
    .contact-form input, .contact-form textarea {
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 1em;
      font-family: 'Segoe UI', Arial, sans-serif;
    }
    .contact-form button {
      background: #336699;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 6px;
      font-size: 1em;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.2s;
    }
    .contact-form button:hover {
      background: #f1773e;
    }
    .footer {
      background: #336699;
      color: #fff;
      padding: 30px 0 10px 0;
      text-align: center;
      margin-top: 40px;
    }
    @media (max-width: 700px) {
      .contact-content {
        padding: 12px;
      }
    }
  </style>
</head>
<body>
  <div class="contact-hero">
    <img src="img/salalelogo.jpg" alt="Salale University Logo">
    <h1>Contact Us</h1>
    <p style="font-size:1.2em; margin-top:10px;">We're here to help! Reach out to the DMS team with your questions, feedback, or support needs.</p>
  </div>

  <div class="contact-content">
    <h2>Get in Touch</h2>
    <p>If you have any questions about dormitory assignments, account issues, or want to provide feedback, please use the form below or contact us directly.</p>
    <form class="contact-form" method="post" action="contact.php">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
    <div style="margin-top:24px;">
      <p><strong>Email:</strong> dms-support@salaleuniversity.edu.et</p>
      <p><strong>Phone:</strong> +251-XXX-XXXXXX</p>
      <p><strong>Office:</strong> Dormitory Management Office, Salale University, Fiche, Ethiopia</p>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $message = htmlspecialchars($_POST['message']);
      echo "<p style='color: #336699; font-weight: bold;'>Thank you, $name! Your message has been received.</p>";
      // Here you could add code to send an email or save the message to a database
    }
    ?>
  </div>

  <div class="footer">
    <div>
      <a href="index.php" style="color:#fff;text-decoration:underline;">Home</a> |
      <a href="about.php" style="color:#fff;text-decoration:underline;">About Us</a> |
      <a href="contact.php" style="color:#fff;text-decoration:underline;">Contact Us</a>
    </div>
    <p style="margin-top:10px;font-size:0.95em;">&copy; 2025 Salale University. All rights reserved.</p>
  </div>
</body>
</html>
