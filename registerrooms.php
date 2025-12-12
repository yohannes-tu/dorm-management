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

$result = $conn->query("SELECT * FROM users WHERE user_id='$user_id'") or die($conn->error);
$row = $result->fetch_array();
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
$result1 = $conn->query("SELECT * FROM block WHERE user_id='$user_id'") or die($conn->error);
$row = $result1->fetch_array();
$block=$row['block_no'];
$sex=$row['sexcategory'];
$faculty=$row['faculty'];
$norooms=$row['norooms'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Room Registration...</title>
<link rel="icon" type="image/png" href="img/suicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->
<tr>
<td width="600px"></td>
<td><?php 
echo '<img src="img/people.png" width="40px" height="30px">&nbsp;'.'<font face="times new roman" color="white" size="3">'.$FirstName."&nbsp;".$middleName." ".'</font>';?></td>
<td id="logoutlink" align="center"><a href="logout.php" id="log">Logout</a></td>
</tr>
<tr>
<td width="750px" colspan="3" height="100px">
<p><a href="proctor.php"><img src="img/salalelogo.jpg" align="left" width="150px" height="120px"></a>
<img src="img/proctor.png" align="center" width="490px" height="120px"></p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="proctor.php">Home</a></li>
         <li><a href="registerrooms.php">Register Rooms</a></li>
         </ul>
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->
<!--Slide shows-->
<!--End of Slide shows-->
<table align="center" id="insides" width="850px">
<tr>
<!--Sub menus-->
<td width="25%" height="400px" valign="top" id="insides">
<table>
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">SU-DMS</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
</tr>
</table>
<table>
<tr>
<th align="center" width="450px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">Manage Record</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="assign.php">Assign Student</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewstu.php">View Student Info</a></td>
</tr>
</table>
<br>
<br>
<table border="0">
<tr>
<th align="center" width="300px" bgcolor="#070707ff" height="25px"><font face="arial" color="white" size="2">Related Links</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="changepassword.php">Change Password</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="greporta.php">Generate Report</a></td>
</tr>
</table>
<br>
<br>
</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<font face="Arial" size="2px">Room Registration......</font>
  <!--For the upload Form-->  
<div style="width:420px; height:270px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:25px; -moz-border-radius:25px; border-radius:35px; -webkit-box-shadow:10 10 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Room Registration...</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:30px; height:12px;"><a href="proctor.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
<?php
if(isset($_POST['submit'])) {
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
  $block_no = $_POST['block'];
  $rno = $_POST['room'];
  $nobed = $_POST['nobed'];
  $success_count = 0;
  $duplicate_count = 0;
  // Check if block exists
  $block_check_sql = "SELECT * FROM block WHERE block_no='$block_no'";
  $block_check_result = $conn->query($block_check_sql);
  if($block_check_result->num_rows == 0) {
    // Insert block with minimal/default values (customize as needed)
    $conn->query("INSERT INTO block (block_no) VALUES ('$block_no')");
  }
  for($i=1; $i<=$rno; $i++) {
    // Check if room already exists
    $check_sql = "SELECT * FROM room WHERE block_no='$block_no' AND room_no='$i'";
    $check_result = $conn->query($check_sql);
    if($check_result->num_rows > 0) {
      $duplicate_count++;
      continue;
    }
    $sql = "INSERT INTO room (block_no, room_no, nobed) VALUES ('$block_no', '$i', '$nobed')";
    if($conn->query($sql)) {
      $success_count++;
    }
  }
  if ($success_count > 0) {
    echo '<p class="success">Successfully registered ' . $success_count . ' room(s).</p>';
  }
  if ($duplicate_count > 0) {
    echo '<p class="wrong">' . $duplicate_count . ' room(s) were already registered and skipped.</p>';
  }
  echo '<meta content="5;registerrooms.php" http-equiv="refresh" />';
  mysqli_close($conn);
}
?>
  <form  method="POST" action="registerrooms.php">
          <table>
		  <br><br>
            <tr>
			  <td class='para1_text' width="220px"><font color="red">*</font>Block No.</td>
              <td><input type="text" name="block" value="<?php echo $block;?>"></td>
            </tr>
            <tr>
              <td class='para1_text' width="220px"><font color="red">*</font>Total No. Of Rooms</td>
              <td><input type="text" name="room" value="<?php echo $norooms;?>"></td>
            </tr>
			<tr>
              <td class='para1_text' width="220px"><font color="red">*</font>No.Of Beds per Dorm</td>
              <td><input type="text" name="nobed" onKeyPress="return isNumberKey(event)" required x-moz-errormessage="Enter No Of Beds"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="submit" value="Save" class="button_example" />
                
            </tr>
          </table>
        </form>
  </div>
				   
				   
				   
				   
				   
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
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy 2025 Salale University  DMS. All rights reserved.</font></p>
		<br><br>
		<div class="pull-right_foot" align="center">
		&nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="3">
		<a href="proctor.php">Home</a>&nbsp;|&nbsp;<a href="registerrooms.php">Register Rooms</a>&nbsp;|&nbsp;<a href="comments.php">Comment</a></font>
		</div>

      </footer>
</div>

<!--End of Footer-->
</body>
</html>
