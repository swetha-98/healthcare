<?php
$connect=mysqli_connect('localhost','root','','queries');
if(mysqli_connect_errno($connect))
{
echo 'failed to connect';
}
?>