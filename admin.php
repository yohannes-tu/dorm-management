<?php
  include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Salale University Online Dormitory managent system</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
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
.admin-hero {
  background: linear-gradient(90deg, #336699 60%, #f1773e 100%);
  color: #fff;
  padding: 40px 0 20px 0;
  text-align: center;
}
.admin-hero img {
  max-width: 120px;
  border-radius: 20px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.2);
  margin-bottom: 10px;
}
.admin-hero .admin-user {
  margin-top: 10px;
  font-size: 1.1em;
  font-weight: bold;
}
.admin-dashboard {
  max-width: 900px;
  margin: 40px auto;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 2px 16px rgba(51,102,153,0.08);
  padding: 32px 24px;
}
.dashboard-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  justify-content: center;
  margin-top: 30px;
}
.dashboard-card {
  background: #336699;
  color: #fff;
  border-radius: 10px;
  padding: 24px 32px;
  min-width: 180px;
  text-align: center;
  font-weight: bold;
  box-shadow: 0 2px 8px #33669922;
  transition: box-shadow 0.2s;
}
.dashboard-card a {
  color: #fff;
  text-decoration: underline;
}
.dashboard-card:hover {
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
  .admin-dashboard {
    padding: 12px;
  }
  .dashboard-cards {
    gap: 10px;
  }
}
</style>

<div class="admin-hero">
  <img src="img/salalelogo.jpg" alt="Salale University Logo">
  <h1>Admin Dashboard</h1>
  <div class="admin-user">
    <?php echo '<img src="img/people.png" width="40px" height="30px">&nbsp;'.$FirstName."&nbsp;".$middleName; ?>
    <a href="logout.php" id="log" style="margin-left:20px;color:#fff;text-decoration:underline;">Logout</a>
  </div>
</div>

<div class="admin-dashboard">
  <h2 style="color:#336699;">Quick Actions</h2>
  <div class="dashboard-cards">
    <div class="dashboard-card"><a href="viewstudent.php">View Student</a></div>
    <div class="dashboard-card"><a href="cua.php">Create User Account</a></div>
    <div class="dashboard-card"><a href="raccount.php">Edit User Account</a></div>
    <div class="dashboard-card"><a href="viewcom.php">View Comment</a></div>
    <div class="dashboard-card"><a href="Postinfo.php">Post Info</a></div>
  </div>
</div>

<div class="footer">
  <div>
    <a href="admin.php" style="color:#fff;text-decoration:underline;">Home</a> |
    <a href="viewcom.php" style="color:#fff;text-decoration:underline;">View Comment</a> |
    <a href="Postinfo.php" style="color:#fff;text-decoration:underline;">Post Info</a>
  </div>
  <p style="margin-top:10px;font-size:0.95em;">&copy; 2025 Salale University ODMS. All rights reserved.</p>
</div>
</body>
</html>
