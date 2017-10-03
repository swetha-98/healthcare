<? include 'queries.php';>
<?php
$name=$POST['name'];
$e-mail=$POST['e-mail];
$subject=$POST['subject'];
$Message=$POST['Message'];
mysqli_query($connect"INSERT INTO queries(name,e-mail,subject,Message)VALUES('$name','$e-mail','$subject','Message')")
if(mysqli_affeted_rows($connect)>0){
	echo"<p>query inserted</p>";
	echo"<a href="queries.php">go back</a>";
}
else
{
	echo "query not inserted<br/>";
	echo mysqli_error($connect);
}