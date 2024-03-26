<?php
require 'db_testConnection.php';
$name = $_POST['Name'];
$eid = $_POST['EID'];
$pswd = $_POST['password'];
$Sal = $_POST['Salary'];
$ssn = $_POST['SSN'];


$sql = "INSERT INTO employee(Name,EID,password,Salary,SSN) values ('$name','$eid','$pswd',$Sal,'$ssn')";
$result = $conn -> query($sql);

if($result){
    echo "New User Successfully Added";
} else {
    echo "Nope";
}
$conn -> close();

?>