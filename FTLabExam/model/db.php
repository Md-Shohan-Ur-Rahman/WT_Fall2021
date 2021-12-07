<?php
class db{
 
function OpenCon()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "retailprojectdb";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
 
 return $conn;
}

function SearchID($conn,$table,$ID){
    $result = $conn->query("SELECT * FROM $table WHERE ID = '$ID'");
    return $result;
}

function updateName($conn,$table,$Name){
    $result = $conn->query("SELECT * FROM $table WHERE Name = '$Name'");
    return $result;
}
function updateDepartment($conn,$table,$Department){
    $result = $conn->query("SELECT * FROM $table WHERE Department = '$Department'");
    return $result;
}


function UpdateSalary($conn,$table,$Salary){
    $result = $conn->query("SELECT * FROM $table WHERE Salary = '$Salary'");
    return $result;
}

function CloseCon($conn){
$conn->close();
}
}
?>