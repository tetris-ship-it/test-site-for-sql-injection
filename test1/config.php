<?php
$servername='';
$username='root';//the base username is "root"
$dabname='security';
$password='';
$conn=mysqli();
if($cubrid_connect_error)
{
	die();//this kills the process if there is a connection error as specified in the if conditional statement
}
echo "connected ";//display a message of connected if the connection is successful without errors
?>