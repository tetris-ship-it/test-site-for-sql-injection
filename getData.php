<?php
//this code doesn't use Prepared statements(for separating data from code) or Escape and Quote methods (prevent from being tricked by special characters for the injection) which means it is vulnerable to SQL injection attacks
require 'db_testConnection.php';
$id = $_GET['ID'];
$password = $_GET['Password'];

$sql = "SELECT Name, Salary, SSN from employee where ID = $id and password = '$password'";//since EID in the database is of type varchar() then there needs to be a quote around its variable
$result = $conn -> query($sql);//for querying the database using the specified sql

if($result){
    if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){//to return the result of the query in an array form where the indexes are the table columns and their values are the values under that column
        printf ("Name: %s -- Salary: %s -- SSN: %s \n",//the %s are placeholders for the values which are provided by the associative array called row["column name to serve as the key to the value"]
                $row["Name"], $row["Salary"], $row["SSN"]);//this displays query result in this format for example: //Salary: 90000 -- SSN: 555-55-5555//
    }
    } else {
    printf ("Wrong EID or Password");//if there are no rows in the query result then display a message of Wrong EID or Password
    }
    $result -> free();//free the result variable or set
} else{
    printf ("Query execution error: %s", $conn -> error);//place holder %s of string type is substituted by $conn->error 
}
$conn -> close();//close the connection to the database

?>