<?php

$serverName = "localhost";//localhost is the server name.
$userName = "root";//the default user in apache server is 'root'.
$password = "";//since no password is specified for the username 'root' in the apache server there is no need to specify a password value.
$databaseName = "db_test";//the name of the database is "db_test" as was created by writing sql queries on cmd.

$conn = new mysqli($serverName,$userName,$password,$databaseName);//using mysqli method to connect to the database itself.
if($conn -> connect_error){
    die("Connection error:".$conn -> connect_error);//if there is an error display the connection error accordingly.
}
//echo "connected to the db_test database in the apache server successfully";
?>