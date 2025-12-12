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

$result=mysqli_query($conn, "select * from users where user_id='$user_id'") or die(mysqli_error($conn));
$row=mysqli_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Room Registration...</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<style>
body {
  background: linear-gradient(135deg, #336699 0%, #4f8fc3 100%);
  font-family: 'Segoe UI', Arial, sans-serif;
  margin: 0;
  min-height: 100vh;
}
.container-card {
  max-width: 420px;
  margin: 40px auto;
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 8px 32px rgba(51,102,153,0.18);
  padding: 32px 28px 24px 28px;
  position: relative;
}
.container-card h2 {
  text-align: center;
  color: #336699;
  margin-bottom: 24px;
  font-size: 1.7rem;
  font-weight: 600;
}
.form-group {
  margin-bottom: 18px;
}
.form-group label {
  display: block;
  margin-bottom: 6px;
  color: #336699;
  font-weight: 500;
}
.form-group input {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #b3c6e0;
  border-radius: 8px;
  font-size: 1rem;
  background: #f7faff;
  transition: border-color 0.2s;
}
.form-group input:focus {
  border-color: #336699;
  outline: none;
}
.button_example {
  width: 100%;
  padding: 12px;
  background: linear-gradient(90deg, #336699 60%, #4f8fc3 100%);
  color: #fff;
  border: none;
  border-radius: 8px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(51,102,153,0.12);
  margin-top: 10px;
  transition: background 0.2s;
}
.button_example:hover {
  background: linear-gradient(90deg, #4f8fc3 60%, #336699 100%);
}
.success, .wrong {
  text-align: center;
  font-size: 1rem;
  margin-bottom: 12px;
  padding: 8px 0;
  border-radius: 6px;
}
.success {
  background: #e6f9e6;
  color: #2e7d32;
  border: 1px solid #b2dfdb;
}
.wrong {
  background: #ffeaea;
  color: #c62828;
  border: 1px solid #ffcdd2;
}
.header-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #336699;
  color: #fff;
  padding: 16px 32px;
  border-radius: 0 0 18px 18px;
  margin-bottom: 32px;
}
.header-bar img {
  vertical-align: middle;
  margin-right: 10px;
}
.footer {
  background: #336699;
  color: #fff;
  text-align: center;
  padding: 18px 0 8px 0;
  border-radius: 18px 18px 0 0;
  margin-top: 40px;
  font-size: 1rem;
}
.footer a {
  color: #fff;
  text-decoration: underline;
  margin: 0 8px;
}
@media (max-width: 600px) {
  .container-card {
    padding: 18px 8px 12px 8px;
  }
  .header-bar {
    flex-direction: column;
    padding: 12px 8px;
  }
}
</style>
<script src="aa.js" type="text/javascript"></script>
</head>
<body>

<div class="header-bar">
  <div style="display:flex; align-items:center; gap:16px;">
    <img src="img/salalelogo.jpg" width="48px" height="48px" alt="University Logo" style="border-radius:8px; box-shadow:0 2px 8px rgba(51,102,153,0.12);">
    <img src="img/people.png" width="40px" height="30px" alt="User"> 
    <span style="font-size:1.1rem; font-weight:500;"> <?php echo $FirstName . " " . $middleName; ?> </span>
  </div>
  <div>
    <a href="logout.php" id="log" style="color:#fff; font-weight:600; text-decoration:none;">Logout</a>
  </div>
</div>

<div class="container-card">
  <h2>Change Password</h2>
  <?php
  if(isset($_POST['changepassword'])) {
    $oldpass = $_POST['old_password'];
    $newpass = $_POST['new_password'];
    $confirmpass = $_POST['confirm_password'];
    $conn = mysqli_connect("localhost", "root", "", "dbudms");
    if(!$conn){
      echo '<div class="wrong">Error connecting to DB server: '.mysqli_connect_error().'</div>';
    } else {
      $query="select * from users where password='{$oldpass}' and user_id='{$user_id}' ";
      $result=mysqli_query($conn, $query);
      if(!$result){
        echo '<div class="wrong">Query failed: '.mysqli_error($conn).'</div>';
      } else if(mysqli_num_rows($result)==1){
        if($newpass!=$confirmpass){
          echo '<div class="wrong">New Password and Confirm Password do not match!</div>';
        } else {
          $query="update users set password='{$newpass}', confirmpassword='{$confirmpass}' where user_id='{$user_id}'";
          $result=mysqli_query($conn, $query);
          if($result){
            echo '<div class="success">Your password has been changed successfully!</div>';
          } else {
            echo '<div class="wrong">Failed to update password: '.mysqli_error($conn).'</div>';
          }
        }
      } else {
        echo '<div class="wrong">Wrong Old password!</div>';
      }
    }
  }
  ?>
  <form id="form1" name="login" method="POST" action="changepassword.php" style="margin-top:18px;">
    <div class="form-group">
      <label for="old_password">Old Password <span style="color:red">*</span></label>
      <input type="password" name="old_password" id="old_password" required placeholder="Enter Old Password">
    </div>
    <div class="form-group">
      <label for="new_password">New Password <span style="color:red">*</span></label>
      <input type="password" name="new_password" id="new_password" required placeholder="Enter New Password">
    </div>
    <div class="form-group">
      <label for="confirm_password">Confirm Password <span style="color:red">*</span></label>
      <input type="password" name="confirm_password" id="confirm_password" required placeholder="Re-type your Password">
    </div>
    <button type="submit" name="changepassword" class="button_example">Change Password</button>
  </form>
</div>

<div class="footer">
  <a href="#top"><img src="img/arrow_up.png" width="32px" title="Scroll Back to Top" style="vertical-align:middle;"></a>
  <br>
  Copyright &copy; 2025 Salale University ODMS. All rights reserved.<br>
  <a href="proctor.php">Home</a> | <a href="registerrooms.php">Register Rooms</a> | <a href="comments.php">Comment</a>
</div>

</body>
</html>
