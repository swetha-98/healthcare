<?php

    // Inialize session

    session_start();
    // Include database connection settings
    $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',        so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'login'; // Your database name.
    $username = '';             // Your database username.
    $password = '';                 // Your database password. If your database has no           password, leave it empty.
	INSERT INTO login (username,password)VALUES($username,$password);
     // Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,        perhaps the service is down!');
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');


      // Retrieve username and password from database according to user's input
     $userName=mysql_real_escape_string($_POST['username']); 
     $password=mysql_real_escape_string($_POST['password']); 
     $passWord=md5($password); // Encrypted Password

       //*********retrieving data from Database**********

      $query = "SELECT * FROM member WHERE userName='$userName' and passWord='$passWord'";
      //$login = mysqli_query("SELECT userName,password FROM 'member' WHERE userName=          $_post['username'] AND passWord= $_post['password'])");
       // Check username and password match
      $res = mysql_query($query);

      $rows = mysql_num_rows($res);
      if ($rows==1) {
      // Set username session variable

      $_SESSION['userName'] = $_POST['username'];

     echo"loggedin successfully";
     }
     else {
     // Jump to login page
     echo "user name and password not found";
     }
     exit;
     ?>