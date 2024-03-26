<?php
require 'db_testConnection.php';
$id = $_POST['ID'];
$oldPswd = $_POST['Old-Password'];
$newPswd = $_POST['New-Password'];

$sql = "UPDATE employee SET password = '$newPswd' where ID = $id and password = '$oldPswd'";

//when using the sql injection attack of example: paswd456 ', Salary = 150000 # 
//the attack query will look like this:
//UPDATE employee SET password = 'paswd456 ', Salary = 150000 # ' where EID = 'EID5005' and password = 'paswd123';
//this would mean that the every employee will be changed regardless of what the specified EID is because the rest of the line got commented out.
//

$result = $conn -> query($sql);
if($result){
    echo "Password successfully changed";
} else {
    echo "Password change not successful";
}
$conn -> close();//close the connection after the password changing process is done

?>
