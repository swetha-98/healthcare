<? php
$host="localhost";
$username="root";
$password="";
$dbname="queries";
$connection=mysqli_connect($host,$username,$password,$dbname);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="healthcare.css">
<div class="hc">
<h1><center>REDIUSE</center></h1>
<h3><center><i>(we care for u)</i></center></h3></div>
<center>
<ul>
  <li><a href="hchome.html">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Diet & Nutrition</a>
    <div class="dropdown-content">
      <a href="men.html">For Men</a>
      <a href="women.html">For Women</a>  
    </div>
  </li>
<li><a href="fb.html">Food & Benefits</a></li>
<li><a href="ghp.html">General Health Problems</a></li>
<li><a href="am.html">Alternative Medicines</a></li>
<li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">consult doctor</a>
  <div class="dropdown-content">
    <a href="callfordoctor.html">call for doctor</a>
    <a href="consultonline.html">consult online</a></div></li>
<li><a href="queries.html">Queries</a></li>
<li><a href="contact.html">Contact us</a></li>
</ul>
</center>
<title>Rediuse</title>
</center>
</head>
<body><br><br><br><center>
<form style="font-size:200%;" method="post" action="">
Name:<br>
<input type="text" name="name"><br>
email:<br><input type="text" name="email"><br>
subject:<br>
<input type="text" name="subject"><br>
Message:<br>
<input type="text" name="message"><br><br>
<input type="submit" name="submit"<br></form>
</body>
<? php
if(isset($_POST['submit'])){
$name = addslashes[$_POST['name']);
$email = addslashes[$_POST['email']);
$subject = addslashes[$_POST['subject']);
$Message = addslashes[$_POST['message']);
mysqli_query($connect"INSERT INTO queries(name,email,subject,message)VALUES('$name','$email','$subject','$message')")
?> 
</html>