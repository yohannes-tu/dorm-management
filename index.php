<style>
p {
  padding: 10px;
  font-family: 'Segoe UI', Arial, sans-serif !important;
}
</style>
<?php
	include("connection.php");  
 session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>salale university Dormitory managent system</title>
<link rel="icon" type="image/png" href="img/salalelogo.jpg"/>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="slideshow/imageslider.css" rel="stylesheet" type="text/css" />
<script src="slideshow/imageslider.js" type="text/javascript"></script>
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>

</head>
<body>
<style>
body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Arial, sans-serif;
  background: #f4f6fb;
}
.hero {
  background: linear-gradient(90deg, #336699 60%, #f1773e 100%);
  color: #fff;
  padding: 40px 0 20px 0;
  text-align: center;
}
.hero img {
  display: block;
  margin: 0 auto 18px auto;
  width: 140px;
  height: 140px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 4px 24px rgba(51,102,153,0.18);
  background: #fff;
  border: 4px solid #f1773e;
}
.nav-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  margin: 30px 0;
}
.nav-card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.08);
  padding: 30px 24px;
  min-width: 180px;
  text-align: center;
  transition: box-shadow 0.2s;
}
.nav-card:hover {
  box-shadow: 0 4px 16px #33669944;
}
.nav-card a {
  text-decoration: none;
  color: #336699;
  font-weight: bold;
  font-size: 1.1em;
}
.announcement {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  margin: 30px auto;
  max-width: 600px;
  padding: 24px;
  text-align: center;
}
.footer {
  background: #336699;
  color: #fff;
  padding: 30px 0 10px 0;
  text-align: center;
  margin-top: 40px;
}
@media (max-width: 700px) {
  .nav-cards {
    flex-direction: column;
    gap: 10px;
  }
  .announcement {
    padding: 12px;
  }
}
</style>

<div class="hero">
  <img src="img/salalelogo.jpg" alt="Salale University Logo">
  <h1>Salale University Dormitory Management System</h1>
  <p style="font-size:1.2em; margin-top:10px;">Efficient, Secure, and User-Friendly Dormitory Management</p>
  <div style="margin-top:20px;">
    <a href="login.php" style="background:#fff;color:#336699;padding:10px 24px;border-radius:8px;font-weight:bold;text-decoration:none;box-shadow:0 2px 8px #33669922;">Login</a>
  </div>
</div>

<div class="nav-cards">
  <div class="nav-card"><a href="viewdorm.php">View Dormitory</a></div>
  <div class="nav-card"><a href="admin.php">Admin Login</a></div>
  <div class="nav-card"><a href="about.php">About Us</a></div>
  <div class="nav-card"><a href="contact.php">Contact Us</a></div>
</div>
<!-- 
<div class="announcement">
  <h2 style="color:#336699;">Welcome to Salale University DMS</h2>
  <p style="margin-top:10px;">Nestled in the heart of Fiche town, Salale University is a vibrant center for learning, research, and innovation in Ethiopia’s Oromia Region.<br>
  Established in 2016, SU is one of the country’s fourth-generation universities, dedicated to expanding access to higher education in underserved areas.<br>
  <b>Announcements:</b> Dear Regular Students, you can view your dormitory information by clicking <a href="viewdorm.php" style="color:#f1773e;font-weight:bold;">Here</a>.</p>
</div> -->

<!-- <div class="footer">
  <div>
    <a href="index.php" style="color:#fff;text-decoration:underline;">Home</a> |
    <a href="about.php" style="color:#fff;text-decoration:underline;">About Us</a> |
    <a href="contact.php" style="color:#fff;text-decoration:underline;">Contact Us</a>
  </div>
  <p style="margin-top:10px;font-size:0.95em;">&copy; 2025 Salale University. All rights reserved.</p>
</div> -->
<!--End Of Header-->
<!--Main menus-->
<!-- <tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">About Us</a></li>
         <li><a href="contact.php">Contact Us</a></li>
		 <li><a href="viewdorm.php">View Dorm</a></li>
		 <li><a href="admin.php">Admin Login</a></li>
         </ul>
         </div>
    </div>

</td>
</tr> -->
<!--End of main menus-->
<!--Slide shows-->
<tr >
<td colspan="2" valign="top" height="200px">
<div id="sliderFrame">
        <div id="slider"> 		
            <img style="width:280px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzs8ycBFypccPvpmXU7934wfq9JV6dl3D72A&s" alt="Building One" />
            <img style="width:280px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToUjGGq6u5hpc4E08q5Hun6-4HE1Scf6vC0w&s" alt="Photo Two" />
            <img style="width:280px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBMxPq_8K3Mi0krjh6ZKZ_Av3vmJoIV2xEwA&s" alt="Photo Three" />
            <img style="width:280px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmDInk3FcLsGpAfux_PIDMstTcbxMGCuZ2Ig&s" alt="Photo Four" />
            <img style="width:280px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBMxPq_8K3Mi0krjh6ZKZ_Av3vmJoIV2xEwA&s" alt="Photo Five" />
			</div>
    </div>
</td>
</tr>
<!--End of Slide shows-->
<table align="center" id="insides" width="850px">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<table  >
<tr>
<th align="center" width="250px" height="25px" bgcolor="#f50808ff"><font face="arial" color="white" size="2">SU-DMS</font></th>
</tr>
<tr>
<td><br><br><center><img src="img/salalelogo.jpg" width="150px" height="100px"></center></td>
</tr>
</table>
<br>
<br>
<br>
<table border="0">
<tr>
<th width="250px" bgcolor="#f1773eff" height="25px"><font face="arial" color="white" size="2">Related Links</font></th>
</tr>
<tr>
<td><img src="img/img2.jpg" width="10px">&nbsp;<a href="">SU Site</a></td>
</tr>
<tr>
<td><img src="img/img1.jpg" width="10px">&nbsp;<a href="site.php">Site Map</a></td>
</tr>
<tr>
<td><img src="img/img3.jpg" width="10px">&nbsp;<a href="http://slu.edu.et/SLU_WEB/background.php">Web Mail</a></td>
</tr>
</table>
<br>
<br>
<br>


</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<p align="center"><font face="arial" size="5px" color="#f1773eff">Salale  University</font></p>
<p><font size="2px">&nbsp;&nbsp;&nbsp;🏛️ **About Salale University** <br> 
Nestled in the heart of Fiche town, Salale University is a vibrant center for learning, research, and innovation in Ethiopia’s Oromia Region.
 Established in 2016, SU is one of the country’s fourth-generation universities, dedicated to expanding access to higher education in underserved areas.
  With five dynamic colleges offering a wide range of undergraduate and postgraduate programs, the university fosters academic excellence, 
  community engagement, and cutting-edge research. Its commitment to holistic education is reflected through modern campuses, dedicated faculty,
   and growing global partnerships—all shaping graduates who are equipped to lead and inspire across Ethiopia and beyond.

</font></p>
<br>
<br>
<p><font face="arial" size="3px" color="#f1773eff">Announcements</font></p>
<p><font size="3px">Dear Regular Students of salale University</font></p>
<font size="2px">You can view your dormitory information by clicking  <a href="viewdorm.php"> Here</a></font>
</td>
</tr>
</table>
<!--End Body of section-->
</table>
<!--Footer-->

<div id="sample">
      <footer>
	  <br>
	  <div align="right">
<a href="#top"><img src="img/arrow_up.png" width="40px" title="Scroll Back to Top"></a>
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy 2025 salale University. All rights reserved.</font></p>
		<br><br>
		<div class="pull-right_foot" align="center">
		&nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="3">
		<a href="index.php">Home</a>&nbsp;|&nbsp;<a href="about.php">About Us</a>&nbsp;|&nbsp;<a href="contact.php">Contact Us</a>&nbsp;</font>
		</div>

      </footer>
</div>

<!--End of Footer-->
</body>
</html>
