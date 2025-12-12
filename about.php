<?php
	include("connection.php");
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SU-DMS About Us</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #f4f6fb;
}
.about-hero {
    background: linear-gradient(90deg, #336699 60%, #f1773e 100%);
    color: #fff;
    padding: 40px 0 20px 0;
    text-align: center;
}
.about-hero img {
    max-width: 120px;
    border-radius: 20px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.2);
    margin-bottom: 10px;
}
.about-content {
    max-width: 700px;
    margin: 40px auto;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 2px 16px rgba(51,102,153,0.08);
    padding: 32px 24px;
}
.about-content h2 {
    color: #336699;
    margin-bottom: 18px;
}
.about-content p {
    font-size: 1.1em;
    color: #333;
    margin-bottom: 18px;
}
.about-links {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    justify-content: center;
    margin-top: 30px;
}
.about-link-card {
    background: #f1773e;
    color: #fff;
    border-radius: 10px;
    padding: 18px 24px;
    min-width: 160px;
    text-align: center;
    font-weight: bold;
    box-shadow: 0 2px 8px #33669922;
    transition: box-shadow 0.2s;
}
.about-link-card a {
    color: #fff;
    text-decoration: underline;
}
.about-link-card:hover {
    box-shadow: 0 4px 16px #33669944;
}
.footer {
    background: #336699;
    color: #fff;
    padding: 30px 0 10px 0;
    text-align: center;
    margin-top: 40px;
}
@media (max-width: 700px) {
    .about-content {
        padding: 12px;
    }
    .about-links {
        gap: 10px;
    }
}
</style>

<div class="about-hero">
    <img src="img/salalelogo.jpg" alt="Salale University Logo">
    <h1>About Salale University DMS</h1>
    <p style="font-size:1.2em; margin-top:10px;">Learn more about salale university mission and vision.</p>
</div>

<div class="about-content">
    <h2>Our Mission</h2>
    <p>To provide efficient, secure, and user-friendly dormitory management for Salale University, supporting students and staff with modern technology.</p>
    <h2>About Salale University</h2>
    <p>Salale University, located in Fiche town, is a vibrant center for learning, research, and innovation in Ethiopia’s Oromia Region. Established in 2016, SU is one of the country’s fourth-generation universities, dedicated to expanding access to higher education in underserved areas. With five dynamic colleges offering a wide range of undergraduate and postgraduate programs, the university fosters academic excellence, community engagement, and cutting-edge research.</p>
    <h2>Contact & Resources</h2>
    <div class="about-links">
        <div class="about-link-card"><a href="http://www.Su.edu.et">SU Site</a></div>
        <div class="about-link-card"><a href="site.php">Site Map</a></div>
        <div class="about-link-card"><a href="https://mail.google.com/a/Su/edu.et">Web Mail</a></div>
        <div class="about-link-card"><a href="dev.php">Developers</a></div>
        <div class="about-link-card"><a href="comment.php">Comment</a></div>
    </div>
</div>

<div class="footer">
    <div>
        <a href="index.php" style="color:#fff;text-decoration:underline;">Home</a> |
        <a href="about.php" style="color:#fff;text-decoration:underline;">About Us</a> |
        <a href="contact.php" style="color:#fff;text-decoration:underline;">Contact Us</a> |
        <a href="dev.php" style="color:#fff;text-decoration:underline;">Developers</a> |
        <a href="comment.php" style="color:#fff;text-decoration:underline;">Comment</a>
    </div>
    <p style="margin-top:10px;font-size:0.95em;">&copy; 2025 Salale University. All rights reserved.</p>
</div>
</body>
</html>
